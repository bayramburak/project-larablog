@extends('front.layouts.master')
@section('title','Kayıt Ol')
@section('content')
    <div class="banner">
        <div class="container">
            <!-- form content / register area -->
            <div class="register-area">
                <!-- heading -->
                <h3>Sign Up, For An Account</h3>

                @include('front.layouts.errors.errors')

                <form role="form" id="register-form" method="post" action="{{route('register')}}">

                    {{csrf_field()}}

                    <label class="control-label" for="exampleInputName1">First name <sup style="color: red">*</sup></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName1" name="firstName" placeholder="First Name">
                        @if($errors->has('firstName'))
                            <strong style="color: red">{{$errors->first('firstName')}}</strong>
                        @endif
                    </div>

                    <label class="control-label" for="exampleInputName1">Last name <sup style="color: red">*</sup></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName1" name="lastName" placeholder="Last Name">
                    </div>

                    <label class="control-label" for="exampleInputPhone1">Phone <sup style="color: red">*</sup></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputPhone1" name="phone" placeholder="Phone">
                    </div>

                    <label class="control-label" for="exampleInputEmail1">Email <sup style="color: red">*</sup></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                        @if($errors->has('email'))
                            <strong style="color: red">{{$errors->first('email')}}</strong>
                        @endif
                    </div>

                    <label class="control-label" for="exampleInputPassword1">Password <sup style="color: red">*</sup></label>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                    </div>

                    <label class="control-label" for="exampleInputPassword2">Password Confirm<sup style="color: red">*</sup></label>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation" placeholder="Re-Password" required>
                    </div>



                    <p><sup>*</sup>Required field </p>


                    <input class="btn btn-large btn-success" type="submit" value="Register"/>


                </form>
            </div>
        </div>
    </div>
@endsection
