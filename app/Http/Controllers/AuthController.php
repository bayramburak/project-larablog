<?php

namespace App\Http\Controllers;

use App\Mail\AdminInfoMail;
use App\Mail\UserRegisterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate(request(), [
                'firstName' => 'required|min:3|max:50',
                'lastName' => 'required|min:3|max:50',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:6|max:20'
            ]);

            $user = User::create([
                'name' => Str::of($request->firstName . ' ' . $request->lastName)->title()->trim(),
                //  'email' => Str::of($request->email)->trim(),
                'phone' => $request->phone,
                'email' => trim($request->email),
                'password' => Hash::make($request->password),
                'activation_code' => Str::random(50),
                'status' => '0'
            ]);

            Mail::to($request->email)->send(new UserRegisterMail($user));
            Mail::to($request->email)->send(new AdminInfoMail($user));

            //auth()->login($user);

            return redirect()->route('homepage');
        }

        return view('front.auth.register');
    }

    public function registerConfirm($activation_code)
    {
        $user = User::where('activation_code', $activation_code)->firstOrFail();

        $user->update([
            'activation_code' => null,
            'status' => '1'
        ]);

        auth()->login($user);

        return redirect()->route('homepage');

        //return redirect()->to('login');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ]);
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
                'status' => '1'
            ];
            if (auth()->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            } else {
                $errors = ['email' => 'Hatalı giriş'];
                return back()->withErrors($errors);
            }

        }

        return view('front.auth.login');
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('homepage');
    }

}
