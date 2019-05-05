<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Betwas - Administrador</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body>
    <div id="app">
        @guest
        <!-- coisas que aparecem na tela de login -->
        <div>
            @yield('content')
        </div>
        @else
            <section class="uk-offcanvas-content">
                <!-- menu main -->
                <nav class="uk-navbar-container mb-menu theme-mix" uk-navbar="mode:click">
                    <a href="" class="uk-navbar-item uk-logo" style="padding: 5px 19px 27px;">
                        Betwas
                    </a>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">

                            <li class="mb-active uk-visible@m">
                                <a href=""  style="min-height: auto !important; margin: 3px;">
                                    <img src="{{ asset('img/user_male.png') }}" alt="user" style="height:3.5em;position:relative;right:0.5em;" />
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="uk-navbar-dropdown" id="mb-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{ route('logout-admin') }}"><span uk-icon="sign-out"></span>Sair</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- closed menu -->

                <section class="mb-body">
                    <!--  menu sidebar -->
                    <nav class="uk-card uk-card-secondary uk-card-body  mb-menu-sidebar uk-visible@m">
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="uk-nav-center">
                                <a  href="#">

                                    <img src="{{ asset('img/user_male.png') }}"  class="mb-picture-user" alt="user" />

                                    <div style="position:relative;top:3px;">
                                        <strong class="color">{{ Auth::user()->name }}</strong>
                                        <span class="color" style="font-size: 80%;font-style:oblique;"> {{ Auth::user()->email }} </span>
                                    </div>
                                </a>
                            </li>
                            <li class="uk-nav-divider"></li>
                            <li class="uk-margin">
                                <a href=""> Dashboard</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- closed menu sidebar -->

                    <!-- content page -->
                    <main class="mb-content">
                        <section class="uk-flex uk-padding-small">
                            @yield('content')
                        </section>
                    </main>
                    <!-- closed content page -->
                </section>
            </section>
        @endguest
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
</body>
</html>
