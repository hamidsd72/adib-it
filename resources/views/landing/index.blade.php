@extends('layouts.front.master')
@section('meta')@endsection

@section('styles')

    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">--}}
    {{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">--}}
    <link rel="stylesheet" href="{{url('assets/newFront/landing/css/Navigation-with-Button.css')}}">
    <link rel="stylesheet" href="{{url('assets/newFront/landing/css/new.css')}}">
    <link rel="stylesheet" href="{{url('assets/newFront/landing/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/newFront/landing/css/styles.css')}}">
    <link rel="stylesheet" href="{{url('assets/newFront/landing/css/styles_v9.css?v=1')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
        #portfolio {
            padding: 0px 0 20px;
        }

        iframe.video-player {
            height: 270px;
            width: 100%;
        }

        .footer-bottom {
            bottom: -20px;
        }

        .watchvideo-btn i {
            position: relative;
            top: 7px;
        }

        #featurelink .pbox img{
            height: 50px;
            width: 50px;
            object-fit: contain;
        }

        .pbox:hover {
            box-shadow: 3px 3px 10px gray;
            transform: dela;
        }

        @media only screen and (min-width: 920px) {
            #hero.header-slide{
                width: 100%;
                height: 80vh;
                background: #8f8315;
                margin-top: 80px;
            }
        }

        @media (min-width: 768px) and (max-width: 920px) {
            #hero.header-slide{
                width: 100%;
                height: 80vh;
                background: #c81648;
                margin-top: 80px;
            }
        }

        @media screen and (max-width: 767px) {
            .platform-accordian {
                display: block !important;
                margin-top: 50px;
            }

            .use-cases h2 {
                font-size: 1.1rem !important;
            }

            .sub-footer-text h2 {
                font-size: 1.2rem !important;
            }

            #hero.header-slide{
                width: 100%;
                height: 80vh;
                background: #37517e;
                margin-top: 80px;
            }
        }



        /*#featurelink .pbox .title{*/
        /*    height:100px;*/
        /*    background: red;*/
        /*}*/


    </style>
@endsection

@section('body')

    <section id="hero" class="header-slide d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate"
                     data-aos="fade-up" data-aos-delay="200"><h2>شرکت ادیب گستر عصر نوین با 20 سال تجربه</h2>
                    <h4 class="text-light">طراحی مدرن وب، امنیت شبکه، طراحی وب سایت فروشگاهی ، سئو و بهینه سازی
                        سایت</h4>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in"
                     data-aos-delay="200"><img
                            src="https://bootstrapmade.com/demo/templates/Arsha/assets/img/hero-img.png"
                            class="img-fluid animated" alt=""></div>
            </div>
        </div>
    </section>
    {{--    <div id="reqdemolink">--}}

    {{--        <div class="jumbotron top-head navbar-fixed-top no-margin">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row d-flex align-items-center">--}}
    {{--                    <div class="col-12 col-md-4 "><a href="https://catalyst.nextbee.com/" class="top-logo"><img class="img-fluid" src="assets/newFront/landing/img/nwlogo.png"></a></div>--}}
    {{--                    <div class="col-12 col-md-8 topBtn">--}}
    {{--                        <a class="btn btn-primary orng-demo new-btn2 btn_line demo_btn_1" href="javascript:void(0);" type="button" data-bs-toggle="modal" data-bs-target="#modal-get-started"><span>Request Demo</span></a>--}}
    {{--                    </div>--}}

    {{--                    <!-- <div class="col-3 col-sm-2 col-md-2 col-lg-2"> -->--}}
    {{--                    <!-- <a href="https://www.nextbee.com/bee/login.htm" class="btn btn-primary demo-btn">Login</a> -->--}}
    {{--                    <!-- </div> -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="jumbotron hero-area">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-md-10 offset-md-1">--}}
    {{--                        <div class="top-txt-area">--}}
    {{--                            <h1 class="sec-title">Referral Program - Scaled and Optimized!</h1>--}}
    {{--                            <h4>First Unified End to End Solution Platform for Referral Marketers</h4>--}}
    {{--                            <p>Pay Only for the Results You Get - $50 Per Thousand Referral Interactions. <br><span>Unlimited Access to 16+ Proven Workflows for Onboarding, Engagement, Reactivation, Recognition, and Gamification.</span></p>--}}
    {{--                        </div>--}}
    {{--                        <div class="text-center" id="pricingchallenge"><button class="btn btn-primary orng-demo new-btn-mid demo_btn_2" type="button" data-bs-toggle="modal" data-bs-target="#modal-get-started">Request Demo</button><br><span>Free Pilot Available!</span></div>--}}

    {{--                        <div>--}}
    {{--                            <img class="img-fluid" src="assets/newFront/landing/img/review_image.png">--}}
    {{--                        </div>--}}

    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}

    {{--    </div>--}}
    <div class="jumbotron logo-sec">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="sec-title" style=" font-size:2rem;">نمونه کارها </h2>
                    {{--                    <div class="clientlogo-slider" id="slider">--}}
                    {{--                        <div class="row align-items-center clintlogorow" id="clintlogorow1">--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/1.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/2.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/3.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/4.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/5.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/6.png"></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="row align-items-center clintlogorow" id="clintlogorow2">--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/7.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/8.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/9.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/10.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/11.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/12.png"></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="row align-items-center clintlogorow" id="clintlogorow3">--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/13.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/14.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/15.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/16.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/17.png"></div>--}}
                    {{--                            <div class="col-md-2"><img src="assets/newFront/landing/img/18.png"></div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>

    </div>
    <div class="jumbotron no-padding slider-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="swiper mySwiper" id="portfolio">
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-wrapper">
                            <div class="m-item swiper-slide">
                                <div class="mx-1  portfolio-item filter-app">
                                    <div class="portfolio-wrap"><span class="new-tage"></span> <a
                                                href="https://adib-it.com/uploads/customers/sites/site-5b59ca6a283a1962ad3f8fea41a8d839.jpeg"
                                                data-fancybox=""> <img
                                                    src="https://adib-it.com/uploads/customers/sites/site-5b59ca6a283a1962ad3f8fea41a8d839.jpeg"
                                                    class="img-fluid" alt="کارگزاری حافظ"> </a>
                                        <div class="portfolio-info"
                                             onclick="location.href='https://adib-it.com/fa/template/%DA%A9%D8%A7%D8%B1%DA%AF%D8%B2%D8%A7%D8%B1%DB%8C-%D8%AD%D8%A7%D9%81%D8%B8'">
                                            <a class="text-black"
                                               href="https://adib-it.com/fa/template/%DA%A9%D8%A7%D8%B1%DA%AF%D8%B2%D8%A7%D8%B1%DB%8C-%D8%AD%D8%A7%D9%81%D8%B8">
                                                <h6> کارگزاری حافظ</h6>
                                                <div class="flash-enter"><i class="bi bi-arrow-left-short"></i></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-item swiper-slide">
                                <div class="portfolio-item filter-app">
                                    <div class="portfolio-wrap"><a
                                                href="https://adib-it.com/uploads/customers/sites/site-06352df723625aa01c4e642237739e95.png"
                                                data-fancybox=""> <img
                                                    src="https://adib-it.com/uploads/customers/sites/site-06352df723625aa01c4e642237739e95.png"
                                                    class="img-fluid" alt="به اندیشی و فن آوری فردا"> </a>
                                        <div class="portfolio-info"
                                             onclick="location.href='https://adib-it.com/fa/template/%D8%A8%D9%87-%D8%A7%D9%86%D8%AF%DB%8C%D8%B4%DB%8C-%D9%88-%D9%81%D9%86-%D8%A2%D9%88%D8%B1%DB%8C-%D9%81%D8%B1%D8%AF%D8%A7'">
                                            <a class="text-black"
                                               href="https://adib-it.com/fa/template/%D8%A8%D9%87-%D8%A7%D9%86%D8%AF%DB%8C%D8%B4%DB%8C-%D9%88-%D9%81%D9%86-%D8%A2%D9%88%D8%B1%DB%8C-%D9%81%D8%B1%D8%AF%D8%A7">
                                                <h6> به اندیشی و فن آوری فردا</h6>
                                                <div class="flash-enter"><i class="bi bi-arrow-left-short"></i></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-item swiper-slide">
                                <div class="portfolio-item filter-app">
                                    <div class="portfolio-wrap"><a
                                                href="https://adib-it.com/uploads/customers/sites/site-1d1c77390026db5377ad782efbf4720f.png"
                                                data-fancybox=""> <img
                                                    src="https://adib-it.com/uploads/customers/sites/site-1d1c77390026db5377ad782efbf4720f.png"
                                                    class="img-fluid" alt="فروشگاه اینترنتی خرید باکس"> </a>
                                        <div class="portfolio-info"
                                             onclick="location.href='https://adib-it.com/fa/template/%D9%81%D8%B1%D9%88%D8%B4%DA%AF%D8%A7%D9%87-%D8%A7%DB%8C%D9%86%D8%AA%D8%B1%D9%86%D8%AA%DB%8C-%D8%AE%D8%B1%DB%8C%D8%AF-%D8%A8%D8%A7%DA%A9%D8%B3'">
                                            <a class="text-black"
                                               href="https://adib-it.com/fa/template/%D9%81%D8%B1%D9%88%D8%B4%DA%AF%D8%A7%D9%87-%D8%A7%DB%8C%D9%86%D8%AA%D8%B1%D9%86%D8%AA%DB%8C-%D8%AE%D8%B1%DB%8C%D8%AF-%D8%A8%D8%A7%DA%A9%D8%B3">
                                                <h6> فروشگاه اینترنتی خرید باکس</h6>
                                                <div class="flash-enter"><i class="bi bi-arrow-left-short"></i></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-item swiper-slide">
                                <div class="portfolio-item filter-app">
                                    <div class="portfolio-wrap"><a
                                                href="https://adib-it.com/uploads/customers/sites/site-b927aa9285b64a04402cbdb838ed32ad.png"
                                                data-fancybox=""> <img
                                                    src="https://adib-it.com/uploads/customers/sites/site-b927aa9285b64a04402cbdb838ed32ad.png"
                                                    class="img-fluid" alt="فروشگاه اینترنتی بیگ سایز"> </a>
                                        <div class="portfolio-info"
                                             onclick="location.href='https://adib-it.com/fa/template/%D9%81%D8%B1%D9%88%D8%B4%DA%AF%D8%A7%D9%87-%D8%A7%DB%8C%D9%86%D8%AA%D8%B1%D9%86%D8%AA%DB%8C-%D8%B1%D8%B2%DA%AF%D9%84'">
                                            <a class="text-black"
                                               href="https://adib-it.com/fa/template/%D9%81%D8%B1%D9%88%D8%B4%DA%AF%D8%A7%D9%87-%D8%A7%DB%8C%D9%86%D8%AA%D8%B1%D9%86%D8%AA%DB%8C-%D8%B1%D8%B2%DA%AF%D9%84">
                                                <h6> فروشگاه اینترنتی بیگ سایز</h6>
                                                <div class="flash-enter"><i class="bi bi-arrow-left-short"></i></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-item swiper-slide">
                                <div class="portfolio-item filter-app">
                                    <div class="portfolio-wrap"><a
                                                href="https://adib-it.com/uploads/customers/sites/site-b57156a505b8f984f91a5d36fea5472e.png"
                                                data-fancybox=""> <img
                                                    src="https://adib-it.com/uploads/customers/sites/site-b57156a505b8f984f91a5d36fea5472e.png"
                                                    class="img-fluid" alt="خانه استانبول"> </a>
                                        <div class="portfolio-info"
                                             onclick="location.href='https://adib-it.com/fa/template/%D8%AE%D8%A7%D9%86%D9%87-%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%D8%A8%D9%88%D9%84'">
                                            <a class="text-black"
                                               href="https://adib-it.com/fa/template/%D8%AE%D8%A7%D9%86%D9%87-%D8%A7%D8%B3%D8%AA%D8%A7%D9%86%D8%A8%D9%88%D9%84">
                                                <h6> خانه استانبول</h6>
                                                <div class="flash-enter"><i class="bi bi-arrow-left-short"></i></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="m-item swiper-slide">
                                <div class="portfolio-item filter-app">
                                    <div class="portfolio-wrap"><a
                                                href="https://adib-it.com/uploads/customers/sites/site-59e1f61d5212777284e9515eefbc71fc.png"
                                                data-fancybox=""> <img
                                                    src="https://adib-it.com/uploads/customers/sites/site-59e1f61d5212777284e9515eefbc71fc.png"
                                                    class="img-fluid" alt="sianhome"> </a>
                                        <div class="portfolio-info"
                                             onclick="location.href='https://adib-it.com/fa/template/sianhome'"><a
                                                    class="text-black" href="https://adib-it.com/fa/template/sianhome">
                                                <h6> sianhome</h6>
                                                <div class="flash-enter"><i class="bi bi-arrow-left-short"></i></div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="jumbotron platform-tabs no-margin mt-5" id="workflowlink">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sec-title">خدمات طراحی وب سایت در شرکت ادیب </h2>
                    <div class="workflow-tabs">
                        <ul role="tablist" class="nav nav-tabs">
                            <li role="presentation" class="nav-item"><a role="tab" data-bs-toggle="tab"
                                                                        class="nav-link active"
                                                                        href="#tab-1">طراحی <br> وب سایت</a></li>
                            <li role="presentation" class="nav-item"><a role="tab" data-bs-toggle="tab" class="nav-link"
                                                                        href="#tab-2">سئو و <br>بهینه سازی سایت</a></li>
                            <li role="presentation" class="nav-item"><a role="tab" data-bs-toggle="tab" class="nav-link"
                                                                        href="#tab-3">طراحی سایت <br>
                                    ریسپانسیو</a></li>

                            <li role="presentation" class="nav-item"><a role="tab" data-bs-toggle="tab" class="nav-link"
                                                                        href="#tab-5">طراحی سایت <br>
                                    اختصاصی</a></li>

                            <li role="presentation" class="nav-item"><a role="tab" data-bs-toggle="tab" class="nav-link"
                                                                        href="#tab-7">طراحی سایت <br>فروشگاهی</a></li>
                            <li role="presentation" class="nav-item"><a role="tab" data-bs-toggle="tab" class="nav-link"
                                                                        href="#tab-8">تولید محتوا و <br>پشتیبانی
                                    سایت</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>طراحی وب سایت</h1>
                                        <p class="text-justify">
                                             امروزه طراحی سایت و در کنار آن دیجیتال مارکتینگ، نقش پررنگ و مهمی در
                                            بازاریابی، جذب مخاطب و تبدیل به مشتری در تمام کسب و کارها دارد. طراحی و راه
                                            اندازی یک سایت متناسب با کسب و کار شما از اولین قدم های ورود به دنیای
                                            دیجیتال مارکتینگ جهت بهبود ، توسعه و معرفی کسب و کار در فضای مجازی میباشد.
                                            با کمک طراحی سایت حرفه ای می‌توانید خدمات و فروش خود را از حالت محدود به
                                            زمان و مکان خارج نمایید و در دنیای بدون محدودیت و پول ساز اینترنت، فروش خوبی
                                            را آغاز کنید.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('assets/newFront/landing/img/workflow/lp/01 increase sale.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>سئو و بهینه سازی سایت</h1>
                                        <p class="text-justify">
                                            زمانی که شما بخواهید برای سایت خود سئو و بهینه سازی شروع کنید، اصلاً اهمیتی
                                            نخواهد داشت که مغازه و فروشگاه شما و کسب و کار شما در کجا واقع شده است؛ در
                                            حقیقت بعد از اینکه شما سایت را بهینه سازی نمایید، همواره در معرض دید عموم
                                            مردم قرار میگیرید و بیشتر از تبلیغاتی که در بیلبورد‌ها ‌و یا در فروشگاه‌ها
                                            ‌انجام می پذیرد، سئوی سایت به شما کمک موثرتری خواهد کرد.

                                        </p>
                                        <p>
                                            <a href="https://adib-it.com/fa/service/%D8%B3%D8%A6%D9%88-%D9%88-%D8%A8%D9%87%DB%8C%D9%86%D9%87-%D8%B3%D8%A7%D8%B2%DB%8C-%D8%B3%D8%A7%DB%8C%D8%AA"
                                               class="btn btn-primary orng-demo new-btn2 demo_btn_4" type="button"
                                               data-bs-toggle="modal" data-bs-target="#modal-get-started">
                                                نمونه کارها
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('assets/newFront/landing/img/workflow/lp/02 boost daily revenue.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>طراحی سایت ریسپانسیو </h1>
                                        <p class="text-justify">
                                            منظور از طراحی سایت ریسپانسیو، طراحی سایتی میباشد که تمامی عناصر موجود در
                                            سایت بسته به اندازه دستگاه شما (لپ تاپ، تبلت و گوش‌های موبایل در سایز مختلف)
                                            تغییر خواهد کرد و به درستی نمایش داده میشوند؛ بنابراین اگر سایت بگونه ای
                                            طراحی شود که در همه دستگاه‌ها به درستی نمایش داده و مشاهده شود، بازدهی وب
                                            سایت و رضایت کاربر از سایت افزایش خواهد یافت.
                                        </p>
                                        <p>
                                            <a href="https://adib-it.com/fa/service/%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%B3%D8%A7%DB%8C%D8%AA"
                                               class="btn btn-primary orng-demo new-btn2 demo_btn_5" type="button"
                                               data-bs-toggle="modal" data-bs-target="#modal-get-started">
                                                نمونه کارها
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('assets/newFront/landing/img/workflow/lp/03 value of saving.png')}}">
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>طراحی سایت اختصاصی</h1>
                                        <p class="text-justify">در طراحی سایت اختصاصی از هیچ سیستم مدیریت محتوای آماده
                                            ای استفاده نخواهد شد.
                                            تمام برنامه نویسی ها و طراحی های ظاهری به صورت یونیک و خاص توسط برنامه نویس
                                            مجرب کدنویسی و پیاده سازی خواهد شد .</p>
                                        <p>
                                            <a href="https://adib-it.com/fa/Portfolio-design-site?type=2"
                                               class="btn btn-primary orng-demo new-btn2 demo_btn_7" type="button"
                                               data-bs-toggle="modal" data-bs-target="#modal-get-started">
                                                نمونه کارها
                                            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('assets/newFront/landing/img/workflow/lp/05 charity drive.png')}}">
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="tab-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>طراحی سایت فروشگاهی</h1>
                                        <p class="text-justify">
                                            اگر شما می‌خواهید طراحی سایت فروشگاهی قدرتمند داشته باشید که با استفاده از
                                            آن خدمات، محصول یا هر چیز دیگری را به صفحه اول گوگل آورده و به فروش برسانید،
                                            باید تمام اصول فنی و ظاهری طراحی فروشگاه اینترنتی و سئو را رعایت نمایید
                                            . طراحی سایت، استفاده از سئو و تکنیک‌های آن در وب سایت نیاز به دانش ویژه‌ای
                                            خواهد داشت از این ‌رو بهتر است طراحی وب سایت، افزایش رتبه و بهینه‌ سازی آن
                                            را به یک تیم متخصص سپرده و از نتیجه کار لذت برید.
                                        </p>

                                        <a href="https://adib-it.com/fa/Portfolio-design-site?q=&category=%D8%B7%D8%B1%D8%A7%D8%AD%DB%8C-%D8%B3%D8%A7%DB%8C%D8%AA-%D9%81%D8%B1%D9%88%D8%B4%DA%AF%D8%A7%D9%87%DB%8C-%D9%88-%D8%AB%D8%A8%D8%AA-%D8%B3%D9%81%D8%A7%D8%B1%D8%B4"
                                           class="btn btn-primary orng-demo new-btn2 demo_btn_7" type="button"
                                           data-bs-toggle="modal" data-bs-target="#modal-get-started">
                                            نمونه کارها
                                        </a>

                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('assets/newFront/landing/img/workflow/lp/07 brand recognition.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1>تولید محتوا و پشتیبانی سایت</h1>
                                        <p class="text-justify">
                                            اگر مطالب جذاب و مفید تولید نمایید، مخاطبان از آنها بهره‌مند می شوند و شما
                                            را به عنوان یک مرجع خواهند شناخت زمانی که شرکت طراحی سایت ، وب سایت مورد
                                            نیاز شما را تحویل خواهد داد، وظیفه پشتیبانی وب سایت شما را نیز بر عهده
                                            میگیرند و در صورت بروز هرگونه خطا موظف به برطرف کردن آن خطا خواهند بود.
                                            مسئله پشتیبانی سایت نقش بسیار مهم در پروسه طراحی سایت دارد.
                                        </p>

                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{url('assets/newFront/landing/img/workflow/lp/08 event participation.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron platform-accordian no-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sec-title">سولات متداول در زمینه وب سایت</h2>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                        مراحل طراحی سایت به چه صورت است؟
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        در ابتدا برای راه اندازی وب سایت باید نام دامنه یا به اصطلاح نام وب سایت انتخاب شود. بعد از انتخاب نام دامنه، باید یک هاست مناسب انتخاب نمایید.  مرحله بعد انتخاب نوع طراحی وب سایت می باشد و باید نوع سایت درخواستی را مشخص کنید.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        چرا باید از یک هاست معتبر و پر سرعت استفاده کنیم؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        بسیاری از مشکلاتی که پس از طراحی سایت برای کاربران به وجود خواهد آمد، ناشی از استفاده از هاست های نامناسب خواهد بود؛ و اگر از هاست پر سرعت و معتبر در میزبانی طراحی سایت خود استفاده نمایید این مشکلات ایجاد نمی شود. به عنوان مثال با بالا رفتن آمار بازدید سایت، سرعت سایت شما کم نخواهد شد یا اگر خطای 404 برای سایت شما اتفاق بیافتد به راحتی می توانید با تماس با شرکت پشتیبانی هاست خود مشکل را مرتفع نمایید. قطعی هاست و سرعت پایین سایت، تاثیر زیادی در سئو سایت شما نیز ایجاد می کند ؛ پس هنگام طراحی و همچنین راه اندازی سایت به هاست سایت خود توجه زیادی داشته باشید.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        تاثیر بهبود رتبه و سئو سایت بر رشد کسب و کار شما چیست؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        خدمات بهبود رتبه سایت و سئو یکی از مهمترین مسائلی می باشد که این روزها بسیار مورد توجه قرار گرفته است، زیرا کسب و کارها به اهمیت فضای آنلاین برای ارائه کالا و همچنین خدمات خود اشراف دارند. امروزه مشتریان کالا و خدمات ما، قبل از دریافت کالا و خدمات مورد نیاز خود، ابتدا به تحقیق و بررسی در فضای اینترنت می پردازند و در نتیجه، اگر کسب و کاری در این فضا حضور نداشته باشد، هرگز از سوی مشتریان بالقوه شناسایی نمی شود. با توجه به رقابت بالای کسب و کارها همه سایت ها به seo نیاز خواهند داشت تا بتوانند بر طبق الگوریتم های گوگل مسیر رشد خود را طی کنند و به زودی در رتبه های نخستین در نتایج جستجو گوگل دیده شوند.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        عوامل موثر در تعیین قیمت سئو چیست؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        عواملی که در تعیین هزینه سئو یک سایت موثر است بسیار متنوع بوده و تابع موارد گوناگونی می باشد. از جمله جایگاه فعلی سایت در نتایج گوگل، کلمه کلیدی و حتی نوع کسب و کار و سایت که آیا سایت فروشگاهی می باشد یا شرکتی و... در امر تعیین هزینه ارائه خدمات سئو بسیار مهم و حایز اهمیت است.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                        آیا می توان درگاه پرداخت در سایت فروشگاهی خود داشته باشیم ؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        بله قطعا یکی از الزامات طراحی یک سایت فروشگاهی وجود یک درگاه پرداخت می باشد تا کاربران پس از ورود به سایت و انتخاب محصول نسبت به خرید و واریز مبلغ آن اقدام نمایند.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                        آیا برای اضافه کردن محصول و دسته بندی آنها محدودیتی وجود دارد؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        هیچ محدودیتی برای افزایش محصولات و گسترش دسته بندی محصولات در سایت فروشگاه شما وجود ندارد.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                        به روز رسانی پس از تحویل سایت هم توسط شما انجام خواهد شد؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        بله؛ بروزرسانی و پشتیبانی وب سایت شما پس از طراحی در قالب یک قرارداد اداگانه بر عهده ادیب گستر بوده که این خدمات زیر نظر متخصصین شرکت ما انجام می پذیرد.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                        موتور جستجوگر چگونه کار می کند؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        موتورهای جستجو با خزیدن صدها میلیارد صفحه و با بهره گرفتن از خزنده های وب خود، فعالیت می کنند. در واقع این خزنده های وب، معمولاً به عنوان ربات های موتور جستجو و یا به عنوان عنکبوت ها نیز معروف می باشند. یک موتور جستجو در کنار دانلود صفحات وب و یافتن پیوند های موجود در این صفحات وب، تمامی مطالب بارگذاری شده را کشف خواهند کرد. از این رو متخصصین سئو در شرکت ادیب با آگاهی از الگوریتم و استانداردهای گوگل جذاب ترین پیشنهادات را برای شما خواهند داشت.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                        سیستم مدیریت محتوا یا Cms چیست؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        cms یک نرم افزار تحت وب می باشد که به شما اجازه خواهد داد، بدون نیاز به علم فنی و برنامه نویسی، بتوانید سایت خود را مدیریت نمایید و با این کار در هزینه طراحی سایت خود صرفه جویی نمایید. در میان تمام cms ها وردپرس از محبوبترین آنها بشمار می آید. البته نا گفته نماند که وردپرس یک سیستم کامل و بدون نقص نیست لذا ممکن است در برابر برخی از تغییرات مجبور به استفاده از دانش برنامه نویسی در سایت بشویم.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                        آیا امکان طراحی سایت چند زبانه برای شما وجود دارد؟
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                 data-parent="#accordion">
                                <div class="card-body">

                                    <p class="text-justify">
                                        از آنجاییکه بسیاری از کسب و کارها فعالیتشان به ایران محدود نبوده، طراحی سایت چند زبانه یکی از اقداماتی می باشد که برای این دسته از کسب و کارها حتما در نظر گرفته می شود. تیم طراحی ادیب گستر این امکان را خواهد داشت که طبق خواسته شما، یک سایت چند زبانه در اختیارتان بگذارد.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron testimonial-sec" id="testimoniallink">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-box">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="testimonial-icon"><img class="radius-10"
                                                                   src="https://adib-it.com/assets/adib/new/images/amin_khansari2.jpeg"/>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="testimonial-txt">
                                    <h5>شرکت ادیب گستر عصر نوین با اندوخته تجربه 20 ساله خود در عرصه خدمات آی تی، تمامی
                                        مراحل راه اندازی و طراحی سایت و ارتقاء کسب و کار شما را در دنیای اینترنت با بهره
                                        مندی از متخصصان حرفه ای انجام داده و بهترین پیشنهادات را برای شما تا زمان حصول
                                        به نتیجه مطلوب ارائه خواهد کرد. ما در تمامی مراحل بصورت قدم به قدم در کنار شما
                                        خواهیم بود. </h5>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <h6>امین خوانساری <span>مدیر عامل</span></h6>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <a id="feature" href="#videoModal" data-bs-toggle="modal"
                                               class="watchvideo-btn btn_vid"><span><i class="bi bi-play-circle h4"></i></span>
                                                نمایش
                                                فیلم معرفی شرکت</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron use-cases" id="featurelink">
        <div class="container">
            <div class="col-md-12">
                <h2>ویژگی های یک شرکت طراحی سایت خوب </h2>
            </div>
            <div class="row premium">
                <div class="col-md-4">
                    <div class="pbox">

                        <div class="d-flex title">
                            <div class="me-2"><img src="{{url('assets/newFront/landing/img/compony-history.png')}}"></div>
                            <div class="feature-content pt-2"><h4>قدمت شرکت</h4></div>
                        </div>

                        <div class="col-md-12">
                            <div class="feature-content">
                                <p>
                                    سابقه  و قدمت یکی از موارد مهمی می باشد که حتما باید آن را درنظر بگیرید. البته هر شرکتی که سابقه نداشته باشد الزاما غیر قابل اعتماد نخواهد بود، و بهتر است به راحتی اعتماد نکنید. قطعا به شرکتی که دارای سابقه و قدمت بیشتری می باشد، اعتماد پررنگ تری می توان داشت. بدون شک می‌توان بیان داشت که شرکتی، با حداقل 10 سال سابقه، بسیار  حرفه ای تر و قابل اعتمادتر از شرکتی می باشد که هیچ سابقه‌ای در زمینه طراحی سایت و سئو ندارد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbox">

                        <div class="d-flex title">
                            <div class="me-2"><img src="{{url('assets/newFront/landing/img/cretae_security.png')}}"></div>
                            <div class="feature-content pt-2"><h4>ایجاد امنیت بالای سایت</h4></div>
                        </div>

                        <div class="col-md-12">
                            <div class="feature-content">
                                <p>
                                    شرکت طراحی سایت باید امنیت بالایی سایت شما را تضمین کرده تا در مواردی مثل هک و... سایت شما در معرض خطر نباشد و از این گونه موارد در امان باشید. برای این کار استفاده از تکنیک های برنامه نویسی و انتخاب رمز عبورهای سخت و به روز رسانی مداوم و... می تواند میزان امنیت سایت شما را تا حد قابل قبول بالا ببرد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbox">

                        <div class="d-flex title">
                            <div class="me-2"><img src="{{url('assets/newFront/landing/img/dont-use-copy.png')}}"></div>
                            <div class="feature-content pt-2"><h4>طراحی سایت با وردپرس</h4></div>
                        </div>

                        <div class="col-md-12">
                            <div class="feature-content">
                                <p>
                                    طراحی سایت با پلتفورم هایی مانند وردپرس یا جوملا و .. که به قالب آماده نیز معروف می باشند ،یکی از روش های ساخت سایت است که از قالب های آماده جهت طراحی و راه اندازی وب سایت استفاده می شود. این سایت ها بر اساس نیاز مشتری سفارشی سازی می شوند و لذا هزینه بسیار کمتری نسبت به طراحی سایت کد نویسی دارند.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row premium">
                <div class="col-md-4">
                    <div class="pbox">
                        <div class="d-flex title">
                            <div class="me-2"><img src="{{url('assets/newFront/landing/img/programmin.png')}}"></div>
                            <div class="feature-content pt-2"><h4>طراحی سایت با کدنویسی اختصاصی</h4></div>
                        </div>

                        <div class="col-md-12">
                            <div class="feature-content">
                                <p>
                                    طراحی سایت با کد نویسی اختصاصی از آنجایی که نیاز به زمان و تخصص لازم جهت راه اندازی آن دارند لذا هزینه طراحی این قبیل از سایت ها در مقایسه با طراحی سایت با وردپرس بسیار بالاتر است. اما امنیت آن به مراتب بالاتر بوده و تقریبا تمامی امکانات لازم و موردنیاز شما برای یک وب سایت را می توان اجرا کرد و محدودیت خاصی در این خصوص وجود نخواهد داشت.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pbox">

                        <div class="d-flex title">
                            <div class="me-2"><img src="{{url('assets/newFront/landing/img/experince-in-out.png')}}"></div>
                            <div class="feature-content "><h4>تجربه طراحی سایت داخلی و خارجی را داشته باشند</h4></div>
                        </div>

                        <div class="col-md-12">
                            <div class="feature-content">
                                <p>
                                    اگر برند شما جهانی باشد و یا حتی یک کسب و کار کوچک داشته باشید، باز هم به یک شرکت طراحی وب نیاز پیدا می کنید که استراتژی های هر دو را درک نماید. اگر طراح شما فقط در مشاغل محلی تجربه داشته باشد ، پس احتمال زیادی بدهید که وب سایت جدید شما با پایه ای برای موفقیت در سطوح بعدی طراحی نمی شود. هرچه طراح شما از استراتژی ها و مخاطبان بیشتری آگاهی داشته باشد، احتمال اینکه سایت شما در رسیدن به اهداف تجاری شما کمک کننده باشد بیشتر می باشد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="pbox">

                        <div class="d-flex title">
                            <div class="me-2"><img src="{{url('assets/newFront/landing/img/have-portfolio.png')}}"></div>
                            <div class="feature-content pt-2"><h4>داشتن نمونه کار طراحی سایت</h4></div>
                        </div>

                        <div class="col-md-12">
                            <div class="feature-content">
                                <p>
                                    نمونه کارهای هر شرکت از جمله موارد بسیار مهم آن شرکت خواهد بود. چرا که میزان کار و تجربه آن شرکت را تعیین می کند. خیلی از افراد براساس نمونه کار تصمیم به ادامه کار با شرکت را خواهند گرفت. یعنی اگر نمونه کارهای خوب ارائه دهند، طراحی سایت خود را نیز به آن شرکت می سپارند ولی اگر سابقه و نمونه کارهای بی کیفیتی را به نمایش بگذارند، قطعا در اینصورت اعتماد به شرکتی تازه کار بسیار سخت خواهد بود.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row premium toggle_premium hide_premium">

            </div>


            {{--            <button id="requestdemo" class="btn btn-primary center-block orng-btn expand-btn hme show_btn"--}}
            {{--                    type="button">نمایش بیشتر--}}
            {{--            </button>--}}
            {{--            <button class="btn btn-primary center-block orng-btn collapse-btn" type="button" style="display: none;">View--}}
            {{--                Less--}}
            {{--            </button>--}}


            <style type="text/css">
                .hide_premium {
                    display: none
                }
            </style>
            <script>
                $(".expand-btnside").click(function () {

                    $(".toggle_premium").removeClass("hide_premium");
                    $(".expand-btn").hide();
                    $(".collapse-btn").show();
                    $(".collapse-btn").addClass("hme");

                });
                $(".expand-btn").click(function () {

                    $(".toggle_premium").removeClass("hide_premium");
                    $(".expand-btn").hide();
                    $(".collapse-btn").show();

                });
                $(".collapse-btn").click(function () {

                    $(".toggle_premium").addClass("hide_premium");
                    $(".collapse-btn").hide();
                    $(".expand-btn").show();
                    try {
                        var element_to_scroll_to = document.querySelectorAll('.expand-btn')[0];
                        var element_to_scroll_to = $('.premium')[3];
                        element_to_scroll_to.scrollIntoView();
                    } catch (ee) {
                    }

                });
            </script>


        </div>
    </div>


    <div class="jumbotron sub-footer" id="freepilotlink">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="sub-footer-text">
                        <h2>نگران نباشید ما همراه شما خواهیم بود. </h2>
                        <p class="text-justify">ما تمامی تلاش خود را خواهیم کرد تا بتوانیم علاوه بر طراحی سایت ،خدمات
                            سئو حرفه ای و تبلیغات
                            در گوگل و ... بهترین پشتیبانی را به شما، در طی شبانه روز و حتی در روز های تعطیل داشته باشیم.
                            اگر نگران آینده یا ادامه مسیر خویش در فضای اینترنت بودید، این مسئله بسیار ساده است، یادتان
                            باشد که تیم مجرب ما همواره در کنار شما خواهد بود ، تیم پشتیبانی ادیب گستر همیشه برای کمک به
                            شما آماده به خدمت می باشد.
                        </p>
                        <h5>به دنبال چیزی سفارشی هستید؟ با ما تماس بگیرید
                            <span>
                                <a class="ms-3 " dir="ltr" href="tel:00982149295">(+98) 21-49295 </a>
                            </span>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 m-auto">


                    {{--                    <div class="sub-footer-video">--}}
                    {{--                        <style>.h_iframe-aparat_embed_frame {--}}
                    {{--                                position: relative;--}}
                    {{--                            }--}}

                    {{--                            .h_iframe-aparat_embed_frame .ratio {--}}
                    {{--                                display: block;--}}
                    {{--                                width: 100%;--}}
                    {{--                                height: auto;--}}
                    {{--                            }--}}

                    {{--                            .h_iframe-aparat_embed_frame iframe {--}}
                    {{--                                position: absolute;--}}
                    {{--                                top: 0;--}}
                    {{--                                left: 0;--}}
                    {{--                                width: 100%;--}}
                    {{--                                height: 100%;--}}
                    {{--                            }</style>--}}
                    {{--                        <div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span>--}}
                    {{--                            <iframe src="https://www.aparat.com/video/video/embed/videohash/5oFdI/vt/frame"--}}
                    {{--                                    allowFullScreen="true" webkitallowfullscreen="true"--}}
                    {{--                                    mozallowfullscreen="true"></iframe>--}}
                    {{--                        </div>--}}
                    <iframe class="video-player" title="video-player"
                            src="https://www.aparat.com/video/video/embed/videohash/5oFdI/vt/frame" autoplay playsinline
                            width="" height="" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- terms modal-->
    <div id="termsModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id=""></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body giftcard-terms">
                    <h4>Yes! You can receive a $200 Amazon gift card. <br/> First, you must identify a competitor that
                        can...</h4>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{url('assets/newFront/landing/img/card200.png')}}"/>
                        </div>
                        <div class="col-md-10">
                            <ul>
                                <li><i class="fas fa-check"></i> Match our platform, feature for feature,</li>
                                <li><i class="fas fa-check"></i> And demonstrate the same or better results,</li>
                                <li><i class="fas fa-check"></i> Plus quote a more competitive price.</li>
                            </ul>
                            <p>To Learn More and Compare, Start Here:</p>
                            <div class="popup-btn">
                                <button class="btn btn-primary orng-demo new-btn-mid" type="button"
                                        data-bs-toggle="modal" data-bs-target="#modal-get-started">Get a Platform
                                    Features Demo
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="popup-bee"><img src="{{url('assets/newFront/landing/img/popup-bee.png')}}"/></div>
            </div>
        </div>
    </div>
    <!-- \\ terms modal-->

    <!-- video modal-->
    <div id="videoModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="bg-transparent modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id=""></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body testimony-video">
                    <video width="100%" height="auto" controls>
                        <source src="{{url('assets/newFront/video/adib-introduction.mp4')}}" type="video/mp4">
                        <source src="{{url('assets/newFront/video/adib-introduction.mp4')}}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>

                    {{--                    <div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span>--}}
                    {{--                        <iframe src="https://www.aparat.com/video/video/embed/videohash/2ebtn/vt/frame?recom=none"--}}
                    {{--                                allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- \\ video modal-->


    <script type="text/javascript">
        $('.cookie_btn').click(function () {
            $('.cookie_msg').hide()
        });
    </script>

    <!-- begin olark code -->
    <!-- <script type="text/javascript" async> ;(function(o,l,a,r,k,y){if(o.olark)return; r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0]; y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r); y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)}; y.extend=function(i,j){y("extend",i,j)}; y.identify=function(i){y("identify",k.i=i)}; y.configure=function(i,j){y("configure",i,j);k.c[i]=j}; k=y._={s:[],t:[+new Date],c:{},l:a}; })(window,document,"static.olark.com/jsclient/loader.js"); -->
    <!-- /* custom configuration goes here (www.olark.com/documentation) */ -->
    <!-- olark.identify('2026-540-10-1482');</script> -->
    <!-- end olark code -->






    <iframe src="" name="frmRequestDemoSubmit" id="frmRequestDemoSubmit" sandbox="allow-scripts allow-top-navigation"
            style="display:none;height:0px;width:0px;"></iframe>
    <!-- Request Demo modal-->

    <div class="modal fade" id="modal-get-started" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header modal_header_form">
                    <h5 class="modal-title modal_form_heading" id=""> Get the Program Setup On Your Terms</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal_demoSbtMsg_2" align="middle" style="text-align:center;"></div>
                <form target="frmRequestDemoSubmit"
                      action="https://rewards.nextbee.com/clientfiles/1/messageBroadcaster.php?mailType=10"
                      name="modal_requestDemoForm" id="modal_requestDemoForm_2" method="post"
                      onSubmit="javascript: return verify_modal_form_input(null,2);"
                      class="nobottommargin">
                    <input id="modal_contactus_type" name="contactus_type" value="request_demo" type="hidden">
                    <input id="modal_list_id" name="list_id" value="7065" type="hidden">
                    <input name="supertags[contactus][company]" id="modal_company" class="input" value="PopupDemoForm"
                           type="hidden">
                    <input id="program_source" name="program_source" value="" type="hidden">
                    <div class="modal-body reqModel">
                        <div id="modal_formitem"></div>
                        <div id="modal_formbg">


                            <input id="modal_contactus_type" name="contactus_type" type="hidden" value="request_demo"/>
                            <input id="modal_list_id" name="list_id" type="hidden" value="7065"/>
                            <input type="hidden" name='supertags[contactus][company]' id='modal_company' class="input"
                                   value="PopupDemoForm"/>
                            <input id="program_source" name="program_source" type="hidden" value=""/>

                            <div class="row clearfix">
                                <div class="col-sm-8">
                                    <h3 class="font-body form_body_heading">Step 1 - Submit Requirements</h3>
                                </div>
                                <div class="col-sm-4">
                                    <div id="modal-get-started-package"><a href="tel:1-800-547-1618" class="phn">1-800-547-1618</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="contact_details[first_name]" data-hj-whitelist=""
                                               id="modal_first_name_2" value=""
                                               class="form-control required no-error-msg" placeholder="First Name*"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="contact_details[last_name]" data-hj-whitelist=""
                                               id="modal_last_name_2" value=""
                                               class="form-control required no-error-msg" placeholder="Last Name*"/>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="supertags[contactus][email]" data-hj-whitelist=""
                                               id="modal_email_id_2" value=""
                                               class="form-control required email no-error-msg"
                                               placeholder="Your Email*"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="supertags[contactus][phone]" data-hj-whitelist=""
                                               id="modal_phone_no_2" value="" class="form-control no-error-msg"
                                               placeholder="Your Phone*"/>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea type="text" name="supertags[contactus][message]" data-hj-whitelist=""
                                                  id="modal_req_details_2" value=""
                                                  class="form-control required no-error-msg"
                                                  placeholder="Requirement Details*"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-5 col-6">
                            <span class="step2">Step 2 - Schedule Appointment</span>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <button class="btn btn-default requestBtnGreen demo_sbt_btn_1"
                                        id="modal_get-started-form-submit" name="get-started-form-submit" type="submit"
                                        value="login">Next
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-get-credit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header modal_header_form">
                    <h5 class="modal-title modal_form_heading" id=""><span style="font-size:36px;"> Claim Your $25 credit </span><br>
                        <span style="font-size: 18px; font-weight: 400;">Hop on a quick demo of NextBee’s Platform, and get a $25 Amazon gift card.*</span>
                    </h5>

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal_demoSbtMsg_1" align="middle" style="text-align:center;"></div>
                <form target="frmRequestDemoSubmit"
                      action="https://rewards.nextbee.com/clientfiles/1/messageBroadcaster.php?mailType=10"
                      name="modal_requestDemoForm" id="modal_requestDemoForm_1" method="post"
                      onSubmit="javascript: return verify_modal_form_input(null,1);"
                      class="nobottommargin">
                    <input id="modal_contactus_type_1" name="contactus_type" value="request_demo" type="hidden">
                    <input id="modal_list_id_1" name="list_id" value="7065" type="hidden">
                    <input name="supertags[contactus][company]" id="modal_company_1" class="input" value="PopupDemoForm"
                           type="hidden">
                    <input id="program_source_1" name="program_source" value="" type="hidden">
                    <div class="modal-body reqModel">
                        <div id="modal_formitem_1"></div>
                        <div id="modal_formbg_1">


                            <input id="modal_contactus_type" name="contactus_type" type="hidden" value="request_demo"/>
                            <input id="modal_list_id" name="list_id" type="hidden" value="7065"/>
                            <input type="hidden" name='supertags[contactus][company]' id='modal_company' class="input"
                                   value="PopupDemoForm"/>
                            <input id="program_source" name="program_source" type="hidden" value=""/>

                            <!-- <div class="row clearfix"> -->
                            <!-- <div class="col-sm-8">	<h3 class="font-body form_body_heading">Step 1 - Submit Requirements</h3> </div>    -->
                            <!-- <div class="col-sm-4"><div id="modal-get-started-package"><a href="tel:1-800-547-1618" class="phn">1-800-547-1618</a></div></div> -->
                            <!-- </div> -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="contact_details[first_name]" data-hj-whitelist=""
                                               id="modal_first_name_1" value=""
                                               class="form-control required no-error-msg" placeholder="First Name*"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="contact_details[last_name]" data-hj-whitelist=""
                                               id="modal_last_name_1" value=""
                                               class="form-control required no-error-msg" placeholder="Last Name*"/>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="supertags[contactus][email]" data-hj-whitelist=""
                                               id="modal_email_id_1" value=""
                                               class="form-control required email no-error-msg"
                                               placeholder="Your Email*"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="supertags[contactus][phone]" data-hj-whitelist=""
                                               id="modal_phone_no_1" value="" class="form-control no-error-msg"
                                               placeholder="Your Phone*"/>
                                    </div>
                                </div>
                            </div>

                            <div class="clear"></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea type="text" name="supertags[contactus][message]" data-hj-whitelist=""
                                                  id="modal_req_details_1" value=""
                                                  class="form-control required no-error-msg"
                                                  placeholder="Any integration or module you'd like to learn more about?"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <span style="font-size:10px; color:#999;">*Credit offer valid only for individuals representing companies with an active DUNS identification number.</span>
                                </div>
                            </div>
                            <div class="clear"></div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-5 col-6">
                            <!-- <span class="step2">Step 2 - Schedule Appointment</span> -->
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="form-group">
                                <button class="btn btn-default requestBtnGreen demo_sbt_btn_2"
                                        id="modal_get-started-form-submit" name="get-started-form-submit" type="submit"
                                        value="login">Next
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
	Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
	--------------------------------------------------->


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt=""
                 src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1009250009/?guid=ON&amp;script=0"/>
        </div>
    </noscript>


    {{--    <script>--}}
    {{--        window.dataLayer = window.dataLayer || [];--}}

    {{--        function gtag() {--}}
    {{--            dataLayer.push(arguments);--}}
    {{--        }--}}
    {{--        gtag('js', new Date());--}}

    {{--        gtag('config', 'UA-4343716-1');--}}
    {{--    </script>--}}

@endsection


@section('scripts')



    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>--}}
    <script src="{{url('assets/newFront/landing/js/owl.carousel.js')}}"></script>
    <script src="{{url('assets/newFront/landing/js/owl.navigation.js')}}"></script>
    {{--    <script type="text/javascript" src="https://s3.amazonaws.com/nextbeeclients/nextbee/v1/request_demo.js"></script>--}}
    {{--    <script src="https://info.nextbee.com/landing/v9.4/assets/newFront/landing/js/nb_lp_tracker.js?v=2"></script>--}}
    {{--    <script src="https://kit.fontawesome.com/ad57bfdaf8.js" crossorigin="anonymous"></script>--}}
    <script src="{{url('assets/newFront/landing/js/custom.js?v').random_int(999,999)}}"></script>

    <script>
        $(document).ready(function () {
            // Gets the video src from the data-src on each button
            var videoSrc;
            $('.video-btn').click(function () {
                videoSrc = $(this).data("src");
            });

            // when the modal is opened autoplay it
            $('#myModal').on('shown.bs.modal', function (e) {
                // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
                $("#video").attr('src', videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
            })

            // stop playing the youtube video when I close the modal
            $('#myModal').on('hide.bs.modal', function (e) {
                // a poor man's stop video
                $("#video").attr('src', videoSrc);
            })

            // document ready
        });
    </script>
    {{--    <script type="text/javascript">--}}
    {{--        /* <![CDATA[ */--}}
    {{--        var google_conversion_id = 1009250009;--}}
    {{--        var google_custom_params = window.google_tag_params;--}}
    {{--        var google_remarketing_only = true;--}}
    {{--        /* ]]> */--}}
    {{--    </script>--}}
    {{--    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">--}}
    {{--    </script>--}}


    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 360475,
                hjsv: 5
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <style>
        [type=reset],
        [type=submit],
        button,
        html [type=button] {
            -webkit-appearance: inherit !important;
        }
    </style>
    <script>
        $(function () {
            //$('[data-bs-toggle="popover"]').popover()
            $("[data-bs-toggle=popover]").each(function (i, obj) {

                $(this).popover({
                    html: true,
                    content: function () {
                        var id = $(this).attr('id')
                        return $('#popover-content-' + id).html();
                    }
                });

            });
        })
    </script>
    <script>
        $(function () {
            $(window).scroll(function () {
                if ($(window).scrollTop() + $(window).height() > ($(document).height() - 50)) {
                    $(".rp-link").addClass("current");
                    $(".fp-link").removeClass("current");
                }
                var currentScroll = $(window).scrollTop();
                if (currentScroll >= 265) {
                    $('#nav').css({
                        position: 'fixed',
                        top: '200px'
                    });
                } else {
                    $('#nav').css({
                        position: 'absolute',
                        top: '50%'
                    });
                }
            });
        });
    </script>


@endsection


