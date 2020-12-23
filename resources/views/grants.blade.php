<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ appName() }}</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ mix('css/frontend.css') }}" rel="stylesheet">
    <link href="/css/main-mini.css" rel="stylesheet">
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/fontello.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
    @stack('after-styles')

    @include('includes.partials.ga')
</head>
<body>
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.header')
        <!-- ================================
    START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="breadcrumb__title">Все гранты <span>({{count($grants)}})</span></h2>

                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="/">Главная</a></li>
                            <li>Гранты</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
<!-- ================================
    END BREADCRUMB AREA
    ================================= -->

<!--================================
         START CAUSES AREA
         =================================-->
         <section class="causes-area causes-area2">
            <div class="container">
                <div class="row blog-content-wrap">
                 @if (count($grants) > 0 )
                     @foreach ($grants as $grant)
                     <div class="col-lg-4">
                        <div class="blog-content">
                            <div class="blog-item blog-item1">
                                <div class="blog-img">
                                    <img src="images/img1.jpg" alt="">
                                    <!-- <img src="{{$grant->photo}}" alt="{{$grant->name}}" width="100px" height="100px"> -->
                                </div>
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="23"></span>
                                </div>
                                <div class="blog-inner-content">
                                    <h3 class="blog__title"><a href="causes-detail.html">{{$grant->name}}</a></h3>
                                    <p class="blog__desc">Описание гранта</p>
                                    <ul class="blog__list">
    
                                        <li><i class="icon-target"></i> Статус гранта <br> {{$grant->status}}</li>     
                                        <li><i class="icon-target"></i> Дата окончания: <br> <span>{{$grant->ends_at}}</span></li>
                                        <li><i class="fa fa-line-chart"></i> Дата начала: <br> <span>{{$grant->starts_at}}</span></li>
                                    </ul>
                                    <a class="theme-btn" href="grant/{{$grant->id}}">Подробнее о гранте</a>
                                    <!-- <button>Участвовать</button> -->
                                </div>
                            </div><!-- end blog-item -->
                        </div><!-- end blog-content -->
                    </div><!-- end col-lg-4 -->
                    @endforeach
                @else
                <p>Недоступен для участия</p>
                @endif

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end causes-area -->
<!--================================
        END CAUSES AREA
        =================================-->

        @include('includes.partials.footer')
        @stack('before-scripts')
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/frontend.js') }}"></script>
        @stack('after-scripts')
        <!-- start back-to-top -->
        <div id="back-to-top">
            <i class="fa fa-angle-up" title="Go top"></i>
        </div>
        <!-- end back-to-top -->

        <!-- Template JS Files -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/owl.carousel.min.js"></script>
        <script src="/js/jquery.magnific-popup.min.js"></script>
        <script src="/js/jquery.waypoints.js"></script>
        <script src="/js/jquery.counterup.min.js"></script>
        <script src="/js/jquery.barfiller.js"></script>
        <script src="http://maps.google.com/maps/api/js?v=quarterly&amp;language=en&amp;key=AIzaSyDvwYEsIXbjzlpUz05eDPFqDVdOr6mZwV8&amp;libraries=geometry%2Cplaces%2Cvisualization&amp;"></script>
        <script src="/js/gmaps.js"></script>
        <script src="/js/gmap-script.js"></script>
        <script src="/js/lightbox.js"></script>
        <script src="/js/smooth-scrolling.js"></script>
        <script src="/js/wow.js"></script>
        <script src="/js/main.js"></script>
    </body>
    </html>
