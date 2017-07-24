<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

    <title>{{ config('app.name', 'CCI') }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slider/jquery.bxslider.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('css')

    <style>
        #primary_nav_wrap
        {
            margin-top:25px
        }

        #primary_nav_wrap ul
        {
            list-style:none;
            position:relative;
            float:left;
            margin:0;
            padding:0
        }

        #primary_nav_wrap ul a
        {
            display:block;
            color: #F2F2F2;
            text-decoration:none;
            font-weight:700;
            line-height:32px;
            padding:0 30px 0px 0px;
            font-weight: 100;
            font-family: 'Roboto', sans-serif;
        }

        #primary_nav_wrap ul li
        {
            position:relative;
            float:left;
            margin:0;
            padding:0
        }

        #primary_nav_wrap ul li.current-menu-item
        {
        }

        #primary_nav_wrap ul li:hover a
        {

        }

        #primary_nav_wrap ul ul
        {
            display:none;
            position:absolute;
            top:100%;
            left:-10px;
            background: rgba(0, 0, 0, 0.50);
            padding:0
        }

        #primary_nav_wrap ul ul li
        {
            float:none;
            width:200px;
        }

        #primary_nav_wrap ul ul a
        {
            line-height:120%;
            padding:10px 15px 10px 10px
        }

        #primary_nav_wrap ul ul ul
        {
            top:0;
            left:100%
        }

        #primary_nav_wrap ul li:hover > ul
        {
            display:block
        }
    </style>

</head>
<body>
<div id="app">
    <div class="container-fluid container-fluid-border header" id="header">
        <section class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 column">
                    <a href="#"><img src="/images/logo.png"></a>
                </div>
                <div class="col-lg-8 col-md-9 navigation">
                    <ul class="list-inline top-list">
                        <li>info@capitalinvestment.mn</li>
                        <li>Утас: (+976) 77177777</li>
                        <li>
                            <a href="#" class="social-link btn"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-link btn"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-link btn"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="social-link btn"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#" class="language-link">
                                <img src="{{ asset('images/flag/mn.png') }}" width="32px" />
                            </a>
                            <a href="#" class="language-link">
                                <img src="{{ asset('images/flag/uk.png') }}" width="32px" />
                            </a>
                            <a href="#" class="language-link">
                                <img src="{{ asset('images/flag/jp.png') }}" width="32px" />
                            </a>
                        </li>
                    </ul>
                    <nav id="primary_nav_wrap">
                        <ul>
                            @foreach($mainmenu->items()->whereNull('root_id')->get() as $item)
                                <li>
                                    <a href="{{ $item->link }}">{{ $item->name }}</a>
                                    @if($item->children->count() > 0)
                                        <ul>
                                            @foreach($item->children as $children)
                                                <li><a href="{{ $children->link }}">{{ $children->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
    @yield('content')
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <h4>Хамтран ажиллах байгууллагууд</h4>
            </div>
            <div style="background-color: #afafaf; width: 100%; height: 15vh;">
            </div>
        </div>
        <div class="row footer">
            <div class="container">
                <div class="row" style="padding-bottom: 5vh; padding-top: 5vh;">
                    <div class="col-lg-3 col-md-3 column">
                        <ul>
                            <li style="padding-bottom: 3vh;">
                                <a href="#"><img src="/images/logo.png"></a>
                            </li>
                            <li>
                                <a href="#">Нийгмийн хариуцлага</a>
                            </li>
                            <li>
                                <a href="#">Шагналууд</a>
                            </li>
                            <li>
                                <a href="#">Вэбийн бүтэц</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 column">
                        @if($footermenu)
                        <ul style="line-height:250%">
                            @foreach($footermenu->items()->whereNull('root_id')->get() as $item)
                                <li>
                                    <a href="{{ $item->link }}">{{ $item->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <div class="col-lg-3 col-md-3 column">
                        <ul class="top-list">
                            <table style="border-collapse:separate; border-spacing:10px 15px; margin-top: -10px;">
                                <tr width="100%">
                                    <td width="10%"><img src="/images/location.png" style="float:left; height: 20px;"></td>
                                    <td>Монгол улс, Улаанбаатар хот, Сүхбаатар дүүрэг, 1-р хороо, Жамъяан гүний гудамж 18, “The Down Town” барилга 302, 303 тоот</td>
                                </tr>
                                <tr width="100%">
                                    <td width="10%"><img src="/images/phone.png" style="float:left; height: 20px;"></td>
                                    <td>(+976) <b>77177777</b></td>
                                </tr>
                                <tr width="100%">
                                    <td width="10%"><img src="/images/email.png" style="float:left; height: 20px;"></td>
                                    <td>info@capitalinvestment.mn</td>
                                </tr>
                            </table>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 column">
                        <img src="/images/engineer.png" style="height: 70px; margin: 0 auto; display: block">
                        <h5 style="text-align: center; color: white; font-weight: bold">Нээлттэй ажлын байр 3</h5>
                        <p style="text-align: center; color: white; font-size: 12px;">
                            Төмөрт өргөө ХХК нь ажилтнуудынхаа сурч хөгжих, өсөн дэвших бололцоог бүхий л талаар дэмжихийн сацуу сургалт хөгжлийн оновчтой хөтөлбөрүүдийг ажилтнууддаа зориулан тогтмол хэрэгжүүлдэг.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"  style="height: 5vh; background-color: #005d9a">
            <div class="container">
                <ul class="list-inline top-list" style="padding: 10px 0 10px 0">
                    <li>2017 он. Бүх эрх хуулиар хамгаалагдсан. Capital investment.mn</li>
                    <li style="float: right">
                        <a href="#"><img src="/images/facebook.png"  style="height: 22px; margin-right: 5px;"></a>
                        <a href="#"><img src="/images/twitter.png"  style="height: 22px; margin-right: 5px;"></a>
                        <a href="#"><img src="/images/google.png"  style="height: 22px; margin-right: 5px;"></a>
                        <a href="#"><img src="/images/instagram.png"  style="height: 22px; margin-right: 5px;"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/slider/jquery.bxslider.js') }}"></script>
<script>

    $(document).ready(function(){
        $('#bxslider').bxSlider({
            pager: false,
            mode: 'fade',
            controls: false,
            auto: true,
            pause: 5000,
        });
    });

</script>
@yield('js')
</body>
</html>
