<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Betwas</title>
    
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <style type="text/css">
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{{ asset('img/loading.gif')}}") 50% 50% no-repeat white;
        }
    </style>
</head>
<body>
    <div id="loader" class="loader"></div> 
    <div id="app" style="display: none;">
        @guest
        <!-- coisas que aparecem na tela de login -->
        <div>
            @yield('content')
        </div>
        @else
            <section class="uk-offcanvas-content">
                <!-- menu main -->
                <nav class="uk-navbar-container mb-menu theme-dense" uk-navbar="mode:click">
                    <a href="{{ route('home') }}" class="uk-navbar-item uk-logo" style="padding: 5px 19px 27px; color: white;">
                        Betwas
                    </a>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">

                            <li class="mb-active uk-visible@m">
                                <a href=""  style="min-height: auto !important; margin: 3px; color: white;">
                                    <img src="{{ asset('img/user_male.png') }}" alt="user" style="height:3.5em;position:relative;right:0.5em;" />
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="uk-navbar-dropdown" id="mb-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="{{ route('profile') }}" style="color: white;"><i class="fas fa-user"></i> Perfil</a></li>
                                        <li><a href="{{ route('logout') }}" style="color: white;"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
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
                                <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                            </li>
                            <li class="uk-margin">
                                <a href="{{ route('ranking') }}"><i class="fas fa-trophy"></i> Classificação</a>
                            </li>
                            <li class="uk-margin">
                                <a href="{{ route('bet') }}"><i class="far fa-futbol"></i> Apostar</a>
                            </li>
                            <li class="uk-parent uk-margin">
                                <a href="#"><i class="fas fa-cog"></i> Configurações</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="{{ route('profile') }}"><i class="fas fa-user"></i> Perfil</a></li>
                                    <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- closed menu sidebar -->

                    <!-- content page -->
                    <main class="mb-content">
                        <section class="uk-padding-small">
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
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    @stack('scripts')
    <script type="text/javascript">
        $(window).on("load", function() {
            $(".loader").delay(300).fadeOut("slow"); //retire o delay quando for copiar!
            $("#app").toggle("fast");
        })
    </script>
</body>
</html>
