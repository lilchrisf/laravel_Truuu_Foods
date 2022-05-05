<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    @include('dashcss')
</head>
{{-- @extends('products.layout') --}}

@section('content')
<body>

<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
        <h1><span class="las la-fish"></span><span>Truuu Foods</span></h1>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li>
                <a href="dashboard" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashitems"><span class="las la-car-side"></span>
                    <span>Order Items</span>
                </a>
            </li>
            <li>
                <a href="dashproduct"><span class="las la-fish"></span>
                    <span>All Products</span>
                </a>
            </li>
            <li>
                <a href="dashorder"><span class="las la-shopping-bag"></span>
                    <span>Orders</span>
                </a>
            </li>
            <li>
                <a href="dashcategory"><span class="las la-shopping-bag"></span>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="dashmembers"><span class="las la-users"></span>
                    <span>Members</span>
                </a>
            </li>
            <li>
                <a href="members"><span class="las la-user-circle"></span>
                    <span>Accounts</span>
                </a>
            </li>
            <li>
                <a href="dashmessage"><span class="las la-sms"></span>
                    <span>Message</span>
                </a>
            </li>
            <li>
                <a href="dashboard"><span class="las la-clipboard-list"></span>
                    <span>Add Products</span>
                </a>
            </li>
            <li>
                <a href="/"><span class="las la-book-open"></span>
                    <span>Pages</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="main-content">
    <header>
        <h1>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Dashboard
        </h1>

        <form action="{{ url('/search') }}" method="GET">
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="text" name="search" placeholder="Search here" />
            </div>
        </form>

        <div class="user-wrapper">
            <img src="https://hiphop-n-more.com/wp-content/uploads/2020/02/lil-wayne-2020-new.jpg" width="30px" height="30px" alt="">
            <div>
                <h4>
                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{-- {{ Auth::user()->name }} --}}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </h4>
                <small>Lilchris Admin</small>
            </div>
        </div>
    </header>

    <main>




</body>
</html>
