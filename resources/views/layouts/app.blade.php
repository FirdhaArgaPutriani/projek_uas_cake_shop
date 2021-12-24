<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ossena Cake's</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('images/logo.png') }}" width="50">
                    Ossena Cake's
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif

                        @else
                        <li class="nav-item">
                            <a id="navbar" class="nav-link" href="/home">
                                Home
                            </a>
                        </li>

                        @can('isAdmin')
                        <li class="nav-item">
                            <a id="navbar" class="nav-link" href="/users">
                                Data User
                            </a>
                        </li>

                        <li class="nav-item">
                            <a id="navbar" class="nav-link" href="/cakes">
                                Data Cake
                            </a>
                        </li>

                        <li class="nav-item">
                            <a id="navbar" class="nav-link" href="transactions">
                                Data Transaksi
                            </a>
                        </li>

                        @elsecan('isGuest')
                        <li class="nav-item">
                            <a id="navbar" class="nav-link" href="/products">
                                Product
                            </a>
                        </li>

                        <li class="nav-item">
                            <a id="navbar" class="nav-link" href="/ContactUs">
                                Contact Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <?php
                                $transaction_utama = \App\Models\Transaction::where('user_id', Auth::user()->id)->where('status', 0)->first();
                                if (!empty($transaction_utama)) {
                                    $notif = \App\Models\TransactionDetail::where('transaction_id', $transaction_utama->id)->count();
                                }
                            ?>
                            <a class="nav-link" href="/check-out">
                                <i class="fa fa-shopping-cart"></i>
                                @if(!empty($notif))
                                    <span class="badge badge-danger">{{ $notif }}</span>
                                @endif
                            </a>
                        </li> 
                        @endcan
                        

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/profile">
                                    Profile
                                </a>
                                
                                @can('isGuest')
                                <a class="dropdown-item" href="/history">
                                    Riwayat Pemesanan
                                </a>
                                @endcan

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer-14398">
            <div class="container">
                <div class="row ">
                    <div class="col-12 text-center">
                        <div class="copyright mt-5 pt-5">
                            <p><small>&copy; 2021-2021 All Rights Reserved. Design By Firdha & Luvi</small></p>
                        </div>
                    </div>
                </div> 
            </div>
        </footer>
    </div>
</body>

</html>