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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .content{
                max-width: 920px;
                width: 100%;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .work_inner{
                display:flex;
                justify-content:space-around;
            }
            button{
                border: none;
                background: #36d2ea;
                color:#fff;
                text-transform:uppercase;
                font-weight:bold;
                margin-top:10px;
                margin-bottom:10px;
                padding: 10px;
            }
            button:hover{
                background: #2894a5;
            }
        </style>
        @stack('after-styles')

        @include('includes.partials.ga')
    </head>
    <body>
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')
        <div id="app" class="flex-center position-ref full-height">
            <div class="top-right links">
                @auth
                    @if ($logged_in_user->isUser())
                        <a href="{{ route('frontend.user.dashboard') }}">@lang('Dashboard')</a>
                    @endif

                    <a href="{{ route('frontend.user.account') }}">@lang('Account')</a>
                @else
                    <a href="{{ route('frontend.auth.login') }}">@lang('Login')</a>

                    @if (config('boilerplate.access.user.registration'))
                        <a href="{{ route('frontend.auth.register') }}">@lang('Register')</a>
                    @endif
                @endauth
            </div><!--top-right-->

            <div class="content">
              <div class="work_inner">
                <div class="work_inner-left">
                    <h1>{{$works->name}}</h1>
                    <p>Стоимость лота {{$works->price}} тг</p>
                    <img src="{{$works->photo}}" alt="{{$works->name}}">
                </div>
                <div class="work_inner-right">
                    @if (count($orders) > 0)
                    <p>Всего заявок - {{count($orders)}}</p>
                    @endif
                    @if ($works->status == 'on')
                    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('/works/buy')}}">
                    @csrf
                    <div class="box_detail booking">
                     <div class="price">
                         <div class="form-group">
                             <input  value="{{$works->id}}" type="text" id="worksId" name="worksId" class="form-control" required="" hidden="">
                         </div>
                         <span>Оставить заявку</span>
                     </div>
                     <div class="form-group" id="input-dates">
                         <div class="form-group">
                           <label for="exampleInputEmail1">Имя</label>
                           <input  name="name" type="text" class="form-control" id="name" required="" placeholder="Имя Фамилия">
                       </div>
                   </div>
                   <div class="form-group" id="input-dates">
                       <div class="form-group">
                           <label for="exampleInputEmail1">Номер телефона</label>
                           <input  name="phone" type="tel" class="form-control" id="phone" required="" placeholder="Введите ваш номер">
                       </div>
                   </div>
                   <div class="form-group" id="input-dates">
                       <div class="form-group">
                           <label for="email">Емейл</label>
                           <input  name="email" type="email" class="form-control" id="email" required="" placeholder="Ваш емейл">
                       </div>
                   </div>
                   <button type="submit" class="add_top_30 btn_1 full-width purchase">Записаться</button>
                   <div class="text-center"><small>Подача заявки бесплатна!</small></div>
               </div>
           </form>

                    @else
                    <p>Недоступен для участия</p>
                    @endif
                </div>


            </div><!--content-->
              </div>
        </div><!--app-->

        @stack('before-scripts')
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/frontend.js') }}"></script>
        @stack('after-scripts')
    </body>
</html>
