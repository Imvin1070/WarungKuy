<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>WarungKuy</title>
    @stack('styles')
</head>

<body>
    @if (Route::has('login'))
        <div class="wrapper">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="option">
                    <i class="fas fa-user"></i>
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="option">Login</a>
                    <span>/</span>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="option">Register</a>
                @endif
            @endauth
        </div>
    @endif


    <div class="container">
        <section id="sidebar" class="sidebar active">
            <div class="menu-btn">
                <i class="fas fa-angle-left"></i>
            </div>
            <div class="head">
                <div class="logo">
                    <img src="{{ URL::asset('img/IB.jpg') }}" alt="logo">
                </div>
                <div class="web-details">
                    <p class="title"><span class="title-span">W</span>arungKuy</p>
                    <p class="name"><span>Imanuel V H</span></p>
                </div>
            </div>
            <div class="nav">
                <div class="menu">
                    <p class="title">Menu</p>
                    {{-- <i class="fa-solid fa-chevron-right"></i>
                        <i class="fa-solid fa-chevron-left"></i> --}}
                    <ul>
                        <li>
                            <a href="/">
                                <i class="fa-solid fa-house"></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="fas fa-box"></i>
                                <span class="text">Barang</span>
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/form">
                                        <i class="fa-solid fa-box"></i>
                                        <span class="text">Form Pendataan Barang</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/data">
                                        <i class="fas fa-boxes-stacked"></i>
                                        <span class="text">Data Barang</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <p class="title">Transaksi</p>
                        <li class="active">
                            <a>
                                <i class="fas fa-box"></i>
                                <span class="text">Barang Masuk</span>
                            </a>
                        </li>
                        <li class="active">
                            <a>
                                <i class="fas fa-boxes-packing"></i>
                                <span class="text">Barang Keluar</span>
                            </a>
                        </li>
                        {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form> --}}


                    </ul>

                </div>
            </div>
        </section>

        <section id="content">
            @yield('content')
        </section>

    </div>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
