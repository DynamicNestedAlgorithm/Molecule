@extends('layouts.app')
@section('stylesheet')

    <!-- Font awesome Core CSS -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/et-line.css')}}">

	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

	<!-- magnific-popup CSS -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- main style CSS -->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	<!-- Custom style CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

@endsection
@section('content')
<div class="registration">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 reg-color text-center regg-img hidden-sm hidden-xs">
                <a href="{{ url('/') }}">
                    <img src="img/molecule-nav.png" class="img-responsive reg-img" alt="Image">
                </a>
                <div class="clients mole-slider mb-50">
                    <div class="owl-carousel owl-theme">
                        <!-- Slider item -->
                        <div class="client-item text-center text-white">
                            <h5 class="mb-20">Business?,</h5>
                            <p class="mb-10 text-white f-20">Build Innovative Software with Real-time Development Insights.</p>
                        </div>

                        <!-- Slider item -->
                        <div class="client-item text-center text-white">
                            <h5 class="mb-20">Development?</h5>
                            <p class="mb-10 text-white f-20">Create, Manage your team, and View your Project being developed with Live Preview</p>
                        </div>

                        <!-- Slider item -->
                        <div class="client-item text-center text-white">
                            <h5 class="mb-20">Mentorship?</h5>
                            <p class="mb-10 text-white f-20">Connect and Develop your Skills with our Mentorship Programme</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 hire form-sec">
                <div class="toggle-logo-form hidden-md hidden-lg">
                    <a href="index.html">
                        {{-- <img src="img/molecule-nav.png" class="img-responsive mobile-logo-form" alt="Image"> --}}
                    </a>
                </div>
                <br>
                <br>
                <div class="form-opt text-center">
                            <a href="{{ route('register') }}">
                                <h6 class="tit tit-center text-white reg-head d-inline">Sign Up</h6>
                            </a>
                            <a href="{{ route('login') }}" class="active">
                                <h6 class="tit tit-center text-white reg-head d-inline">Sign In</h6>
                            </a>
                <br>
                <br>
                <br>
                <div class="form-card contact-item">
                        <h6 class="text-primary text-bold">Welcome Back!</h6>
                        <br><br>
                        <br><br>
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required >
    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn-mol small-font">
                                        {{ __('Register') }}
                                    </button>
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
