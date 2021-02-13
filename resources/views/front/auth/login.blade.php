@extends('front.layouts.master')
@section('title','Kullanıcı Girişi')
@section('content')
    <div class="banner">
        <div class="container">
            <!-- form content / login area -->
            <div class="login-area">


            <!-- heading -->
                <h3>Sign In, To Your Account</h3>
                <hr class="soft"/>

                @include('front.layouts.errors.errors')


                <form role="form" id="login-form" method="post" action="{{route('login')}}" >


                    {{csrf_field()}}

                    <label class="control-label" for="exampleInputEmail1">Email</label>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>

                    <label class="control-label" for="exampleInputPassword1">Password</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="checkbox form-group">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
