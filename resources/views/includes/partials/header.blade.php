<!-- ================================
START HEADER AREA
================================= -->
<header class="header-area">
<div class="header-top-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="top-action-content">
                    <div class="info-box info-box-1 d-flex align-items-center">
                        <ul class="d-flex align-items-center">
                            <li><a href="mailto:exemple@exemple.com"><i class="fa fa-envelope"></i>exemple@exemple.com</a></li>
                            <li><a href="tel:777 888 0000<"><i class="fa fa-phone-square"></i>777 888 0000</a></li>
                        </ul>
                    </div><!-- end info-box -->
                </div><!-- top-action-content -->
            </div><!-- end col-lg-6 -->

            <div class="col-lg-7">
                <div class="top-action-content info-action-content">
                    <div class="info-box info-box-2 d-flex align-items-center justify-content-end">
                        <ul class="top-action-list d-flex align-items-center">
                            {{-- @if(config('boilerplate.locale.status') && count(config('boilerplate.locale.languages')) > 1) --}}
                            <li class="nav-item dropdown">
                                <x-utils.link
                                :text="__(getLocaleName(app()->getLocale()))"
                                class="nav-link dropdown-toggle"
                                id="navbarDropdownLanguageLink"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false" />

                                @include('.includes.partials.lang')
                            </li>
                            {{-- @endif --}}

                            @auth
                            @if ($logged_in_user->isUser())
                            <a href="{{ route('frontend.user.dashboard') }}">@lang('Dashboard')</a>
                            @endif
                            <a href="{{ route('frontend.user.account') }}">@lang('Аккаунт')</a>
                            @else
                            <li class="action__text">
                                <a href="{{ route('frontend.auth.login') }}">@lang('Вход')</a>
                            </li>
                            @if (config('boilerplate.access.user.registration'))
                            <li class="action__text">
                                <a href="{{ route('frontend.auth.register') }}">@lang('Регистрация')</a>
                            </li>   
                            @endif
                            @endauth
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div><!-- end info-box box-2 -->
                </div><!-- top-action-content -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end header-top-action -->
<div class="header-top header-menu-action">
    <div class="container">
        <div class="row ostion-top-wrap">
            <div class="col-lg-5 col-sm-5 site-branding">
                <div class="logo-action d-flex align-items-center">
                    <div class="ostion-logo">
                        <a href="/">
                            <img src="/images/logo.png" alt="Oxpitan" title="Oxpitan">
                        </a>
                    </div><!-- .ostion-logo -->
                    <div class="header-btn ml-auto">
                        <a href="#" class="theme-btn">Связаться с нами!</a>
                    </div>
                </div><!-- end logo-action -->
            </div><!-- site-branding -->
            <div class="col-lg-7 col-sm-7 ostion-menu">
                <div class="ostion-menu-innner">
                    <div class="ostion-menu-content">
                        <div class="navigation-top">
                            <nav class="main-navigation">
                                <ul>
                                    <li class="active">
                                        <a href="/">Главная</a>
                                    </li>
                                    <li>
                                        <a href="#">Гранты</a>
                                    </li>
                                    <li>
                                        <a href="#">Новости</a>
                                    </li>
                                    <li>
                                        <a href="#">Галлерея</a>
                                    </li>
                                    <li>
                                        <a href="#l">О нас</a>
                                    </li>
                                    <li>
                                        <a href="#">Контакты</a>
                                    </li>

                                </ul>
                            </nav><!-- end main-navigation -->
                        </div><!-- end navigation-top -->
                    </div><!-- end ostion-menu-content -->
                    <div class="mobile-menu-toggle">
                        <i class="fa fa-bars"></i>
                    </div>
                </div><!-- end ostion-menu-innner -->
            </div><!-- ostion-menu -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end header-top -->
<div class="side-nav-container">
    <div class="humburger-menu">
        <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
    </div><!-- end humburger-menu -->
    <div class="side-menu-wrap">
        <ul class="side-menu-ul">
            <li class="sidenav__item"><a href="">home</a>
                <span class="menu-plus-icon"></span>
                <ul class="side-sub-menu">
                    <li><a href="">Home 1</a></li>
                    <li><a href="index2.html">Home 2</a></li>
                </ul>
            </li>
            <li class="sidenav__item"><a href="#">causes</a>
                <span class="menu-plus-icon"></span>
                <ul class="side-sub-menu">
                    <li><a href="causes.html">causes</a></li>
                    <li><a href="causes-detail.html">causes detail</a></li>
                    <li><a href="donate.html">donate now</a></li>
                </ul>
            </li>
            <li class="sidenav__item"><a href="#">event</a>
                <span class="menu-plus-icon"></span>
                <ul class="side-sub-menu">
                    <li><a href="events.html">events</a></li>
                    <li><a href="events-detail.html">events detail</a></li>
                </ul>
            </li>
            <li class="sidenav__item"><a href="#">news</a>
                <span class="menu-plus-icon"></span>
                <ul class="side-sub-menu">
                    <li><a href="news.html">news</a></li>
                    <li><a href="single-news.html">single news</a></li>
                </ul>
            </li>
            <li class="sidenav__item"><a href="#">pages</a>
                <span class="menu-plus-icon"></span>
                <ul class="side-sub-menu">
                    <li><a href="about.html">about</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="volunteer.html">become a volunteer</a></li>
                    <li><a href="team.html">out team</a></li>
                    <li><a href="sponsor.html">sponsors</a></li>
                </ul>
            </li>
            <li class="sidenav__item"><a href="contact.html">contact</a></li>
        </ul>
        <ul class="side-social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        <div class="side-btn">
            <a href="donate.html" class="theme-btn">donate now</a>
        </div>
    </div><!-- end side-menu-wrap -->
</div><!-- end side-nav-container -->
</header>
<!-- ================================
END HEADER AREA
================================= -->