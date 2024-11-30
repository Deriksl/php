login.blade.php

@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="{{ route('login') }}" method="POST" role="form">
                                @csrf
                                <h2>LOGIN</h2>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6 pull-left checkbox">
                                        <input id="checkbox1" type="checkbox" name="remember">
                                        <label for="checkbox1">Remember Me</label>
                                    </div>
                                    <div class="col-xs-6 pull-right">
                                        <button type="submit" class="form-control btn btn-login">Log In</button>
                                    </div>
                                </div>
                            </form>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
