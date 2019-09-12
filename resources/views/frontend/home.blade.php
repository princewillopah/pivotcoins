@extends('layouts.frontend')
{{-----------------------------------------------------------------}}
@section('title')
    Home
@endsection
{{-----------------------------------------------------------------------}}
@section('content')
    <!--==================  hero =======================================-->
    <section id="hero-price">
        <div class="container-fluid">
            <div class="mycourasel">
                <div id="myCarouselIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarouselIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="1"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="2"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="3"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="4"></li>
                        <li data-target="#myCarouselIndicators" data-slide-to="5"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-container">
                                <img class="d-block w-100 " src="img/home/slide/1.jpg" alt="Storage / Handling / Shipping">
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <div class="caption" id="caption1"> -->
                                        <div class="caption-inner">
                                            <h1 class="animated fadeInRight"  data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">Your Pathway To Financial Stability</h1>
                                            <p class="  animated fadeInUp"  data-wow-delay=".1s" data-wow-duration=".2s">Join Pivotcoins today and move your business to a newer level
                                            </p>
                                            <!-- <a href="sign-up.php" class="btn wow fadeInUp"  data-wow-delay=".2s" data-wow-duration=".3s">Join Now</a> -->
                                        </div>
                                        <a href="sign-up.php" class="btn animated fadeInUp"  data-wow-delay=".3s" data-wow-duration=".4s">Join Now</a>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/7.jpg" alt="Train Transpotation" >
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption" id="caption2">
                                            <div class="caption-inner">
                                                <h1 class="pb-1 animated fadeInLeft" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >A platform that facilitates choice, simplicity and performance.</h1>
                                                <p class="animated fadeInRight" id="caption-para2" data-animation="fadeInRight" data-delay="700ms" style="animation-delay: 700ms">All these are backed by caring experts so that you stay focused on what you do best, win as an individual and succeed as a investor..
                                                </p>
                                                <a href="sign-up.php" class="btn animated fadeInUp"  data-wow-delay=".5s" data-wow-duration=".4s">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/2a.jpg" alt="TANK STORAGE MINERALS" >
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption" >
                                            <div class="caption-inner">
                                                <h1 class="pb-1 animated fadeInUp" id="caption-title4" data-animation="fadeInUp" data-delay="500ms" style="animation-delay: 500ms" >Invest For What Really Matters</h1>
                                                <p class="animated fadeInUp" id="caption-para4" data-animation="fadeInUp" data-delay="700ms" style="animation-delay: 700ms">Whether you're new to investing or a seasoned pro, it's time to partner with a company that believes you could and should be getting more from your money.
                                                </p>
                                                <a href="sign-up.php" class="btn animated fadeInUp"  data-wow-delay=".5s" data-wow-duration=".4s">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item ">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/4.jpg" alt="Road Transpotation" >
                            </div>
                            <div class="carousel-caption carousel-caption-1 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption " id="caption1">
                                            <div class="caption-inner">
                                                <h1 class="pb-1 animated fadeInUp" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >A Smarter Way To Create Your Furtune</h1>
                                                <p class="animated fadeInUp" id="caption-para2" data-animation="fadeInRight" data-delay="700ms" style="animation-delay: 700ms">Relax while the Experts help you achieve the life style you want
                                                </p>
                                                <a href="sign-up.php" class="btn animated fadeInUp"  data-wow-delay=".5s" data-wow-duration=".4s">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>

                        <div class="carousel-item">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/6.jpg" alt="TANK" >
                            </div>
                            <div class="carousel-caption carousel-caption-4 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption" >
                                            <div class="caption-inner">
                                                <h1 class="pb-1 animated fadeInRight" id="caption-title4" data-animation="fadeInRight" data-delay="500ms" style="animation-delay: 500ms" >Invest For What Really Matters</h1>
                                                <p class="animated fadeInLeft" id="caption-para4" data-animation="fadeInLeft" data-delay="700ms" style="animation-delay: 700ms">Whether you're new to investing or a seasoned pro, it's time to partner with a company that believes you could and should be getting more from your money.
                                                </p>
                                                <a href="sign-up.php" class="btn animated fadeInUp"  data-wow-delay=".5s" data-wow-duration=".4s">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="courasel-overlay"> </div> --}}
                        </div>
                        {{-- <div class="carousel-item">
                            <div class="img-container">
                                <img class="d-block w-100" src="img/home/slide/5.jpg" alt="MILLIONS OF LITRES OF STORAGE CAPACITY" >
                            </div>
                            <div class="carousel-caption carousel-caption-3 d-none d-md-block">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="caption animated fadeInRight" id="caption2" data-animation="fadeInRight" data-delay="300ms" style="animation-delay: 300ms">
                                            <div class="caption-inner">
                                                <h1 class="pb-1 animated fadeInLeft" id="caption-title2" data-animation="fadeInLeft" data-delay="500ms" style="animation-delay: 500ms" >Over 2000,000 Investors In Pivotcoins</h1>
                                                <p class="animated fadeInRight" id="caption-para2" data-animation="fadeInRight" data-delay="700ms" style="animation-delay: 700ms">Take this great opportunity and join Pivotcoins for safe and consistent returns </p>
                                                <a href="sign-up.php" class="btn animated fadeInUp"  data-wow-delay=".5s" data-wow-duration=".4s">Join Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="courasel-overlay"> </div>
                        </div> --}}


                    </div> <!--<carousel-inner-->
                    <a class="carousel-control-prev " href="#myCarouselIndicators" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next " href="#myCarouselIndicators" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div><!-- /.mycourasel -->
        </div>
        <!-- -------------------single hero--------------------------------- -->

        <!-- <section id="hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contents">
                            <div class="contents-message">
                                <h1 class="wow fadeInUp">Yours pathway to financial stability </h1>
                                <div class="wow fadeInUp">
                                    <span class="sub cssanimation leFadeInLeft sequence">Take a tour with us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-js"></div>
        </section> -->
        <!-- -------------------current-price--------------------------------- -->
        <div class="container current-prices">
            <div class="row">
                <!--  <-- <div class="col-md-12">
                     <script src="https://widgets.coingecko.com/coingecko-coin-price-static-headline-widget.js"></script>
                     <coingecko-coin-price-static-headline-widget  coin-ids="bitcoin,ethereum,bitcash" currency="usd" locale="en"></coingecko-coin-price-static-headline-widget>
                  </div> ->-->

                <div class="col-md-4 current-prices-info">
                    <div class="current-btc-prices">
                        <p>BITCOIN PRICE(USD)</p>
                        <span>
                    <div class="btcwdgt-price"></div>
                    </span>
                    </div>
                </div>
                <div class="col-md-4 current-prices-info">

                    <div class="current-eth-prices">
                        <p>ETHEREUM PRICE(USD)</p>
                        <div class="ethereum-price-widget" data-quote="USD" style="height:190px;width:300px;background-image:url('https://ethereumprice.org/assets/images/animated/ring.svg');background-position:50%;background-size:50px;background-repeat:no-repeat;">
                        <span style="display:block;text-align:center;padding:20px 0;font-size:14px;font-family:'Open Sans', Arial;">Loading
                        <a href="https://ethereumprice.org" target="_blank">EthereumPrice.org</a>
                        </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 current-prices-info">
                    <div class="current-btc-prices">
                        <p>BITCASH PRICE(USD)</p>
                        <span>
                        <div class="btcwdgt-price" bw-cash="true"></div>
                       </span>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- ==================================================== -->
    <!-- CRYPTO INTRO -->
    <!-- ==================================================== -->
    <!-- <section class="crypto-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="crypto-intro-img">
                    <img src="img/home/graph-dark-a.png" class="img-fluid" alt="">
                </div>
            </div>
                <div class="col-md-6">
                    <div class="crypto-intro-msg">
                        <h2>Cryptocurrencies</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur
                            distinctio nam possimus rem suscipit unde vel velit voluptas?
                            At, est facere fugiat ipsa nemo quibusdam quod rem rerum temporibus.
                        </p>
                        <a href="" class="btn bttn-stretch bttn-md bttn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ==================================================== -->
    <!-- ABOUT US -->
    <!-- ==================================================== -->
    <section id="home-about-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <video id='my-video' class='video-css' controls preload='auto' width='100%' height='100%'
                           poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
                        <source src='img/home/mov_bbb.mp4' type='video/mp4'>
                        <source src='img/home/mov_bbb.ogg' type='video/ogg'>

                    </video>


                </div>
                <div class="col-md-6">
                    <div class="info">
                        <div class="info-head">
                            <h1>About Pivotcoins</h1>
                        </div>
                        <p>Pivotcoins, is a private investment company focused on companies in high growth areas
                            or high growth opportunities in mature industries. We provide investment-brokerage
                            and asset management services to private and corporate entities.
                        </p>
                        <p>Pivotcoins manages assets of private individuals, pension plans,
                            trust accounts, institutions and investment companies. The main objective of our enterprise
                            is the maximum availability of our services to the investors of all levels.</p>
                        <a href="about.php" class="btn bttn-stretch bttn-md bttn-primary">Read more</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- WHY US -->
    <!-- ==================================================== -->
    <section id="why-us" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1>Why potential investors Choose Pivotcoins</h1>
                        <img src="img/generics/icon/header-gray.png" alt=""><br>
                        <!-- <img src="img/generics/icon/header-green.png" alt=""><br>
                        <img src="img/generics/icon/header-red.png" alt=""> <br>
                        <img src="img/generics/icon/header-blue.png" alt=""> <br> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/Shield2.png" alt="">
                        </div>
                        <h3>Uncompromising security</h3>
                        <p>With our deep understanding of customers' information and in compliance with PCI DSS standards,
                            we provide protective measures against DDoS attacks and full data encryption.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/law.png" alt="">
                        </div>
                        <h3>LEGAL COMPLIANCE</h3>
                        <p>Registration in UK, MSB status in FinCEN, essential licenses and strong relations with banks
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/percent1.png" alt="">
                        </div>
                        <h3>Competitive Commission</h3>
                        <p>Our investors are guaranteed of the consistent
                            3% to 5% returns of
                            their investments weekly. Of cause,
                            other incentives are included for higher volume investors
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/support.png" alt="">
                        </div>
                        <h3>24/7 support</h3>
                        <p>
                            Our main objectives is to meet your satisfaction,
                            anytime. We offer professional guidance
                            and assistance around the clock.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/world.png" alt="">
                        </div>
                        <h3>WORLD COVERAGE</h3>
                        <p>We provide services to about 90% of the world's countries, including 26 states in USA</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 ">
                    <div class="why-us-main">
                        <div class="icon">
                            <img src="img/generics/icon/Chart2.png" alt="">
                        </div>
                        <h3>PERFORMANCE</h3>
                        <p>Our expert team are highly experienced individuals from
                            the world's top finance, business and tech companies like
                            Morgan Stanly, Google and Amazon, put together to actualize the
                            dreams and financial stability of our investors.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR PLANS -->
    <!-- ==================================================== -->
    <section id="our-plans" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1>Our Plans</h1>
                        <img src="img/generics/icon/header-gray.png" alt=""><br>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Silver</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                         
                            <h2 class="percent">3%</h2>
                    {{--            <p class="percent-limit">Profit Made Weekly</p>
                            <p class="invest">$1000 - $5000</p> --}}
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td>Weekly interest: </td>
                                    <td>3%</td>
                                  </tr>
                                  <tr>
                                    <td>Minimal investment:</td>
                                    <td>$1000</td>                  
                                  </tr>
                                  <tr>
                                    <td>Maximal investment:</td>
                                    <td>$5000</td>
                                  </tr>
                                  <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                  </tr>
                                  <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                        <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Gold</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <h2 class="percent">4%</h2>
                            {{-- <p class="percent-limit">Profit Made Weekly</p>
                            <p class="invest">$6000 - $19000</p> --}}
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td>Weekly interest: </td>
                                    <td>4%</td>
                                  </tr>
                                  <tr>
                                    <td>Minimal investment:</td>
                                    <td>$6000</td>                  
                                  </tr>
                                  <tr>
                                    <td>Maximal investment:</td>
                                    <td>$19000</td>
                                  </tr>
                                  <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                  </tr>
                                  <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-inner">
                            <h3 class="title">Diamond</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <h2 class="percent">5%</h2>
                            {{-- <p class="percent-limit">Profit Made Weekly</p>
                            <p class="invest">$20,000 and above</p> --}}
                            <table class="table">
                                <tbody>
                                  <tr>
                                    <td>Weekly interest: </td>
                                    <td>5%</td>
                                  </tr>
                                  <tr>
                                    <td>Minimal investment:</td>
                                    <td>$20,000</td>                  
                                  </tr>
                                  <tr>
                                    <td>Maximal investment:</td>
                                    <td>No Limit</td>
                                  </tr>
                                  <tr>
                                    <td>Investment term:</td>
                                    <td>Forever</td>
                                  </tr>
                                  <tr>
                                    <td>Payment Days:</td>
                                    <td>Weekends</td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                        <hr>
                        <div class="card-footer">
                            <a href="{{route('register')}}">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- STEPS -->
    <!-- ==================================================== -->
    <section class="steps sections" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1>Three Simple Steps</h1>
                        <img src="img/generics/icon/header-green.png" alt=""><br>
                        <!-- <p>Just these few steps, you are set</p> -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="steps">
                        <div id="sync2" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="img/generics/icon/sign-up.png" alt="">
                                <div class="topic">
                                    <h1>Sign Up</h1>
                                    <p>Sign up for your free pivotcoins account follow our easy process to set up
                                        your profile
                                    </p>
                                </div>
                                <i class="fa fa-angle-right"></i>
                            </div>
                            <div class="item">
                                <img src="img/generics/icon/choose.png" alt="">
                                <div class="topic">
                                    <h1>Choose a plan and make deposit</h1>
                                    <p>
                                        Choose your preferred plan and make your deposit. This can be done through methods like
                                        bank transfer, credit card to add money
                                        to your pivotcoins account
                                    </p>
                                </div>
                                <i class="fa fa-angle-right"></i>
                            </div>
                            <div class="item">
                                <img src="img/generics/icon/yields.png" alt="">
                                <div class="topic">
                                    <h1>Start Earnning Profits</h1>
                                    <p>All Withdrawals are made on weekly base. To make a
                                        withdrawal, you need to fill the withdrawal application
                                        form in your dashboard, indicating the amount you want to withdraw.
                                        Processing of your application will be followed right away.

                                    </p>
                                </div>
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="step-main">
                        <div id="sync1" class="owl-carousel owl-theme">
                            <div class="item">
                                <img class="img-fluid" src="img/home/signup/PNG4.png" alt="">
                                {{-- <h2>Sign Up</h2>
                                <p>provide the necessary information asked</p>
                                <p>you wiill be taken to your dashboard where you will find the plans available</p> --}}
                            </div>
                            <div class="item">
                                    <img class="img-fluid" src="img/home/signup/PNG5.png" alt="">
                            </div>
                            <div class="item">
                                    <img class="img-fluid" src="img/home/signup/PNG3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR TOOLS -->
    <!-- ==================================================== -->
    <section id="out-tools" class=" sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1>Bitcoin Tools</h1>
                        <p>Make use of our bitcoin widgets to track your investment from time to time</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 ">
                    <div class="bitcoin-calculator">
                        <script src="https://cdn.jsdelivr.net/gh/coinponent/coinponent@1.2.6/dist/coinponent.js"></script>
                        <coin-ponent dark-mode></coin-ponent>
                        <!-- <img src="img/deleteFake.JPG" class="img-fluid" alt="Responsive image"> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="enter-msg">
                        <p>Use "btc" for Bitcoin, "bch" for Bitcash and "eth" for Etherium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR RESOURCES -->
    <!-- ==================================================== -->
    <section class="our-market-resource sections">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="our-market-resource-main">
                        <h2>Bitcoin live chart</h2>
                        <p class="sub">The Bitcoin ecosystem at a glance</p>
                        <p>Why dont you grab this great opportunity to join.
                            invest in cryptocurrency CFDs. Ride the digital wave
                            of cryptocurrencies with Pivotcoins. Start investing in Bitcoin, Ethereum, Bitcash today.</p>
                        <div class="our-market-resource-main-tabulate">
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>More than 80,000 businesses are already on the bandwagon; so why not yours?</p>
                            </div>
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>The entire process of bitcoin transactions is peer to peer.</p>
                            </div>
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>With bitcoins, there’s basically zero risks of inflation.</p>
                            </div>
                            <div class="icon-para">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <p>Enjoy a certain degree of financial anonymity that most credit cards fail to offer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="chart-img">
                        <!-- <img src="img/deletefakechart.JPG" class="img-fluid" alt="Responsive image"> -->
                        <div class="btcwdgt-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- OUR TEAM -->
    <!-- ==================================================== -->
    <section class="our-team sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1>our team</h1>
                        {{-- <img src="img/generics/icon/header-gray.png" alt=""><br> --}}
                        <!-- <p>A few of our experts.</p> -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/1.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href="#"></a>
                        </figure>
                        <div class="name">
                            <h3>Virgil D. Allen</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/2.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href="#"></a>
                        </figure>
                        <div class="name">
                            <h3>Yvette B. Anderson</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/3.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href="#"></a>
                        </figure>
                        <div class="name">
                            <h3>Linda M. Williams</h3>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="our-team-main">
                        <figure class="snip1295">
                            <img src="img/home/team/4.jpg" alt="sample38"/>
                            <div class="border one" style="">
                                <div></div>
                            </div>
                            <div class="border two">
                                <div></div>
                            </div><a href="#"></a>
                        </figure>
                        <div class="name">
                            <h3>Hector D. Hughes</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- TESTIMONIALS -->
    <!-- ==================================================== -->
    <section class="testimonials sections">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head">
                        <h1>Here’s what our customers have to say</h1>
                        <img src="img/generics/icon/header-gray.png" alt=""><br>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slide-msg">
                        <div class="testimonial-owl-carousel owl-carousel owl-theme">
                            <div class="item" >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial1.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>John H. Murphy</p>
                                            <span>USA</span>
                                        </div>
                                    </div>
                                    <h4>Pivotcoin provides a truly professional service
                                        and I don't
                                        hesitate to recommend them to anyone who wants
                                        to start investing in bitcoin.
                                    </h4>
                                </div>
                            </div>
                            <div class="item"  >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial2.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>James C. Gibson</p>
                                            <span>USA</span>
                                        </div>
                                    </div>
                                    <h4>from my observations, i cant wait to give the high volume investment soon.
                                        you re definitely packed with great team for the job</h4>
                                </div>
                            </div>

                            <div class="item"  >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial3.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Viollette Rocheleau</p>
                                            <span>FRANCE</span>
                                        </div>
                                    </div>
                                    <h4>I can hold happinessand what these guys have done for me. thank you very much, pivotcoins teams. you are great</h4>
                                </div>
                            </div>

                            <div class="item"  >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial4.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Elizabeth G. Reese</p>
                                            <span>USA</span>
                                        </div>
                                    </div>
                                    <h4> Wow! just sitting down doing nothing while money keeps rolling in?
                                        that's what i call crazy and cool.</h4>
                                </div>
                            </div>

                            <div class="item" >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial5.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Max Holzman</p>
                                            <span>GERMANY</span>
                                        </div>
                                    </div>
                                    <h4>i have not had any reasons to regret since i started my investment with
                                        pivotcoins. you really dont need to much about bitcoin trading. with tese guys, you re covered.</h4>
                                </div>
                            </div>

                            <div class="item" >
                                <div class="person">
                                    <div class="name-pic">
                                        <div class="pics">
                                            <img src="img/home/testimonials/testimonial6.jpeg" alt="">
                                        </div>
                                        <div class="name">
                                            <p>Kedar Waqqas Bishara</p>
                                            <span>TUNISIA</span>
                                        </div>
                                    </div>
                                    <h4>I believe Bitcoin is the future. I also know this is the greatest
                                        freedom technology developed in my lifetime, and I’m thrilled to see the
                                        progress and development in this space
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================== -->
    <!-- SERVICES ICONS -->
    <!-- ==================================================== -->
    <section id="our-services-icons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <div class="head" >
                                <h1>What We Accept</h1>                                                                                                                                                                                                                                                                                                                                                                                                                                             
                      </div>
                </div>
                <div class="col-sm-8 offset-sm-2">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="icoins">
                                <a href="">
                                    <img src="img/home/services/fake1.png" class="img-fluid"  alt="Responsive image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icoins">
                                <a href="">
                                    <img src="img/home/services/3.png" class="img-fluid"  alt="Responsive image">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="icoins">
                                <a href="">
                                    <img src="img/home/services/9.jpg" class="img-fluid"  alt="Responsive image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
@endsection
{{--------------------------------------------------------------------------}}
@section('style')
    <link rel="stylesheet" href="{{asset('css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/owl.theme.default.min.css')}}">


@endsection
{{-----------------------------------------------------------------------}}
@section('script')
    {{--<script src="{{asset('js/owl.carousel.min.js')}}"></script>--}}
    <script>
        var accordion = new Accordion('.accordion-container',{

            // hides all answers
            hideAll: false,

            // shows all answers
            showAll: false,

            // shows the first answer
            showFirst: false,

            // panel ID you want to show at first time
            panelId: null

        });
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        (function(b,i,t,C,O,I,N) {
            window.addEventListener('load',function() {
                if(b.getElementById(C))return;
                I=b.createElement(i),N=b.getElementsByTagName(i)[0];
                I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
            },false)
        })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
    </script>
    <script type="text/javascript"     src="https://ethereumprice.org/assets/js/widget/app.min.js">
    </script>
@endsection
{{--------------------------------------------------------}}