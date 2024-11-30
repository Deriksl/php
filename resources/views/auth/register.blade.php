

@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="register-form" action="{{ route('register') }}" method="POST" role="form" enctype="multipart/form-data">
                                @csrf
                                <h2>REGISTER</h2>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Last Name" value="{{ old('last-name') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="form-label">Upload Photo:</label>
                                    <input type="file" name="photo" id="photo" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <button type="submit" class="form-control btn btn-register">Register Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
