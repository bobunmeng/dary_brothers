<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Wish shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link href="{{ asset('plugins/colorbox/colorbox.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/responsive.css') }}">
</head>
<body>
<div id="app" class="super_container">
    @include('frontend.layouts.header')
    @include('frontend.layouts.menu')
    <main>
        <!-- Home -->

        <div class="home">

            <!-- Home Slider -->

            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url('images/home_slider_1.jpg')"></div>
                        <div class="home_slider_content">
                            <div class="home_slider_content_inner">
                                <div class="home_slider_subtitle">Promo Prices</div>
                                <div class="home_slider_title">New Collection</div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="home_slider_content_inner">
                                <div class="home_slider_subtitle">Promo Prices</div>
                                <div class="home_slider_title">New Collection</div>
                            </div>
                        </div>
                    </div>

                    <!-- Home Slider Item -->
                    <div class="owl-item">
                        <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                        <div class="home_slider_content">
                            <div class="home_slider_content_inner">
                                <div class="home_slider_subtitle">Promo Prices</div>
                                <div class="home_slider_title">New Collection</div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Home Slider Nav -->

                <div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

                <!-- Home Slider Dots -->

                <div class="home_slider_dots_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_dots">
                                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                        <li class="home_slider_custom_dot active">01.<div></div></li>
                                        <li class="home_slider_custom_dot">02.<div></div></li>
                                        <li class="home_slider_custom_dot">03.<div></div></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        @include('frontend.layouts.newsletter')
        @include('frontend.layouts.footer')
    </main>
</div>
</body>
<script src="{{ asset('js/frontend/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('css/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('css/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('js/frontend/custom.js') }}"></script>
</html>
