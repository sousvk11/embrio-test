<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Embroidr</title>
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScripts
    <!-- Fonts -->
    <link rel="shortcut icon" href="{{ asset('assets/images/icon/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('assets/cssfile/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/cssfile/welcome.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('assets/cssfile/common.css') }}" rel="stylesheet">
</head>

<body class="antialiased">

    <header class="headerSec">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand1 logoImg" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                            alt="logo" /></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="navbar-brand1 logoImg" href="index.html">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end align-items-center flex-grow-1 pe-3 menuSec">
                                <li><a href="{{ route('howItWorks') }}">How It Works</a></li>
                                <li><a href="javascript:void(0)">Pricing</a></li>
                                <ul class="navBtn">
                                    <li class="navLogBtn"><a href="{{  route('login')   }}"
                                            class=" d-flex align-items-center justify-content-center">Login</a></li>
                                    <li class="navSignBtn"><a href="{{  route('register')   }}"
                                            class=" d-flex align-items-center justify-content-center">Signup</a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>



    <main>
        {{ $slot }}
    </main>
<!-- clientsec start -->
<div class="growSec">
    <div class="container">
        <div class="growInnerSec d-flex justify-content-between">
            <div class="growLeftBox">
                <h1 class="growTitle">
                    Grow your business with <span class="footerHighlight">Embroidr</span>
                </h1>
                <p class="growPara">Sign up for free and start selling today</p>
                <a href="{{ route('login') }}"
                    class="pageBtn d-flex justify-content-between align-items-center"><span
                        class="pageBtnTitle">Get
                        Started</span><span class="arrowIcon d-flex justify-content-center align-items-center"><i
                            class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="growRightBox">
                <div class="growImg">
                    <img src="assets/images/home/grow_banner.png" alt="image" />
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="footerSec">
        <div class="container">
            <div class="footerInnerSec">
                <div class="footerMenuTitleBx">
                    <a class="footerLogoImg" href="{{ route('home') }}"><img src={{ asset('assets/images/logo_color.png') }}
                            alt="logo"></a>
                    <p class="footerPara">Build and grow your business with embroidr.io</p>
                </div>
                <div class="footerMenu">
                    <div class="footerMenuBx">
                        <ul class="footerMenuItemBx">
                            <li class="footerMenuItem"><a href="javascript:void(0)">© 2023 Embroidr.io</a></li>
                            <li class="footerMenuItem"><a href="javascript:void(0)">Terms</a></li>
                            <li class="footerMenuItem"><a href="javascript:void(0)">Privacy</a></li>
                        </ul>
                        <ul class="footerMenuItemBxNav">
                            <li><a href="{{ route('howItWorks') }}">How It Works</a></li>
                            <li><a href="javascript:void(0)">Pricing</a></li>
                            <li class="navSignBtn">
                                <a href="javascript:void(0)"
                                    class=" d-flex align-items-center justify-content-center">Signup</a>
                            </li>
                            <li class="navLogBtn">
                                <a
                                    href="javascript:void(0)"class=" d-flex align-items-center justify-content-center">Login</a>
                            </li>
                        </ul>
                        <ul class="footerMenuItemSocialBx">
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
