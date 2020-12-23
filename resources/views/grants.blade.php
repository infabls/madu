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
                h1, .h1{
                    margin-bottom:50px;
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

            .m-b-md {
                margin-bottom: 30px;
            }
            .content{
                max-width: 920px;
                width: 100%;
            }
            .grants-container{
              display: -webkit-flex;
              display: -ms-flex;
              display: flex;
              justify-content: space-around;
            }
            .grants{
                display:flex;
                flex-direction:column;
                align-items:center;
                border:1px solid #000;
                border-radius:10px;
                padding: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.5);
            }
            .link-details{
                margin: 10px;
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
               <h1>Все гранты <span>({{count($grants)}})</span></h1>
               @if (count($grants) > 0 )
               <div class="grants-container">


               @foreach ($grants as $grant)
                    <div class="grants">
                        <h2>{{$grant->name}}</h2>
                        <p>Статус гранта {{$grant->status}}</p>
                        <p>Дата начала {{$grant->starts_at}}</p>
                        <p>Дата окончания {{$grant->ends_at}}</p>
                        <!-- <img src="{{$grant->photo}}" alt="{{$grant->name}}" width="100px" height="100px"> -->
                        <a class="link-details" href="grant/{{$grant->id}}">Подробнее о гранте</a>
                        <!-- <button>Участвовать</button> -->
                    </div>
               @endforeach
                    </div>
               @else
               <p>Недоступен для участия</p>
               @endif

            </div><!--content-->
        </div><!--app-->

        @stack('before-scripts')
        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/frontend.js') }}"></script>
        @stack('after-scripts')
    </body>
</html>
