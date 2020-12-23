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
<!--================================
START CAUSES DETAIL AREA
=================================-->
<section class="causes-detail-area">
<div class="container">
<div class="row blog-content-wrap">
<div class="col-lg-12">
    <div class="blog-content">
        <div class="blog-item">
            <div class="blog-img">
                <img src="/images/slider1.jpg" alt="">
            </div>
            <div id="bar1" class="barfiller">
                <div class="tipWrap">
                    <span class="tip"></span>
                </div>
                <span class="fill" data-percentage="23"></span>
            </div>
            <div class="blog-inner-content">
                <div class="inner-causes-box">
                    <h3 class="blog__title"><a href="#">{{$grants->name}}</a></h3>
                    <ul class="blog__list">
                        @if (count($orders) > 0)
                        <li><i class="icon-target"></i><br>Всего заявок - <span>{{count($orders)}}</span></li>
                        @endif
                        <li><i class="icon-target"></i><br>Статус гранта <span>{{$grants->status}}</span></li>
                        <li><i class="fa fa-line-chart"></i><br>Дата начала <span>{{$grants->starts_at}}</span></li>
                        <li><i class="fa fa-line-chart"></i><br>Дата окончания <span>{{$grants->ends_at}}</span></li>
                            </ul>
                        </div>
 {{--                        <div class="inner-causes-btn">
                            <a href="#" class="theme-btn">Подать заявку</a>
                        </div> --}}
                    </div>
                    <div class="blog-inner-content-2">
<div class="row">
    <div class="col-lg-4">
        @if ($grants->status !== 'ended')
                        <div class="form-shared">
                            <!--Contact Form-->
                           <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('/grant/order/')}}" enctype="multipart/form-data">
                             <div class="row">
                                @csrf
                                {{--    <div class="box_detail booking"> --}}
                                 <div class="price">
                                     <div class="col-lg-12 col-sm-12 form-group">
                                         <input  value="{{$grants->id}}" type="text" id="grantsId" name="grantsId" class="form-control" required="" hidden="">
                                     </div>
                                     <h2>Оставить заявку</h2>
                                     <br>
                                 </div>
                                 <div class="col-lg-12 col-sm-12 form-group" id="input-dates">
                                     <div class="form-group">
                                    
                                       <input  name="name" type="text" class="form-control" id="name" required="" placeholder="Имя Фамилия">
                                   </div>
                               </div>
                               <div class="col-lg-12 col-sm-12 form-group" id="input-dates">
                                   <div class="form-group">
                                      
                                       <input  name="phone" type="tel" class="form-control" id="phone" required="" placeholder="Введите ваш номер">
                                   </div>
                               </div>
                               <div class="col-lg-12 col-sm-12 form-group" id="input-dates">
                                   <div class="form-group">
                                      
                                       <input  name="email" type="email" class="form-control" id="email" required="" placeholder="Ваш емейл">
                                   </div>
                               </div>
                               <div class="col-lg-12 col-sm-12 form-group" id="input-dates">
                                   <div class="form-group">
                                       <label class="form-control" for="fileupload">Файл заявления</label>
                                       <input  name="fileupload" type="file" class="form-control" id="fileupload" required="">
                                   </div>
                               </div>
                               <button type="submit" class="theme-btn submit__btn add_top_30 btn_1 full-width purchase">Записаться</button><br>
                            <br>
                           {{-- </div> --}}
                       </div><!-- end row -->
                   </form>
               </div><!-- end contact-form-action -->
               @else
               <p>Недоступен для участия</p>
               @endif
    </div>
    <div class="col-lg-8">
        
           <p class="causes__text">
Далеко-далеко за, словесными горами в стране гласных и согласных живут рыбные тексты. Текст коварный ведущими, заглавных необходимыми, за которой домах взгляд своих эта собрал она своего он рыбного большого, имеет вопрос оксмокс?
        </p>
        <p class="causes__text causes__text2">
Далеко-далеко за словесными горами в стране гласных и согласных, живут рыбные тексты. Переулка, грамматики раз меня но силуэт однажды проектах буквенных коварных маленький рукописи маленькая рукопись, составитель, пояс текст необходимыми прямо переписали.
        </p>
        <div class="inner-causes-img-box row">
            <div class="col-lg-6">
               <div class="inner-causes-img-item inner-causes-img-item1">
                   <img src="/images/slider1.jpg" alt="">
               </div>
           </div>
           <div class="col-lg-6">
            <div class="inner-causes-img-item inner-causes-img-item2">
                <img src="/images/slider1.jpg" alt="">
            </div>
        </div>
    </div>
    <p class="causes__text">
Далеко-далеко за словесными горами, в стране гласных и согласных живут рыбные тексты. Текстами выйти если использовало пор коварный всеми продолжил свой послушавшись то великий оксмокс встретил курсивных ему которое грамматики, силуэт. Сбить.
    </p>

    </div>
    
</div>
         <div class="presentation-block">
        <h3><i class="fa fa-file-pdf-o"></i>Скачать презентацию</h3>
        <button class="theme-btn" type="button"><i class="fa fa-download"></i> Скачать</button>
    </div>                   
        
</div>
</div>
</div>
</div>
</div>
</div>
</section>
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
