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
    <link href="{{ mix('css/custom.css') }}" rel="stylesheet">
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
    <!-- page preloader -->
    <div id="loading-area">
        <div class="loader-box">
            <div class="loader" id="loader-1"></div>
        </div>
    </div><!-- end loading -->

    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.header')
<!--================================
         START SLIDER AREA
=================================-->
<section class="slider-area">
    <div class="homepage-slide1">
        <div class="single-slide-item slide-bg1">
            <div class="slide-item-table">
                <div class="slide-item-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slider-heading">
                                    <p class="slider__meta">Добро пожаловать</p>
                                    <h2 class="slider__title">Вся информация о грантах</h2>
                                    <a href="#" class="theme-btn">Подробнее</a>
                                </div>
                            </div><!-- col-md-7 -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- slide-item-tablecell -->
            </div><!-- slide-item-table -->
        </div><!-- end single-slide-item -->
        <div class="single-slide-item slide-bg1">
            <div class="slide-item-table">
                <div class="slide-item-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slider-heading">
                                    <p class="slider__meta">Добро пожаловать</p>
                                    <h2 class="slider__title">Вся информация о грантах 2</h2>
                                    <a href="#" class="theme-btn">Подробнее</a>
                                </div>
                            </div><!-- col-md-7 -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- slide-item-tablecell -->
            </div><!-- slide-item-table -->
        </div><!-- end single-slide-item -->
        <div class="single-slide-item slide-bg1">
            <div class="slide-item-table">
                <div class="slide-item-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="slider-heading">
                                    <p class="slider__meta">Добро пожаловать</p>
                                    <h2 class="slider__title">Вся информация о грантах 3</h2>
                                    <a href="#" class="theme-btn">Подробнее</a>
                                </div>
                            </div><!-- col-md-7 -->
                        </div><!-- row -->
                    </div><!-- container -->
                </div><!-- slide-item-tablecell -->
            </div><!-- slide-item-table -->
        </div><!-- end single-slide-item -->
    </div><!-- end homepage-slides -->
</section><!-- end slider-area -->
<!--================================
        END SLIDER AREA
=================================-->
<!--================================
         START ENTRY AREA
=================================-->
<section class="entry-area">
    <div class="container">
        <div class="row entry-static-wrap">
            <div class="col-lg-3">
                <div class="entry-static-box entry-static-box1">
                    <div class="section-icon">
                        <img src="images/section-icon.png" alt="section-icon">
                    </div>
                    <h4 class="entry__title">Как работать с нашей платформой</h4>
                </div><!-- entry-static-box -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-9">
                <div class="entry-static-box entry-static-box2 d-flex align-items-center">
                   <div class="row">
                       <div class="col-lg-4">
                           <div class="entry-video-img">
                               <img src="images/slider1.jpg" alt="entry-video-img">
                               <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=PbUxi2Lx8x8" title="Play Video"><i class="fa fa-play"></i></a>
                           </div>
                       </div>
                       <div class="col-lg-8">
                           <div class="entry-video-text">
                               <h4 class="entry__title">Подробное видео о работе с нашей платформой</h4>
                               <p class="entry__text">Легко и доступно в формате видео</p>
                           </div>
                       </div>
                   </div>
                </div><!-- entry-static-box -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end entry-area -->
<!--================================
        END ENTRY AREA
=================================-->
<!-- ================================
    START CTA AREA
================================= -->       
<section class="cta-area text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="cta-item cta-item1">
                    <h3 class="cta__title">Просмотр всех доступных грантов</h3>
                    <a href="/grants" class="theme-btn">Все гранты</a>
                </div><!-- end cta-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6 col-sm-6">
                <div class="cta-item cta-item2">
                    <h3 class="cta__title">Подача заявки на грант</h3>
                    <a href="/add-works" class="theme-btn">Добавить грант</a>
                </div><!-- end cta-item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area helping-area">
    <div class="container">
        <div class="row mixer-heading">
             <h2 class="section__title mx-auto">Наши партнеры</h2>
            <div class="col-md-12">
                <div class="client-logo">
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                    <div class="client-logo-item">
                        <img src="images/client-logo.png" alt="brand image">
                    </div><!-- end client-logo-item -->
                </div><!-- end client-logo -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<!-- ================================
    START MAP AREA
================================= -->
<section class="map-area">
    <div id="map"></div><!-- end map -->
</section><!-- end map-area -->
<!-- ================================
    END MAP AREA
================================= -->

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
