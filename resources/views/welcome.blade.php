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
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row full">
                <div class="container-fluid" style="border-bottom: 1px groove #cdcdcd; position: fixed; width: 100%; z-index: 100;">
                    <section class="container">
                        <div class="row header">
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
                            <h1 style="color: #FFF; text-transform: uppercase;">
                                <label style="font-size: 60px; font-weight: bold">3.5%-4% <br />Авто машин</label><br />барьцаалсан зээл
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row" style="margin-bottom: 30px">
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
                        <div class="col-12 col-md-12 col-sm-12" style="margin-bottom: 15px">
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12">
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                            <div class="col-lg-3" style="padding: 0px 6px 0px 0px">
                                <div>
                                    <img src="/images/1.png" width="100%">
                                </div>
                                <div>
                                    <h4 style="text-transform: uppercase; margin-bottom: 0px">Land cruiser 200</h4>
                                    <label class="help-block" style="font-size: 11px; font-weight: 300; margin-top: 0px; margin-bottom: 8px;">Toyota, Black</label>
                                    <label style="color: #E86D4C">$48500</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="height: 100px; background: url('images/car-real.png') right no-repeat"></div>
            <div class="row" style="background-image: url('images/salon.png'); background-position: center center; background-color: #051d29;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2" style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                            <img src="images/timer.png" style="margin-top: 15px; margin-bottom: 9px">
                            <h5 style="text-transform: uppercase; color: #FFF; font-weight: bold">
                                Хурдан шуурхай
                            </h5>
                        </div>
                        <div class="col-lg-2" style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                            <img src="images/handshake.png" style="margin-top: 15px; margin-bottom: 9px">
                            <h5 style="text-transform: uppercase; color: #FFF; font-weight: bold">
                                Найдвартай
                            </h5>
                        </div>
                        <div class="col-lg-2" style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                            <img src="images/pie-chart.png" style="margin-top: 15px; margin-bottom: 9px">
                            <h5 style="text-transform: uppercase; color: #FFF; font-weight: bold">
                                Бага хүүтэй
                            </h5>
                        </div>
                        <div class="col-lg-2" style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                            <div style="font-size: 55px; color: #FFF; font-weight: bold; font-weight: 100">3-4.5%</div>
                            <h5 style="text-transform: uppercase; color: #FFF; font-weight: bold">
                                Зээлийн хүү
                            </h5>
                        </div>
                        <div class="col-lg-2" style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                            <div style="font-size: 55px; color: #FFF; font-weight: bold; font-weight: 100">250 <label style="font-size: 12px; vertical-align: middle">сая хүртэл</label></div>
                            <h5 style="text-transform: uppercase; color: #FFF; font-weight: bold">
                                Зээлийн дүн
                            </h5>
                        </div>
                        <div class="col-lg-2" style="text-align: center; margin-top: 60px; margin-bottom: 60px">
                            <div style="font-size: 55px; color: #FFF; font-weight: bold; font-weight: 100">1-5 <label style="font-size: 12px; vertical-align: middle">жил</label></div>
                            <h5 style="text-transform: uppercase; color: #FFF; font-weight: bold">
                                Зээлийн хугацаа
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <h4 style="text-transform: uppercase; font-weight: 700; margin-top: 40px; margin-bottom: 20px">Мэдээ мэдээлэл / Зөвөлгөө</h4>
                    <div class="col-lg-4" style="padding: 0px 20px 0px 0px">
                        <img src="images/mountain.jpg" style="width: 100%; height: 180px">
                        <h5 style="text-transform: uppercase">Where the find the best food in Hong Kong</h5>
                    </div>
                    <div class="col-lg-4" style="padding: 0px 20px 0px 0px">
                        <img src="images/mountain.jpg" style="width: 100%; height: 180px">
                        <h5 style="text-transform: uppercase">Where the find the best food in Hong Kong</h5>
                    </div>
                    <div class="col-lg-4" style="padding: 0px 20px 0px 0px">
                        <img src="images/mountain.jpg" style="width: 100%; height: 180px">
                        <h5 style="text-transform: uppercase">Where the find the best food in Hong Kong</h5>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
