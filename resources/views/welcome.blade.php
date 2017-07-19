<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
//        br
            $( document ).ready(function() {
                document.getElementById('idSectionBg').style.height = document.getElementById('idBgWrap').clientHeight+'px';
//                $( "#idCarReal" ).animate({
//                    left: -100+"%",
//                }, 6000, function() {
//                    document.getElementById("idCarReal").style.left = "100%";
//                    $( "#idCarReal" ).animate({
//                        left: -100+"%",
//                    }, 6000);
//                });
                $('.count').each(function () {
                    $(this).prop('Counter',0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            });
        $(window).on("scroll", function() {
            if($(window).scrollTop() > document.getElementById('idContainer').clientHeight/2.5) {
                $(".header").addClass("active");
            } else {
                $(".header").removeClass("active");
            }
        });

        jQuery(function($) {
            var doAnimations = function() {
                var offset = $(window).scrollTop() + $(window).height(),
                    $animatables = $('.animatable');
                if ($animatables.size() == 0) {
                    $(window).off('scroll', doAnimations);
                }
                $animatables.each(function(i) {
                    var $animatable = $(this);
                    if (($animatable.offset().top + $animatable.height()-20) < offset) {
                        $animatable.removeClass('animatable').addClass('animated');
                    }
                });
            };
            $(window).on('scroll', doAnimations);
            $(window).trigger('scroll');
        });
    </script>
    <style>
        html{
            overflow-x: hidden;
        }
        .count
        {
            font-size: 55px;
            color: #FFF;
            font-weight: bold;
            font-weight: 100;
        }
        .shadow {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 9999;
            top:0;
            left:0;
            background: rgba(0, 0, 0, 0.45);
        }
        .section-bg {
            position: relative;
            width: 100vw;
        }

        .bg-wrap {
            clip: rect(0, auto, auto, 0);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height:100%;
        }

        .bg {
            position: fixed;
            display: block;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
            transform: translateZ(0);
            will-change: transform;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color: #057eb3;
        }
        .footer .top-list{
            font-size: 12px;
        }
        .footer ul li a{
            color: white;
            text-transform: uppercase;
            text-decoration: none;
        }
        .animatable {
            visibility: hidden;
            -webkit-animation-play-state: paused;
            -moz-animation-play-state: paused;
            -ms-animation-play-state: paused;
            -o-animation-play-state: paused;
            animation-play-state: paused;
        }
        .animated {
            visibility: visible;

            -webkit-animation-fill-mode: both;
            -moz-animation-fill-mode: both;
            -ms-animation-fill-mode: both;
            -o-animation-fill-mode: both;
            animation-fill-mode: both;

            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            -ms-animation-duration: 1s;
            -o-animation-duration: 1s;
            animation-duration: 1s;

            -webkit-animation-play-state: running;
            -moz-animation-play-state: running;
            -ms-animation-play-state: running;
            -o-animation-play-state: running;
            animation-play-state: running;
        }
        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-80px);
            }	100% {
                     opacity: 1;
                     -webkit-transform: translateY(0);
                 }
        }

        @-moz-keyframes fadeInDown {
            0% {
                opacity: 0;
                -moz-transform: translateY(-80px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateY(0);
            }
        }

        @-o-keyframes fadeInDown {
            0% {
                opacity: 0;
                -o-transform: translateY(-80px);
            }

            100% {
                opacity: 1;
                -o-transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-80px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animated.animationDelay{
            animation-delay:.4s;
            -webkit-animation-delay:.4s;
        }
        .animated.animationDelayMed{
            animation-delay:1.2s;
            -webkit-animation-delay:1.2s;
        }
        .animated.animationDelayLong{
            animation-delay:1.6s;
            -webkit-animation-delay:1.6s;
        }
        .animated.fadeBgColor {
            -webkit-animation-name: fadeBgColor;
            -moz-animation-name: fadeBgColor;
            -o-animation-name: fadeBgColor;
            animation-name: fadeBgColor;
        }
        .animated.fadeInDown {
            -webkit-animation-name: fadeInDown;
            -moz-animation-name: fadeInDown;
            -o-animation-name: fadeInDown;
            animation-name: fadeInDown;
        }
        .header {
            transition: all 1s ease-in-out;
        }
        .header.active {
            background-color: #057eb3;
            opacity: 0.9;
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
        }
        h1, h4, h5{
            text-transform: uppercase;
        }
        h1{
            color: #FFF;
        }
        h1 label{
            font-size: 60px;
            font-weight: bold;
        }
        .divImgText h4{
            margin-bottom: 0px;
        }
        .row .container h4{
            font-weight: 700;
            margin-top: 40px;
            margin-bottom: 20px;
        }
        .container-fluid-border{
            border-bottom: 1px groove #cdcdcd;
            position: fixed;
            width: 100%;
            z-index: 100;
        }
        .row .container .col-lg-4{
            padding: 0px 20px 0px 0px;
        }
        .row .container .containerImg .col-lg-4 img{
            width: 100%;
            height: 180px;
        }
        .divImgText .help-block{
            font-size: 11px;
            font-weight: 300;
            margin-top: 0px;
            margin-bottom: 8px;
            color: #a4aaae;
        }
        .divImgText label{
            color: #E86D4C;
        }
        .container-fluid .row .container .row .col-lg-2{
            text-align: center;
            margin-top: 60px;
            margin-bottom: 60px;
        }
        .container-fluid .row .container .row .col-lg-2 div{
            font-size: 55px;
            color: #FFF;
            font-weight: bold;
            font-weight: 100;
        }
        .container-fluid .row .container .row .col-lg-2 div label{
            font-size: 12px;
            vertical-align: middle;
        }
        .container-fluid .row .container .row .col-lg-2 h5{
            color: #FFF;
            font-weight: bold;
        }
        .container-fluid .row .container .row .col-lg-2 img{
            margin-top: 15px;
            margin-bottom: 9px;
        }
        .marginB15{
            margin-bottom: 15px;
        }
        .marginB30{
            margin-bottom: 30px;
        }
        .paddingR6{
            padding: 0px 6px 0px 0px; !important;
        }
        @media (min-width : 768px) {
            .box-item {
                border: none;
            }
        }
        @media (min-width: 992px){
            .box-item {
                border-bottom: 1px solid #CCC;
                border-left: 1px solid #CCC;
            }
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row full"  id="idContainer">
        <div class="container-fluid container-fluid-border header">
            <section class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3 column">
                        <a href="#"><img src="/images/logo.png"></a>
                    </div>
                    <div class="col-lg-8 col-md-9 navigation">
                        <ul class="list-inline top-list">
                            <li>info@capitalinvestment.mn</li>
                            <li>Утас: (+976) 76037777, 88001545</li>
                            <li>
                                <a href="#" class="social-link btn"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="social-link btn"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="social-link btn"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="social-link btn"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="language-link">Монгол</a>
                                <label>|</label>
                                <a href="#" class="language-link">English</a>
                            </li>
                        </ul>
                        <ul class="list-inline main-menu">
                            <li>
                                <a href="#">Эхлэл</a>
                            </li>
                            <li>
                                <a href="#">Бидний тухай</a>
                            </li>
                            <li>
                                <a href="#">Зээл</a>
                            </li>
                            <li>
                                <a href="#">Мэдээ</a>
                            </li>
                            <li>
                                <a href="#">Ажлын байр</a>
                            </li>
                            <li>
                                <a href="#">Холбоо барих</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <div class="row wrapper-image">
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <h1>
                        <label>3.5%-4% <br />Авто машин</label><br />барьцаалсан зээл
                    </h1>
                </div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row marginB30">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Бид дараах төрлүүдээр <br /><b>Зээл олгож байна</b></h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box-item">
                        <img src="/images/car.png">
                        <h2>3.5-4%</h2>
                        <div class="text">Авто машин</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box-item">
                        <img src="/images/mortgage.png">
                        <h2>4%</h2>
                        <div class="text">Орон сууц</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box-item">
                        <img src="/images/loan.png">
                        <h2>4%</h2>
                        <div class="text">Үл хөдлөх</div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 box-item">
                        <img src="/images/credit-card.png">
                        <h2>0.8-4%</h2>
                        <div class="text">Бусад</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Санал болгож буй бараа</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="animatable fadeInDown">
                <div class="col-lg-12 col-md-12 col-sm-12 marginB15">
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="animatable fadeInDown">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                    <div class="col-lg-3 paddingR6">
                        <div>
                            <img src="/images/1.png" width="100%">
                        </div>
                        <div class="divImgText">
                            <h4>Land cruiser 200</h4>
                            <label class="help-block">Toyota, Black</label>
                            <label>$48500</label>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    {{--<div class="row" style="height: 100px; background: url('images/car-real.png') right no-repeat"></div>--}}
    <div class="row">
        <img src="images/car-real.png" id="idCarReal" style="float: right; position: relative;">
    </div>
    <div class="row">
        <div class="section-bg" id="idSectionBg">
            <div class="bg-wrap">
                <div class="bg" style="background-image: url('images/salon.png'); background-position: center center; background-color: #051d29;"></div>
                <div class="row" id="idBgWrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="images/timer.png">
                                <h5>
                                    Хурдан шуурхай
                                </h5>
                            </div>
                            <div class="col-lg-2">
                                <img src="images/handshake.png">
                                <h5>
                                    Найдвартай
                                </h5>
                            </div>
                            <div class="col-lg-2">
                                <img src="images/pie-chart.png">
                                <h5>
                                    Бага хүүтэй
                                </h5>
                            </div>
                            <div class="col-lg-2">
                                <div>3-<span class="count">4</span>.5%</div>
                                <h5>
                                    Зээлийн хүү
                                </h5>
                            </div>
                            <div class="col-lg-2">
                                <div><span class="count">250</span><label> сая хүртэл</label></div>
                                <h5>
                                    Зээлийн дүн
                                </h5>
                            </div>
                            <div class="col-lg-2">
                                <div>1-<span class="count">5</span><label> жил</label></div>
                                <h5>
                                    Зээлийн хугацаа
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="row" style="background-image: url('images/salon.png'); background-position: center center; background-color: #051d29;">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-2">--}}
                    {{--<img src="images/timer.png">--}}
                    {{--<h5>--}}
                        {{--Хурдан шуурхай--}}
                    {{--</h5>--}}
                {{--</div>--}}
                {{--<div class="col-lg-2">--}}
                    {{--<img src="images/handshake.png">--}}
                    {{--<h5>--}}
                        {{--Найдвартай--}}
                    {{--</h5>--}}
                {{--</div>--}}
                {{--<div class="col-lg-2">--}}
                    {{--<img src="images/pie-chart.png">--}}
                    {{--<h5>--}}
                        {{--Бага хүүтэй--}}
                    {{--</h5>--}}
                {{--</div>--}}
                {{--<div class="col-lg-2">--}}
                    {{--<div>3-4.5%</div>--}}
                    {{--<h5>--}}
                        {{--Зээлийн хүү--}}
                    {{--</h5>--}}
                {{--</div>--}}
                {{--<div class="col-lg-2">--}}
                    {{--<div>250 <label>сая хүртэл</label></div>--}}
                    {{--<h5>--}}
                        {{--Зээлийн дүн--}}
                    {{--</h5>--}}
                {{--</div>--}}
                {{--<div class="col-lg-2">--}}
                    {{--<div>1-5 <label>жил</label></div>--}}
                    {{--<h5>--}}
                        {{--Зээлийн хугацаа--}}
                    {{--</h5>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="row">
        <div class="container">
            <h4>Мэдээ мэдээлэл / Зөвөлгөө</h4>
            <div class="containerImg">
                <div class="col-lg-4">
                    <img src="images/mountain.jpg">
                    <h5>Where the find the best food in Hong Kong</h5>
                </div>
                <div class="col-lg-4">
                    <img src="images/mountain.jpg">
                    <h5>Where the find the best food in Hong Kong</h5>
                </div>
                <div class="col-lg-4">
                    <img src="images/mountain.jpg">
                    <h5>Where the find the best food in Hong Kong</h5>
                </div>
            </div>
        </div>
    </div>
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
                    <ul style="line-height:250%">
                        <li>
                            <a href="#">Нүүр хуудас</a>
                        </li>
                        <li>
                            <a href="#">Бидний тухай</a>
                        </li>
                        <li>
                            <a href="#">Бизнесийн салбар</a>
                        </li>
                        <li>
                            <a href="#">Мэдээ мэдээлэл</a>
                        </li>
                        <li>
                            <a href="#">Холбоо барих</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 column">
                    <ul class="top-list">
                        <table style="border-collapse:separate; border-spacing:10px 15px; margin-top: -10px;">
                            <tr width="100%">
                                <td width="10%"><img src="/images/location.png" style="float:left; height: 20px;"></td>
                                <td>Улаанбаатар их дэлгүүрийн замын ард "Пийс Таур" барилгын 8 давхарт 810 тоот</td>
                            </tr>
                            <tr width="100%">
                                <td width="10%"><img src="/images/phone.png" style="float:left; height: 20px;"></td>
                                <td>(+976) <b>7603-7777</b><br>(+976) <b>94990717</b></td>
                            </tr>
                            <tr width="100%">
                                <td width="10%"><img src="/images/email.png" style="float:left; height: 20px;"></td>
                                <td>info@tumurt-urguu.mn<br>sales@tumurt-urguu.mn<br>hr@tumurt-urguu.mn</td>
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
</body>
</html>
