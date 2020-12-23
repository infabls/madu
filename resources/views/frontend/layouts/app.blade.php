<!doctype html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ appName() }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', appName())">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')

    @stack('before-styles')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
    <livewire:styles />
    @stack('after-styles')

    @include('includes.partials.ga')
</head>
<body>
    @include('includes.partials.read-only')
    @include('includes.partials.logged-in-as')
    @include('includes.partials.header')

    <div id="app">
{{--         @include('frontend.includes.nav') --}}
        @include('includes.partials.messages')

        <main>
            @yield('content')
        </main>
    </div><!--app-->
    @include('includes.partials.footer')
    @stack('before-scripts')
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/frontend.js') }}"></script>
    <!-- Template JS Files -->
{{--     <script src="/js/jquery.min.js"></script>--}}
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
    <!-- Template JS Files -->
    <livewire:scripts />
    @stack('after-scripts')
    <div id="back-to-top">
        <i class="fa fa-angle-up" title="Go top"></i>
    </div>
</body>
</html>
