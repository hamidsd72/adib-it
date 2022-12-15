@extends('layouts.front.master')

@section('styles')

    <style>
        #main {
            background: whitesmoke;
            overflow:hidden;
        }
        body {
            background: whitesmoke;
        }
    </style>
@endsection

@section('meta')
    <meta name="keywords" content=" طراحی سایت | سئو و بهینه سازی سایت افزایش رتبه در گوگل | پشتیبانی سایت ">
    <meta name="description"
          content="طراحی سایت اختصاصی با بهترین قیمت طراحی سایت و خدمات طراحی سایت فروشگاهی و شرکتی و خدمات سئو ، شرکت ادیب گستر"/>
    <meta property="og:title" content="طراحی سایت | سئو و بهینه سازی سایت افزایش رتبه در گوگل | پشتیبانی سایت"/>
    <meta property="og:description"
          content="طراحی سایت اختصاصی با بهترین قیمت طراحی سایت و خدمات طراحی سایت فروشگاهی و شرکتی و خدمات سئو ، شرکت ادیب گستر">
@endsection

@section('body')

{{--    @if(session()->has('message'))--}}
{{--        {{dd(session()->get('message'))}}--}}
{{--    @endif--}}
    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    @foreach($sliders as $key=>$item)
                        <div class="carousel-item  {{$key == 0 ? 'active' : ''}}">
                            <img class="w-100 h-auto" src="{{url($item->photo ? $item->photo->path : 'assets/newFront/img/hero-carousel/5.jpg')}}">
                            <div class="carousel-container">
                                <div class="container">

                                    @if($key == 1)

                                    <h4 class="animate__animated animate__fadeInUp h1 text-white">آنلاین</h4>
                                    <h2 class="animate__animated animate__fadeInDown font-thin mt-4 ">مارکتینگ</h2>
                                    <p class="animate__animated animate__fadeInUp text-space-2">راه حل ها</p>
                                    <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">
                                        درباره ما
                                    </a>
                                        @elseif($key== 2)
                                        <h2 class="animate__animated animate__fadeInUp font-thin">مدرن ترین</h2>
                                        <h2 class="animate__animated animate__fadeInDown font-normal">طراحی و مارکتینگ</h2>
                                        <h2 class="animate__animated animate__fadeInUp font-bold">با ما باشید</h2>
                                        <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">
                                            درباره ما
                                        </a>
                                        <a href="#portfolio" class="btn-outline scrollto animate__animated animate__fadeInUp">نمونه
                                            کارهای ما</a>
                                    @else
                                            <p class="animate__animated text-space-2 animate__bounceIn h4">به </p>
                                            <h2 class="animate__animated font-bold animate__backInLeft"> ادیب گستر عصر نوین</h2>
                                            <p class="animate__animated text-space-2 animate__bounceIn h4">خوش آمدید </p>
                                            <h1 class=" h3 animate__animated animate__zoomIn">
                                                <span class="h1 color-green-1 d-block">طراحی وب سایت</span>
                                                <span class="h1 color-green-2 d-block">فروشگاه آنلاین</span>
                                                <span class="h1 color-orange d-block">سئو و بهینه سازی رتبه سایت</span>
                                            </h1>
                                            <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">
                                                درباره ما
                                            </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

            </div>
        </div>
        <div class="flexslider-bottom  d-xl-block">

            <a href="#about" class="mouse-button animate__animated floating" deluminate_imagetype="png"></a>

            <a href="#about" class="d-none" id="mobile-scroll-icon">
                <i class=" bi bi-chevron-double-up animate__animated floating" deluminate_imagetype="png"></i>
            </a>

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="text-center">
                        <div class="text-center mb-5">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                        <h2 class="font-500  h2">
                            درباره ما
                        </h2>
                        <p class="paragraf">
                            شرکت ادیب گستر عصر نوین در زمینه امنیت شبکه - طراحی وب سایت معرفی و طراحی وب سایت فروشگاهی و
                            سئو و بهینه سازی سایت با دو شعبه فعال در تهران و استانبول ترکیه آماده ارائه مشاوره - گزارش و
                            اجرای پروژه و استارت آپ های شما میباشد. شرکت ادیب فعالیت حرفه ای خود را از سال ۱۳۸۰ آغاز
                            کرده و از سال ۱۳۹۵ شعبه استانبول ترکیه را نیز فعال کرده است و در این مدت فعالیت پروژه های
                            زیادی را به اجرا رسانده است .از برخی پروژه های انجام شده میتوان به همکاری با شهرداری تهران -
                            شرکت خدمات هوایی سامان - طراحی سایت و پورتال باشگاه مشتریان و سایت فروشگاهی شرکت داروسازی
                            کارن - طراحی سایت شرکت چینی مروارید - طراحی سایت فروشگاه اینترنتی کرم جی - طراحی سایت معرفی
                            شرکت زیبایی های جهانگردی و ... اشاره کرد. بعد از راه اندازی شعبه شرکت در شهر استانبول و در
                            کشور ترکیه پروژهای طراحی سایت در استانبول ترکیه و پروژه های بین المللی زیادی نیز انجام شده
                            است. همچنین سایت های زیادی هستند که بعد از همکاری با ما در زمینه سئو و بهینه سازی به صفحات
                            بالای گوگل رسیده اند .
                        </p>

                        {{--  <p class="paragraf">--}}
                        {{--                            شرکت ادیب گستر عصر نوین در دو بخش سخت افزار و نرم افزار فعالیت دارد این شرکت فعالیت حرفه ای--}}
                        {{--                            خود را از سال 1380 آغاز نمود و در مدت زمان اندکی در میان رقبا--}}
                        {{--                            خوش درخشید. دپارتمان تخصصی ادیب گستر عصر نوین با بیش از ۲۰ سال سابقه در زمینه های مختلف IT--}}
                        {{--                            نظیر طراحی سایت، پشتیبانی سایت و سئو ، طراحی اپلیکیشن های Android وIOS راه اندازی--}}
                        {{--                            و پشتیبانی شبکه، مفتخر است که همراهی مجموعه هایی همچون بانک ملت ، بانک اقتصاد نوین، خدمات--}}
                        {{--                            هوایی سامان ، هلدینگ دارویی کارن ، مجموعه نمایشگاه های ایران هلث، انجمن صنفی گردشگری،--}}
                        {{--                            انجمن صنفی تجهیزات پزشکی و بیش از ده ها مجموعه ی دولتی وخصوصی دیگر را در کارنامه ی خود دارد.--}}
                        {{--                            ارائه ی هریک از خدمات توسط یکی از بخش های متخصص دپارتمان سازماندهی و پوشش دهی و اجرا می--}}
                        {{--                            گردد.--}}
                        {{--                        </p>--}}


                        <div class="img-wrap text-center my-3">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                        <div>

                            <div>
                                <a href="{{ route('about-us') }}"
                                   class="btn-outline scrollto animate__animated animate__fadeInUp"> {{trans('sentence.home.view_more')}}</a>
                            </div>
                        </div>
                        <div class="img-wrap text-center my-3">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">


            <div class="container" data-aos="fade-up">

                <div class="row px-5 text-center">

                    <h2 class="font-500  h2 pt-4">
                        خدمات ما
                    </h2>

                @foreach($services as $key=>$value)
                    <!-- Item -->
                        <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{route('user-service-show',[app()->getLocale(),$value->slug]) }}">
                                <div class="icon">
                                    <img
                                            src="{{ $value->icon_hover?url($value->icon_hover):url('adib/icon_2.png') }}"
                                            alt="">
                                </div>
                                <h5 class="title text-center"><a
                                            href="{{route('user-service-show',[app()->getLocale(),$value->slug]) }}">{{$value->title}}</a>
                                </h5>
                                <p class="description"> {!! $value->short_text !!} </p>
                            </a>
                        </div>
                        <!-- End Item -->

                    @endforeach

                    <div class="text-center ">
                        <a href="{{route('user-service-list')}}"
                           class="p-4 btn-outline scrollto animate__animated animate__fadeInUp">مشاهده همه
                            خدمات</a>
                    </div>

                </div>

                <div class="text-center">
                    <img src="{{url('./assets/newFront/img/pink_line_big.png')}}" alt="">
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= process Section ======= -->
        <section id="process" class="ds position-relative process-part   s-parallax bg pb-5">
            <div class="container">
                <div class="text-center mb-5 sm-mb0">
                    <img src="{{url('./assets/newFront/img/step/white_line_big.png')}}" alt="">
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-12 col-lg-4">
                        <div class="step-left-part">
                            <h2 class="step-title">
                                <span class="color-main">01</span>استراتژی</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="step-center-part text-center">
                            <img src="{{url('./assets/newFront/img/step/step_img_1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="step-right-part">
                            <p class="step-text">ما رقابت و مخاطب هدف شما را مشخص می کنیم. کشف کنید چه چیزی در صنعت
                                آنلاین شما کار می کند، سپس وب سایت خود را بر اساس آن طراحی کنید.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center rast mb-5">
                    <div class="col-12 col-lg-4  order-lg-3">
                        <div class="step-left-part">
                            <h2 class="step-title color1">
                                <span class="color-main2">02</span>طراحی</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-lg-2">
                        <div class="step-center-part text-center">
                            <img src="{{url('./assets/newFront/img/step/step_img_2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-lg-1">
                        <div class="step-right-part ">
                            <p class="step-text">طرح رنگ، طرح بندی، نقشه سایت و سبک. ما نام تجاری شما را با یک شاهکار بی
                                نظیر که فقط برای شما ساخته شده است، زنده خواهیم کرد.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-5">
                    <div class="col-12 col-lg-4">
                        <div class="step-left-part part3">
                            <h2 class="step-title">
                                <span class="color-main3">03</span>توسعه</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="step-center-part text-center">
                            <img src="{{url('./assets/newFront/img/step/step_img_3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="step-right-part">
                            <p class="step-text">
                                ما ایده های شما را به بهترین شکل ممکن پیاده سازی میکنیم . پس از انتشار هر پروژه ممکن است
                                مواردی به ذهن شما تحت عنوان توسعه برسد که آن ها را نیز با هم بررسی و در نهایت پیاده سازی
                                خواهیم کرد . ما همراه شما برای سالیانه طولانی خواهیم بود
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center rast mb-5">
                    <div class="col-12 col-lg-4  order-lg-3">
                        <div class="step-left-part part4">
                            <h2 class="step-title color1">
                                <span class="color-main4">04</span>پشتیبانی</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-lg-2">
                        <div class="step-center-part text-center last">
                            <img src="{{url('./assets/newFront/img/step/step_img_4.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-lg-1">
                        <div class="step-right-part ">
                            <p class="step-text">
                                راه اندازی سایت پایان ماجرا نیست بلکه شروع یک رابطه بلند مدت با شرکت ادیب است. پس از
                                تولید و انتشار شما به راهنمایی و پشتیبانی نیاز خواهید داشت . تیم پشتیبانی ما ، با ۲۰ سال
                                سابقه در خدمات آنلاین، همه روزه حتی روزهای تعطیل و به صورت ۷/۲۴ آماده پاسخگویی به مسائل
                                و نیازهای شماست.
                            </p>
                        </div>
                    </div>
                </div>


                {{--                <div class="row align-items-center mb-5">--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-left-part">--}}
                {{--                            <h2 class="step-title">--}}
                {{--                                <span class="color-main">01</span>شروع فعالیت</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-center-part text-center">--}}
                {{--                            <img src="{{url('./assets/newFront/img/05.jpg')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-right-part">--}}
                {{--                            <p class="step-text">--}}
                {{--                                شرکت ادیب گستر عصر نوین فعالیت خود را از سال ۱۳۸۰ در زمینه طراحی نرم افزار و سخت افزار--}}
                {{--                                آغاز کرد و هم اکنون با دو دفتر در استانبول ترکیه و تهران و بیش از ۵۰ نفر پرسنل متخصص و--}}
                {{--                                دارا بودن بیش از ۳۵۰ قرارداد نگهداری و پشتیبانی یکى از خوشنام ترین برندها در میان رقبای--}}
                {{--                                خود در کشور می باشد.--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="row align-items-center rast mb-5">--}}
                {{--                    <div class="col-12 col-lg-4  order-lg-3">--}}
                {{--                        <div class="step-left-part">--}}
                {{--                            <h2 class="step-title color1">--}}
                {{--                                <span class="color-main2">02</span>مجوز های شرکت</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-2">--}}
                {{--                        <div class="step-center-part text-center">--}}
                {{--                            <img src="{{url('./assets/newFront/img/cert01.jpg')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-1">--}}
                {{--                        <div class="step-right-part ">--}}
                {{--                            <p class="step-text">--}}
                {{--                                از آنجا که کیفیت و تحویل به موقع خدمات از اهداف مجموعه ادیب بوده این شرکت با سابقه--}}
                {{--                                درخشان خود توانسته مجوز رتبه بندی شورای عالی انفورماتیک از سازمان برنامه و بودجه کشور و--}}
                {{--                                مجوز نظام صنفی رایانه ای تهران و مجوز فعالیت از اتحادیه صنف فناوران رایانه ای تهران را--}}
                {{--                                کسب نماید و دارای رضایت ۱۰۰ درصدی از مشتریان خود میباشد .--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="row align-items-center mb-5">--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-left-part part3">--}}
                {{--                            <h2 class="step-title">--}}
                {{--                                <span class="color-main3">03</span>واحد سخت افزار</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-center-part text-center">--}}
                {{--                            <img src="{{url('./assets/newFront/img/07.jpg')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-right-part">--}}
                {{--                            <p class="step-text">--}}
                {{--                                این واحد تخصص اجرای و راه اندازی و پشتیبانی انواع شبکه های کامپیوتری را دارد . راه اندازی انواع روترهای سیسکو و میکروتیک - مجازی سازی سرورها- ارائه بهترین راه کارهای بک آپ گیری و راه اندازی آنها و امنیت شبکه از دیگر توانایی های این تیم میباشد .--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}



                {{--                <div class="row align-items-center rast mb-5">--}}
                {{--                    <div class="col-12 col-lg-4  order-lg-3">--}}
                {{--                        <div class="step-left-part">--}}
                {{--                            <h2 class="step-title color1">--}}
                {{--                                <span class="color-main2">04 </span>واحد نرم افزار</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-2">--}}
                {{--                        <div class="step-center-part text-center">--}}
                {{--                            <img src="{{url('./assets/newFront/img/08.jpg')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-1">--}}
                {{--                        <div class="step-right-part ">--}}
                {{--                            <p class="step-text">--}}
                {{--                                شرکت ادیب گستر عصر نوین دارای یک تیم کامل تولید نرم افزارهای کاربردی ابری از قبیل  نرم افزار ارتباط با مشتری - باشگاه مشتریان و هر نرم افزار سفارشی - طراحی وب سایت های فروشگاهی و معرفی - انواع لندینگ پیج های مناسبتهای خاص میباشد .--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="row align-items-center mb-5">--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-left-part part3">--}}
                {{--                            <h2 class="step-title">--}}
                {{--                                <span class="color-main">05</span>آنچه ما را متمایز می کند</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-center-part text-center">--}}
                {{--                            <img src="{{url('./assets/newFront/img/02.jpg')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-right-part">--}}
                {{--                            <p class="step-text">--}}
                {{--                                واحد مشاوره و فروش شرکت ادیب با هدف ایجاد پل ارتباطی میان مشتریان و شرکت با نام صدای مشاور به طور رسمی کار خود را از مهر ماه 1384 آغاز کرده است . در این بخش کارشناسان فروش شرکت سوالات مشتریان در زمینه معرفی و انتخاب انواع خدمات شرکت و همچنین پیشنهاد راهکار مناسب برای مشکلات احتمالی هستند--}}
                {{--                                به منظور تسهیل ارتباط مخاطب با مشاوران امکان برقرای ارتباط به دو صورت آنلاین(واتس آپ - اینستاگرام و سایت رسمی شرکت ) و تلفنی وجود دارد.--}}

                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}






                {{--                <div class="row align-items-center rast mb-5">--}}
                {{--                    <div class="col-12 col-lg-4  order-lg-3">--}}
                {{--                        <div class="step-left-part">--}}
                {{--                            <h2 class="step-title color1">--}}
                {{--                                <span class="color-main2">06</span>سامانه ارتباط با مشتری</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-2">--}}
                {{--                        <div class="step-center-part text-center">--}}
                {{--                            <img src="{{url('./assets/newFront/img/04.jpg')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-1">--}}
                {{--                        <div class="step-right-part ">--}}
                {{--                            <p class="step-text">--}}
                {{--                                سیستم ارتباط با مشتریان شرکت ادیب گستر عصر نوین  در سال ۱۳۹۷ با هدف افزایش رضایت و وفاداری مشتریان راه اندازی شد و تا امروز بیش از ۲۵۰۰ عضو فعال دارد. مشتریان ادیب با عضویت در این سیستم می توانند از خدمات آنلاین شرکت  بهره مند شوند.--}}

                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--                <div class="row align-items-center mb-5">--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-left-part part3">--}}
                {{--                            <h2 class="step-title">--}}
                {{--                                <span class="color-main3">07</span>راه اندازی دفتر ترکیه</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-center-part text-center">--}}
                {{--                            <img src="{{url('./assets/newFront/img/03.jpg')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4">--}}
                {{--                        <div class="step-right-part">--}}
                {{--                            <p class="step-text">--}}
                {{--                                شرکت ادیب  به منظور ورود به بازارهای جهانی و انجام پروژه های برون مرزی از نمیه دوم سال ۱۳۹۹ فعالیت جدید خود را در کشور ترکیه و شهر بزرگ استانبول آغاز کرد .--}}

                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}




                {{--                <div class="row align-items-center rast mb-5">--}}
                {{--                    <div class="col-12 col-lg-4  order-lg-3">--}}
                {{--                        <div class="step-left-part part4">--}}
                {{--                            <h2 class="step-title color2">--}}
                {{--                                <span class="color-main">08</span>اخد نمایندگی  بیت دیفندر</h2>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-2">--}}
                {{--                        <div class="step-center-part text-center last">--}}
                {{--                            <img src="{{url('./assets/newFront/img/Adib Sertifika.png')}}" alt="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-lg-4 order-lg-1">--}}
                {{--                        <p class="step-text">--}}
                {{--                            در اواخر سال ۱۳۹۹ شرکت ادیب مفتخر به دریافت نمایندگی آنتی ویروس بیت دیفندر شده است .--}}
                {{--                        </p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}


                <div class="divider-10 d-block d-sm-none"></div>
                <div class="img-wrap text-center mb-5">
                    <img src="{{url('./assets/newFront/img/step/white_line_big.png')}}" alt="">
                </div>


                {{--                 data-bs-toggle="modal" data-bs-target="#website_analysis"--}}
                <div class="text-center  ">
                    <a data-bs-toggle="modal" data-bs-target="#website_analysis"
                       class="btn-get-started btn-default-center scrollto animate__animated animate__fadeInUp">
                        شروع همکاری
                    </a>
                </div>


            </div>
        </section><!-- End process Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="section-bg sm-mt-30">
            <div class="container" data-aos="fade-up">

                <div class="text-center">
                    <img src="{{url('./assets/newFront/img/pink_line_big.png')}}" alt="">
                </div>

                <div class="d-flex justify-content-center">
                    <a href="#"
                       class="btn-get-started scrollto mt-5 animate__animated animate__fadeInUp text-black h2">
                        نمونه کارهای ما</a>
                </div>


                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class=" col-lg-12">
                        <ul id="portfolio-flters">
                            <li class="filter-active">همه</li>
                            {{--                            @foreach($categories as $item)--}}
                            {{--                                <li data-filter=".filter-{{$item->id}}">{{$item->name}}</li>--}}
                            {{--                            @endforeach--}}

                            @foreach($categories as $item)
                                <li><a href="{{route('user-tem-cat' , [$locale , $item->slug])}}"
                                       class="text-black">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>


                <div class="row portfolio-container" id="portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="swiper portfolio-swiper">
                        <div class="swiper-wrapper">

                        @foreach($customers as $customer)

                            {{--                            @foreach($customer->cats as $item) filter-{{$item->category_id}} @endforeach--}}
                            {{--{{$customer->site?url($customer->site->path):'' }}--}}
                            <!-- Item -->
                                <div class="swiper-slide ">
                                    <div class="col-12 w-100 portfolio-item home px-2">
                                        <div class="portfolio-wrap radius-0">
                                            <figure>
                                                <a href="{{$customer->site?url($customer->site->path):'' }}" data-fancybox>
                                                    <img src="{{$customer->site?url($customer->site->path):'' }}"
                                                         class="radius-0"
                                                         alt="{{ $customer->title}}">
                                                </a>
                                            </figure>

                                            <div class="portfolio-info">
                                                <a class="text-black"
                                                   href="{{route('customer' , [$locale , $customer->slug])}}">
                                                    <h6> {{ $customer->title}}</h6>
{{--                                                    <p>{!! $customer->site_category !!}</p>--}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- End Item -->
                            @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>


                    <div class="text-center  ">

                        <a href="{{route('user-gallery')}}"
                           class="btn-outline scrollto animate__animated animate__fadeInUp my-4">
                            نمایش همه ی نمونه کارها
                        </a>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->


        <!-- ==== Team Section ===== -->
        <section id="features" class="features">


            <div class="d-flex justify-content-center">
                <a href="#"
                   class="btn-get-started scrollto mt-5 animate__animated animate__fadeInUp text-black h2">مدیران
                    شرکت</a>
            </div>
            <div class="container aos-init aos-animate mb-10" data-aos="fade-up">
                <div class="tab-content ">


                    @foreach ($team as $key=>$item)

                        <div class="tab-pane {{$key == 0 ? 'show active' : ''}} " id="tab-{{$key}}">
                            <div class="row gy-4">
                                <div class="order-2 order-lg-1 w-100 aos-init aos-animate mt-0" data-aos="fade-up"
                                     data-aos-delay="100">
{{--                                    <img src="{{url('assets/adib/new/images/amin_khansari2.jpeg')}}" class=""--}}
                                                                             <img src="{{url($item->photo?$item->photo->path:'')}}" class=""
                                         alt="{{$item->title}}">

                                    <div class="social-links d-md-flex">
                                        @if($item->instagram)
                                            <a href="{{$item->instagram}}" class="instagram"><i
                                                        class="bi bi-instagram "></i></a>
                                        @endif

                                        @if($item->whatsapp)
                                            <a href="{{$item->whatsapp}}" class="whatsapp"><i
                                                        class="bi bi-whatsapp"></i></a>
                                        @endif

                                        @if($item->linkedin)
                                            <a href="{{$item->linkedin}}" class="linkedin"><i
                                                        class="bi bi-linkedin"></i></a>
                                        @endif

                                        @if($item->email)
                                            <a href="mailto:{{$item->email}}" class="email"><i
                                                        class="bi bi-envelope"></i></a>
                                        @endif


                                    </div>


                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                <ul class="nav nav-tabs row d-flex flex-column">

                    @foreach ($team as $key=>$item)

                        <li class="nav-item col-6 col-md-4 col-lg-2">
                            <a class="nav-link {{$key == 0 ? 'show active' : ''}}" data-bs-toggle="tab"
                               data-bs-target="#tab-{{$key}}">
                                {{--                                <i class="bi bi-check2-circle "></i>--}}
                                <h4>{{$item->name}}</h4>
                                <span>{{$item->title}}</span>
                            </a>
                        </li>

                    @endforeach

                </ul>
            </div>
        </section>
        <!-- ======================= -->

        <!-- ======= Marketing Section ======= -->
        <section id="Marketing">
            <div class="corner corner-light d-none"></div>
            <div class="container" data-aos="fade-up">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('about-us',$locale )}}#about-us-team"
                               class="mt-5 btn-get-started scrollto animate__animated animate__fadeInUp text-center">
                                {{trans('sentence.home.showAllTeam')}}
                            </a>
                        </div>
                        <div class="text-center mb-5  sm-mb0">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                        <h2 class="font-500 mt-2 h2">
                            مقالات
                        </h2>
                        <p>
                            آنلاین شدن آسان است. موفقیت آنلاین داستان متفاوتی است. این روزها برای متمایز شدن به چیزی بیش
                            از
                            یک وب سایت زیبا نیاز دارید.
                            <strong>راه‌حل‌های بازاریابی آنلاین.</strong> طراحی وب مبتنی بر تبدیل همراه با یک طرح
                            بازاریابی
                            منجر به تولید، موفقیت آنلاین شما اجتناب‌ناپذیر است.
                        </p>
                        <div class="img-wrap text-center my-3">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                    </div>
                </div>


                {{--                <div class="row">--}}

                {{--                    <div class="col-lg-4 col-md-6 p-3">--}}
                {{--                        <div class="member" data-aos="fade-up" data-aos-delay="100">--}}
                {{--                            <img src="assets/img/book/book-1.png" class="w-100 img-fluid" alt="">--}}
                {{--                            <div class="member-info book-1">--}}
                {{--                                <div class="member-info-content">--}}
                {{--                                    <h4>ابزارهای تجارت: بازاریابی مدرن</h4>--}}
                {{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>--}}
                {{--                                    <a href="#">خرید کن!</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="col-lg-4 col-md-6 p-3">--}}
                {{--                        <div class="member" data-aos="fade-up" data-aos-delay="200">--}}
                {{--                            <img src="assets/img/book/book-2.png" class="w-100 img-fluid" alt="">--}}
                {{--                            <div class="member-info book-2">--}}
                {{--                                <div class="member-info-content">--}}
                {{--                                    <h4>ابزارهای تجارت: بازاریابی مدرن</h4>--}}
                {{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>--}}
                {{--                                    <a href="#">خرید کن!</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="col-lg-4 col-md-6 p-3">--}}
                {{--                        <div class="member" data-aos="fade-up" data-aos-delay="300">--}}
                {{--                            <img src="assets/img/book/book-3.png" class="w-100 img-fluid" alt="">--}}
                {{--                            <div class="member-info book-3">--}}
                {{--                                <div class="member-info-content">--}}
                {{--                                    <h4>ابزارهای تجارت: بازاریابی مدرن</h4>--}}
                {{--                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>--}}
                {{--                                    <a href="#">خرید کن!</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                </div>--}}


                <div class="row " id="home-blog">

                    <div class="swiper article-swiper">
                        <div class="swiper-wrapper">

                            @foreach($article as $row)

                                <div class="swiper-slide "
                                     onclick="location.href='{{ route('user-article-show',[$locale , $row->slug])}}';">

                                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                                        <img src="{{ $row->photo ? url($row->photo->path) : '' }}"
                                             class="w-100 img-fluid"
                                             alt="{{ $row->title }}">
                                        <div class="member-info book-1">
                                            <div class="member-info-content">
                                                <h4 class="mt-4">{{ $row->title }} </h4>
                                                <p class="mb-5 mt-3 text-white">{!! substr($row->short_text , 0 , 150) !!} ...</p>
                                                <a href="{{ route('user-article-show',[$locale , $row->slug])}}"
                                                   class="bg-main-color rounded-pill text-white h6 py-1 px-3">{{trans('sentence.home.view')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                    {{--                    <div class="swiper article-swiper">--}}
                    {{--                        <div class="swiper-wrapper">--}}

                    {{--                            @foreach($article as $row)--}}
                    {{--                                <div class="swiper-slide ">--}}

                    {{--                                    <div class="item animated article-item card" data-animation="rollIn"--}}
                    {{--                                         data-animation-delay="0">--}}
                    {{--                                        <img src="{{ $row->home ? url($row->home) : '' }}" alt="{{ $row->title }}"/>--}}
                    {{--                                        <h5>{{ $row->title }} </h5>--}}
                    {{--                                        <p class="px-3">{!! substr($row->short_text , 0 , 150) !!}...</p>--}}
                    {{--                                        <div class="blog-load-more">--}}
                    {{--                                            <a class="load-more btn mb-3 w-50 btn-outline py-3"--}}
                    {{--                                               href="{{ route('user-article-show',[$locale , $row->slug])}}">{{trans('sentence.home.view')}} </a>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            @endforeach--}}

                    {{--                        </div>--}}
                    {{--                        <div class="swiper-button-next"></div>--}}
                    {{--                        <div class="swiper-button-prev"></div>--}}
                    {{--                        <div class="swiper-pagination"></div>--}}
                    {{--                    </div>--}}

                </div>

                <div class='text-center'>
                    <a href="{{route('user-article-list')}}"
                       class="btn-outline scrollto animate__animated animate__fadeInUp my-4">
                        نمایش همه ی مقاله ها
                    </a>
                </div>

                <div class="text-center">
                    <div class="text-center mb-3">
                        <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row" id="comments">

                    <h2 class="font-500 mt-2 h2 text-center">
                        مشتریان ما
                    </h2>

                    <div class="swiper comment-swiper">
                        <div class="swiper-wrapper">

                        @foreach($customer_icon as $val)
                            @if($val->photo)

                                <!-- Slide  -->
                                    <div class="swiper-slide">

                                        <a href="{{ 'http://'.str_replace(['http://','https://'],'',$val->url)}}"
                                           data-aos="fade-up" data-aos-delay="200">

                                            <div class="media">
                                                <img src="{{ $val->photo->path }}" alt="{{$val->title}}">
                                            </div>

                                            <div class="content">
                                                <p>{{$val->title}}</p>
                                            </div>

                                        </a>
                                    </div>
                                    <!-- End Slide 1 -->
                                @endif
                            @endforeach


                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>


                <div class="text-center mb-5 sm-mb10 sm-d-none">
                    <div class="text-center">
                        <img src="{{url('./assets/newFront/img/step/white_line_big.png')}}" alt="">
                    </div>
                </div>

                <div class="news-swiper swiper" data-aos="fade-up" data-aos-delay="100">


                    <h2 class="font-500 h2 text-center text-white ">
                        اخبار
                    </h2>

                    <div class="swiper-wrapper">

                        @foreach($news1 as $key=>$item)
                            <div class="swiper-slide news-slider">

                                <div class="swiper-slide ">
                                    <div class=" animated news-item " data-animation="rollIn"
                                         data-animation-delay="0">
                                        <img src="{{ $item->home ? url($item->home) : '' }}" alt="{{ $item->title }}"/>

                                        <div class="body">
                                            <h5 class="font-bold pt-3 text-black">{{ $item->title }} </h5>
                                            <p>{!! str_limit($item->short_text,78) !!}...</p>
                                            <div class="news-load-more">
                                                <a class="load-more btn mb-2 w-50 text-main-color"
                                                   href="{{route('user-show-news1',[app()->getLocale(),$item->slug])}}">مشاهده
                                                    بیشتر...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>


                <div class='text-center'>
                    <a href="{{route('user-news-list1')}}"
                       class="btn-outline hover-white text-main-color scrollto animate__animated animate__fadeInUp my-4">
                        نمایش همه ی اخبار
                    </a>
                </div>

            </div>

            {{-- <a href="#" class="btn-arrow-up scrollto animate__animated animate__fadeInUp "><i class="bi bi-arrow-up-short"></i></a> --}}

        </section><!-- End Testimonials Section -->

        <!-- ======= Skills Section ======= -->

        <section id="skills">
            <div class="d-flex justify-content-center position-relative">
                <a href="#testimonials"
                   class="btn-get-started scrollto animate__animated animate__fadeInUp text-center mt-4">
                    <i class="bi bi-chevron-up"></i>
                </a>
            </div>
            <div class="container" data-aos="fade-up">

                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="text-center">
                        <div class="text-center mb-4">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                        <h2 class="font-500 mt-2 mb-4 h2">مشاوره رایگان طراحی سایت و سئو</h2>
                        <p>
                            وضعیت وب سایت شما در نتایج جستجو و آنالیز سئو سایت در موتورهای جستجو اهمیت زیادی دارد. سایت
                            شما باید از چندین وجه کنترل شود . رتبه سایت درگوگل، نحوه رفتار کاربران هنگام بازدید از سایت
                            و داده هایی که از جستجوی گوگل و آنالیتیکس به دست می آید .

                            ما به صورت کاملا رایگان سئو سایت شما را بررسی میکنیم و آنالیز سئو سایت را آماده خواهیم کرد .
                            با پر کردن فرم زیر از وضعیت سئو سایت خود با خبر شوید ، ضمنا شرکت ادیب آماده انجام سئو سایت
                            ها بر اساس اصول حرفه ای سئو با شرایط ویژه است.
                        </p>
                        <div class="img-wrap text-center my-3">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                        <div>
                            <a href="{{route('order')}}"
                               class="btn-outline scrollto animate__animated animate__tada animate__repeat-3 animate__delay-5s">
                                مشاوره رایگان طراحی سایت و سئو
                            </a>
                        </div>
                        <div class="img-wrap text-center mt-3">
                            <img src="{{url('./assets/newFront/img/vertical_line.png')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg position-relative">
            <div class="text-center mb-3 mt-5">
                <img src="{{url('./assets/newFront/img/dark_line_short.png')}}" alt="">
            </div>
            <div class="container" data-aos="fade-up">
                @include('layouts.front.partials._contact_items')
            </div>
            <div class="text-center">
                <img src="{{url('assets/newFront/img/dark_line_short.png')}}" alt="">
            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->


    <!-- Modal -->
    <div class="modal modal-fancy fade" id="website_analysis" tabindex="-1" aria-labelledby="website_analysisLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form class="modal-content" action="{{route('order_insert',app()->getLocale())}}" method="post"
                  id="contact-form">
                {{csrf_field()}}

                <div class="modal-header">
                    <h5 class="modal-title" id="website_analysisLabel">درخواست همکاری</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <div class="row" style="direction: rtl;">

                        <div class="alert small px-2 py-1 alert-light" role="alert">
                            برای شروع همکاری فرم زیر را تکمیل کنید
                        </div>

                        <div class="col-md-6 col-sm-6 mb-1">
                            <label for="tele">
                                نوع درخواست:
                            </label>
                            <select name="product" class="selectpicker form-control pt-2">
                                @foreach($product as $val)
                                    <option value="{{$val->id}}" id="{{$val->id}}">{{$val->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 mb-1">
                            <label for="name">
                                نام و نام خانوادگی:
                            </label>
                            <input type="text" name="name" class="form-control" id="name" required="">
                        </div>
                    </div>
{{--                    <div class="row" dir="rtl">--}}
{{--                        <div class="col-md-6 col-sm-6 mb-1">--}}
{{--                            <label for="city">--}}
{{--                                شهر:--}}
{{--                            </label>--}}
{{--                            <input type="text" name="city" class="form-control" id="city">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 col-sm-6  mb-1">--}}
{{--                            <label for="telephone">--}}
{{--                                شماره تلفن:--}}
{{--                            </label>--}}
{{--                            <input type="number" name="telephone" class="form-control" id="telephone"--}}
{{--                                   required="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row" dir="rtl">
                        <div class="col-md-6 col-sm-6 mb-1">
                            <label for="mobile">
                                شماره موبایل:
                            </label>
                            <input type="number" name="mobile" class="form-control" id="mobile" required="">
                        </div>
                        <div class="col-md-6 col-sm-6" dir="rtl">
                            <label for="address">
                                آدرس وب سایت:
                            </label>
                            <input type="text" name="address" class="form-control" id="address" required="">
                        </div>
{{--                        <div class="col-md-6 col-sm-6 mb-1">--}}
{{--                            <label for="company">--}}
{{--                                نام شرکت:--}}
{{--                            </label>--}}
{{--                            <input type="text" name="company" class="form-control" id="company" required="">--}}
{{--                        </div>--}}
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-gray" data-bs-dismiss="modal">بستن</button>
                    <button type="submit" class="btn-gr btn-gr-pink">ارسال</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('scripts') @endsection

{{--@section('scripts')--}}
{{--<script >--}}
{{--    console.log('test')--}}
{{--   $(document).ready(function(){--}}
{{--       console.log('first')--}}

{{--       $('#website_analysis').modal('toggle');--}}
{{--   })--}}

{{--</script>--}}
{{--@endsection--}}