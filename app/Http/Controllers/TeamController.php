<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function team()
    {
        //$teams = DB::table('teams')->take(10)->get();
        $teams = Team::all()->take(10);
        //dd($teams);

        return view('front.new-team',compact('teams'));
    }
}

