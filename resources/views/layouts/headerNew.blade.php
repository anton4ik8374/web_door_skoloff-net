<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/icon/logos.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|poppins:400,600,700" rel="stylesheet" type="text/css" />
    @foreach ($data['style'] as $style)
        <link rel="stylesheet" href="{{asset($style)}}" type="text/css" />
    @endforeach
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Skoloff-net</title>

    <style>

        .swiper-container-horizontal>.swiper-scrollbar {
            top: 50%;
            bottom: auto;
            left: 50%;
            margin-left: 20%;
            width: 200px;
            height: 2px;
            transform: translateY(-50%);
            background-color: rgba(0,0,0,0.4);
            border-radius: 2px;
        }

        .swiper-scrollbar-drag { background: #000 }

        .slide-number {
            opacity: 1;
            bottom: 10px;
            text-align: left;
            right: auto;
        }

        .slide-number-current {
            top: auto;
            bottom: 0;
            font-size: 30px;
            font-weight: 700;
        }

        .slide-number span {
            margin-left: 20px;
            font-size: 16px;
        }

        .slide-number-total {
            font-size: 13px;
            line-height: 28px;
            left: 29px;
        }

        .swiper-navs {
            position: absolute;
            display: block;
            left: 50%;
            top: 50%;
            margin-top: 60px;
            margin-left: 20%;
        }

        .slider-arrow-left,
        .slider-arrow-right {
            border-radius: 50%;
            background: transparent;
            border: 1px solid rgba(0,0,0,0.7);
            width: 36px;
            height: 36px;
        }

        .slider-arrow-right { left: 45px; }

        .slider-arrow-left i,
        .slider-arrow-right i {
            display: block;
            width: 36px;
            height: 36px;
            font-size: 16px;
            line-height: 34px;
            margin: 0 auto;
            color: #000;
        }

        .slider-arrow-right i { margin-left: -1px; }

        .swiper-button-disabled {
            opacity: .5;
            cursor: default;
        }

        .dark .slider-arrow-left,
        .dark .slider-arrow-right { border-color: rgba(255,255,255,0.7); }

        .dark .swiper-container-horizontal > .swiper-scrollbar { background-color: rgba(255,255,255,0.4);  }

        .dark .swiper-scrollbar-drag { background: #FFF }

        .dark .slide-number,
        .dark .slider-arrow-left i,
        .dark .slider-arrow-right i { color: #FFF; }

        @media (min-width: 576px) and (max-width: 767px) {
            .swiper-container-horizontal>.swiper-scrollbar {
                top: auto;
                left: auto;
                bottom: 70px;
                right: 30px;
                width: 100px;
                height: 2px;
                transform: translateY(0);
            }

            .swiper-navs {
                left: auto;
                top: auto;
                bottom: 30px;
                right: 115px;
                margin: 0;
            }
        }

        .slider-element .slider-product-desc {
            position: absolute;
            top: auto;
            bottom: 0;
            left: auto;
            right: 0;
            width: 65%;
            z-index: 2;
            overflow: hidden;
        }

        .slider-element .slider-product-desc a .icon-play {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 99;
            color: #000;
            font-size: 20px;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #FFF;
            border-radius: 50%;
            text-align: center;
            padding-left: 4px;
            margin-top: -20px;
            margin-left: -20px;
            -webkit-transition: transform .3s ease;
            -o-transition: transform .3s ease;
            transition: transform .3s ease;
        }

        .slider-element .slider-product-desc a:hover .icon-play {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .blurred-box:after{
            content: '';
            width: 130%;
            height: 130%;
            background: inherit;
            position: absolute;
            left: -25px;
            top: -25px;
            background-color: rgba(255,255,255,0.2);
            -webkit-filter: blur(20px);
            -o-filter: blur(20px);
            filter: blur(20px);
        }

        @media (max-width: 576px) {
            .swiper-container-horizontal>.swiper-scrollbar { display: none; }
            .swiper-navs { right: 0px; }
        }

    </style>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header transparent-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="/" class="standard-logo" data-dark-logo="images/logo/logo2.JPG"><img src="images/logo/logo3.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        @foreach ($data['menu'] as $punkt)
                            <li class="current"><a href="{{$punkt->url}}" class="@if(Route::currentRouteName() === $punkt->name_laravel)active-punck @endif"><div>{{$punkt->name}}</div></a></li>
                        @endforeach
                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="tel:+79967843542" style="font-size: 2em;"><i class="icon-phone3"></i><i class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <!-- Slider
    ============================================= -->

    <!-- Changes Functions.js // added .swiper-scrollbar -->

    <section id="slider" class="slider-element dark swiper_wrapper full-screen clearfix" data-autoplay="5000" data-speed="450">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                @foreach ($data['slider'] as $slid)
                    <div class="swiper-slide dark" style="background-image: url({{ $slid->images}})">
                        <div class="container clearfix">
                            <div class="slider-caption" style="max-width: 450px">
                                <h2 class="nott" data-animate="fadeInUp">{{ $slid->text1}}</h2>
                                <p class="d-none d-sm-block" style="font-size: 17px;" data-animate="fadeInUp" data-delay="200">{{ $slid->text2}}</p>
                                <a href="tel:+7(996)7843542" data-animate="fadeInUp" data-delay="400" class="button button-rounded button-large ml-0 mt-4">ПОЗВОНИТЬ</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-navs">
                <div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
            </div>
            <div class="swiper-scrollbar">
                <div class="swiper-scrollbar-drag">
                    <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div></div>
            </div>
        </div>

        <!-- Slider Bottom Content
        ============================================= -->
        <div class="slider-product-desc dark">
            <div class="row nomargin d-none d-md-flex clearfix">
                <div class="col-md-8 px-5 py-4 blurred-box">
                    <div class="before-heading text-white-50 t400 uppercase ls1 t400 mb-3" style="font-style: normal; font-family: 'Poppins', sans-serif; font-size: 12px;">Собственный бокс </div>
                    <h3 class="mb-1" style="font-family: 'Poppins', sans-serif;">Отвечающий последним тенденциям</h3>
                    <p class="mb-2 text-white-50">В котором мы быстро и качественно устраним любую неисправность.</p>
                </div>

                <a href="//vk.com/video_ext.php?oid=57683715&id=456239113&hash=4529c72b38b80a44&hd=2"  data-lightbox="iframe" class="col-md-4 image_fade" style="background: url('/images/logo/video.jpg') center center / cover">
                    <i class="icon-play"></i>
                </a>
            </div>
        </div>

    </section>

@yield('content')

@extends('layouts.footerNew')
