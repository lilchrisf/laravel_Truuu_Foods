<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rigster</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title> shopping-cart</title>
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@include('foodcss')
<style>

.form{
    width: 450px;
    height: auto;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    margin-top: 10%;
    margin-left: 33%;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 100%;
    font-family: sans-serif;
    text-align: center;
    color: var(--black);
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 100%;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid var(--black);
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 100%;
    height: 40px;
    background: var(--black);
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: var(--black);
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: var(--black);
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: var(--black);
}
label{
    font-size: 15px;
    color: white;
}
</style>

{{-- @include('header') --}}
@section('content')

</head>
<body style="background-color: rgba(0, 0, 0, 0.589);">
    <header>

        <a href="category" class="logo"><i class="fas fa-fish"></i>Truuu Foods.</a>

        <nav class="navbar">
            <a class="active" href="category">home</a>
            <a href="#dishes">Products</a>
            <a href="#about">about</a>
            <a href="#menu">Populor</a>
            {{-- <a href="#review">review</a> --}}
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

{{-- font awesome icones link --}}
        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="{{ route('cart.list') }}" class="fas fa-shopping-cart cart-count">0</a>


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


    <div class="main">
        <div class="navbar">

        <form method="POST" action="{{ route('register') }}" class="form" enctype="multipart/form-data">
                        @csrf
                    <h2>Register Here</h2>
                <div class="inputBox" style="display: flex">
                    <input type="text" name="fname" placeholder="Enter firstname Here">
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="text" name="lname" placeholder="Enter lastname Here">
                    @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="inputBox" style="display: flex">
                    <input type="number" name="phone" placeholder="Enter Phone Here">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="email" name="email" placeholder="Enter Email Here">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="inputBox" style="display: flex">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="password" name="password_confirmation" placeholder="Confirmation Password">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="inputBox" style="display: flex">
                    <input type="text" name="parish" placeholder="Enter Parish Here">
                    @error('parish')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <input type="text" name="town" placeholder="Enter Town Here">
                    @error('town')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                    <button class="btnn" type="submit">Register</button>

                    <p class="link">Already have an acount<br>
                    <a href="login">Login in </a> here</a></p>



                </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    @endsection
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>

