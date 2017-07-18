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
</head>
<body>
<div id="app">
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
    <div class="container-fluid slider-container-fluid">
        <ul id="bxslider" class="bxslider">
            <li class="slider-item" style="background: url('./images/01.jpg') no-repeat center center;">
                <div class="row">
                    <div class="container">
                        <div class="row wrapper-image">
                            <div class="col-lg-6 col-md-9 col-sm-12">
                                <h1>
                                    <label>3.5%-4% <br />Авто машин</label><br />барьцаалсан зээл
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slider-item" style="background: url('./images/Untitled-1.jpg') no-repeat center center;">
                <div class="row">
                    <div class="container">
                        <div class="row wrapper-image">
                            <div class="col-lg-6 col-md-9 col-sm-12">
                                <h1>
                                    <label>4% <br />Үл хөдлөх</label><br />барьцаалсан зээл
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="slider-item" style="background: url('./images/Untitled-2.jpg') no-repeat center center;">
                <div class="row">
                    <div class="container">
                        <div class="row wrapper-image">
                            <div class="col-lg-6 col-md-9 col-sm-12">
                                <h1>
                                    <label>4% <br />Орон сууц</label><br />барьцаалсан зээл
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="container-fluid">
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
        <div class="row" style="background-image: url('images/salon.png'); background-position: center center; background-color: #051d29;">
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
                        <div>3-4.5%</div>
                        <h5>
                            Зээлийн хүү
                        </h5>
                    </div>
                    <div class="col-lg-2">
                        <div>250 <label>сая хүртэл</label></div>
                        <h5>
                            Зээлийн дүн
                        </h5>
                    </div>
                    <div class="col-lg-2">
                        <div>1-5 <label>жил</label></div>
                        <h5>
                            Зээлийн хугацаа
                        </h5>
                    </div>
                </div>
            </div>
        </div>
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
</body>
</html>
