@extends('layouts.app')

@section('content')
@include('foodcss')
<head>
    <style>
        body{
            background-color: #666;
        }
    </style>
</head>

<header>
    <title>Rigster</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title> shopping-cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <a href="category" class="logo"><i class="fas fa-fish"></i>Truuu Foods.</a>

    <nav class="navbar">
        <a class="active" href="category">home</a>
        <a href="#dishes">Products</a>
        <a href="#about">about</a>
        <a href="#menu">Populor</a>
        <a href="contact">Contact</a>
        <a href="userorder">My Order</a>
        @if (Route::has('login'))
            @auth
            {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
       @endif

    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="{{ route('cart.list') }}" class="fas fa-shopping-cart cart.count"></a>
        {{-- <a href="{{ route('cart.list') }}" class="fas fa-shopping-cart cart-count">0</a> --}}


        <i class="fas fa-user" id="dropbtn">
            <div class="dropdown">
                <div class="dropdown-content" style="border-radius:50%; padding:5px" >

                    @if (Route::has('login'))
            @auth
            {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                <span style="margin-left: 0px; border-radius:50%" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </span>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    {{ Auth::user()->name }}
                </form>

            @else

            @endauth
       @endif
                </div>
              </div>
        </i>
    </div>
</header>

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8" style="border-radius: 20px">
            <div class="card" style="border-radius: 20px">
                <div class="card-header" style="font-size: 3rem">{{ __('Login Here') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="font-size: 2rem">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input style="height: 50px; font-size:1.5rem" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="font-size: 2rem">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input style="height: 50px" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input style="height: 20px; width: 20px" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="font-size: 2rem">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
