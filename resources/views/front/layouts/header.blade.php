<!DOCTYPE html>
<html lang=en-US class=no-js>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">


    <title>@yield('title') - {{$setting->title}}</title>


    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/plugins/zilla-likes/styles/zilla-likes.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/style-core.css' type=text/css media=all>
    <link rel=stylesheet href='{{asset('front/')}}/css/akea-style-custom.css' type=text/css media=all>

    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700%2C800' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Montserrat' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=PT+Serif' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Open+Sans' type=text/css media=all>
    <link rel=stylesheet href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;subset=latin%2Clatin-ext%2Cdevanagari%2Ccyrillic-ext%2Cvietnamese%2Ccyrillic%2Cgreek-ext%2Cgreek' type=text/css media=all>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset($setting->favicon)}}">

    <!-- login -->
    <link href="{{asset('back/')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('back/')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('back/')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('back/')}}/css/theme.css" rel="stylesheet" media="all">

    <script src="{{asset('back/')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('back/')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('back/')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('back/')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('back/')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('back/')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('back/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('back/')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('back/')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('back/')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('back/')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('back/')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('back/')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('back/')}}/js/main.js"></script>

    <!-- user login -->
    <link rel="icon" type="image/png" href="{{asset('front/')}}/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/')}}/css/main.css">
    @toastr_css
    @yield('css')
</head>

<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js akea-body akea-body-front akea-full  akea-with-sticky-navigation  akea-blockquote-style-1 gdlr-core-link-to-lightbox" data-home-url=index.html>

<div class=akea-mobile-header-wrap>
    <div class="akea-mobile-header akea-header-background akea-style-slide akea-sticky-mobile-navigation " id=akea-mobile-header>
        <div class="akea-mobile-header-container akea-container clearfix">
            <div class="akea-logo  akea-item-pdlr">
                <div class=akea-logo-inner>
                    <a class href="{{route('homepage')}}" ><img src={{$setting->favicon}} alt width=140 height=33 title=umutlion></a>
                </div>
            </div>

            <div class=akea-mobile-menu-right>
                <div class=akea-main-menu-search id=akea-mobile-top-search><i class="fa fa-search"></i></div>
                <div class=akea-top-search-wrap>
                    <div class=akea-top-search-close></div>
                    <div class=akea-top-search-row>
                        <div class=akea-top-search-cell>
                            <form role=search method=get class=search-form action=#>
                                <input type=text class="search-field akea-title-font" placeholder=Search... value name=s>
                                <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                <input type=submit class=search-submit value=Search>
                                <div class=akea-top-search-close><i class=icon_close></i></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="akea-overlay-menu akea-mobile-menu" id=akea-mobile-menu><a class="akea-overlay-menu-icon akea-mobile-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                    <div class="akea-overlay-menu-content akea-navigation-font">
                        <div class=akea-overlay-menu-close></div>
                        <div class=akea-overlay-menu-row>
                            <div class=akea-overlay-menu-cell>
                                <ul id=menu-main-navigation class=menu>
                                    <li class="menu-item menu-item-home current-menu-item"><a href=index.html aria-current=page>Home</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item menu-item-home current-menu-item "><a href={{route('homepage')}} aria-current=page>Anasayfa</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Pages</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=contact.html>Contact</a></li>
                                            <li class="menu-item"><a href=author.html>Author</a></li>
                                            <li class="menu-item"><a href=gallery.html>Gallery</a></li>
                                            <li class="menu-item"><a href=price-table.html>Price Table</a></li>
                                            <li class="menu-item"><a href=maintenance.html>Maintenance</a></li>
                                            <li class="menu-item"><a href=coming-soon.html>Coming Soon</a></li>
                                            <li class="menu-item"><a href=404.html>404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=#>Kategoriler</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=photography.html>Photography</a></li>
                                            <li class="menu-item"><a href=travel.html>Travel</a></li>
                                            <li class="menu-item"><a href=fashion.html>Fashion</a></li>
                                            <li class="menu-item"><a href=food.html>Food</a></li>
                                            <li class="menu-item"><a href=technology.html>Technology</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children"><a href=blog-full-right-sidebar-with-frame.html>Layout</a>
                                        <ul class=sub-menu>
                                            <li class="menu-item"><a href=gutenberg-post-ex-1.html>Gutenberg Single Post</a></li>
                                            <li class="menu-item"><a href=9-most-awesome-blue-lake-with-snow-mountain.html>Single Post</a></li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-full-no-sidebar.html>Blog Full</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-full-no-sidebar.html>Blog Full No Sidebar</a></li>
                                                    <li class="menu-item"><a href=blog-full-no-sidebar-with-post-format.html>Blog Full No Sidebar With Post Format</a></li>
                                                    <li class="menu-item"><a href=blog-full-right-sidebar-with-frame.html>Blog Full Right Sidebar With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-full-right-sidebar.html>Blog Full Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-grid-overlay.html>Blog Grid Overlay</a></li>
                                                    <li class="menu-item"><a href=blog-grid-overlay-no-space.html>Blog Grid Overlay No Space</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item menu-item-has-children"><a href=blog-columns-with-frame.html>Blog Columns</a>
                                                <ul class=sub-menu>
                                                    <li class="menu-item"><a href=blog-columns-with-frame.html>Blog Columns With Frame</a></li>
                                                    <li class="menu-item"><a href=blog-columns.html>Blog Columns</a></li>
                                                    <li class="menu-item"><a href=blog-columns-with-frame-post-format.html>Blog Columns With Post Format</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href=about-us.html>About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="akea-body-outer-wrapper ">
                    <div class="akea-body-wrapper clearfix  akea-with-frame">
        <header class="akea-header-wrap akea-header-style-plain  akea-style-splitted-menu akea-sticky-navigation akea-style-slide" data-navigation-offset=75px>
            <div class=akea-header-background></div>
            <div class="akea-header-container  akea-container">
                <div class="akea-header-container-inner clearfix">
                    <div class="akea-navigation akea-item-pdlr clearfix ">
                        <div class=akea-main-menu id=akea-main-menu>
                            <ul id=menu-main-navigation-1 class=sf-menu>
                                <li class="menu-item menu-item-home current-menu-item akea-normal-menu"><a href={{route('homepage')}} class=sf-with-ul-pre>Anasayfa</a>

                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=# class=sf-with-ul-pre>Kategoriler</a>
                                    <ul class=sub-menu>
                                        @include('front.widgets.category_header')
                                    </ul>
                                </li>
                                <li class=akea-center-nav-menu-item>
                                    <div class=akea-above-logo>
                                        <a href="{{route('homepage')}}">
                                            <img src="{{asset($setting->logo)}}" title=umutlion-logo />
                                        </a>
                                    </div>
                                    <div class="akea-logo  akea-item-pdlr">
                                        <div class=akea-logo-inner>
                                            <a class href=index.html><img src={{$setting->favicon}} alt width=140 height=33 title=logo-2></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children akea-normal-menu"><a href=# class=sf-with-ul-pre>Sayfalar</a>
                                    <ul class=sub-menu>
                                        @foreach($pages as $page)
                                            <li class="menu-item akea-normal-menu"><a href={{route('page', $page->slug, ['id' => '1'])}}>{{$page->title}}</a></li>
                                        @endforeach()
                                    </ul>

                                </li>

                                <li class="menu-item akea-normal-menu"><a href={{route('contact')}}>İletişim</a></li>
                            </ul>
                            <div class=akea-navigation-slide-bar id=akea-navigation-slide-bar></div>
                        </div>
                        <div class="akea-main-menu-right-wrap clearfix  akea-item-mglr akea-navigation-top">
                            <div class="akea-overlay-menu akea-main-menu-right" id=akea-right-menu><a class="akea-overlay-menu-icon akea-right-menu-button akea-top-menu-button akea-mobile-button-hamburger" href=#><span></span></a>
                                <div class="akea-overlay-menu-content akea-navigation-font">
                                    <div class=akea-overlay-menu-close></div>
                                    <div class=akea-overlay-menu-row>

                                        <div class=akea-overlay-menu-cell>

                                            <ul id=menu-main-navigation-2 class=menu>
                                                <li class="menu-item menu-item-home current-menu-item"><a href=index.html aria-current=page>Home</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item menu-item-home current-menu-item "><a href=index.html aria-current=page>Homepage</a></li></ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Giriş</a>
                                                    <ul class=sub-menu>
                                                        <li class="menu-item"><a href=contact.html>Giriş Yap</a></li>
                                                        <li class="menu-item"><a href=author.html>Kayıt Ol</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children"><a href=#>Category</a>
                                                    <ul class=sub-menu>
                                                        @foreach($categories as  $category)
                                                        <li class="menu-item"><a href={{route('category', $category->slug)}}>{{$category->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href=about-us.html>About</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=akea-main-menu-search id=akea-top-search><i class="fa fa-search"></i></div>
                            <div class=akea-top-search-wrap>
                                <div class=akea-top-search-close></div>
                                <div class=akea-top-search-row>
                                    <div class=akea-top-search-cell>
                                        <form role=search method=get class=search-form action=#>
                                            <input type=text class="search-field akea-title-font" placeholder=Search... value name=s>
                                            <div class=akea-top-search-submit><i class="fa fa-search"></i></div>
                                            <input type=submit class=search-submit value=Search>
                                            <div class=akea-top-search-close><i class=icon_close></i></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="akea-main-menu-left-wrap akea-main-menu-left-social clearfix akea-item-pdlr akea-navigation-top">
                            <a href={{$setting->twitter}} target=_blank class=akea-top-bar-social-icon title=twitter>
                                <i class="fa fa-twitter" ></i>
                            </a>
                            <a href="{{$setting->github}}" target=_blank class=akea-top-bar-social-icon title=github>
                                <i class="fa fa-github" ></i>
                            </a>
                            <a href={{$setting->linkedin}} target=_blank class=akea-top-bar-social-icon title=linkedin>
                                <i class="fa fa-linkedin" ></i>
                            </a>
                            <a href={{$setting->medium}} target=_blank class=akea-top-bar-social-icon title=medium>
                                <i class="fa fa-medium" ></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
