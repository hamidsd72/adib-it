@php $locale = session()->get('locale'); @endphp

<html lang="{{ app()->getLocale() }}" dir="rtl" prefix="og:http://ogp.me/" itemscope="itemscope"
      itemtype="http://schema.org/WebPage">

<head>
    <meta charset="UTF8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="base-url" content="{{ url('/') }}"/>

    <title> @yield('title')
        {{ $titleSeo }}
    </title>
    @yield('meta')

    @include('layouts.front._seo')

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicons -->
    <link href="{{url('assets/newFront/img/logo.png')}}" rel="icon">
    <link href="{{url('assets/newFront/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('assets/newFront/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/newFront/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/newFront/vendor/bootstrap/css/bootstrap.rtl.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/newFront/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/newFront/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/newFront/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('assets/newFront/css/style-rtl.css'.'?v'.random_int(122,1000))}}" rel="stylesheet">
    <link href="{{url('assets/newFront/css/custom.css'.'?v'.random_int(122,1000))}}" rel="stylesheet">
    <link href="{{url('assets/newFront/css/response.css'.'?v'.random_int(122,1000))}}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>



    <style>
        #about p.paragraf {
            text-align: justify;
        }

        @media only screen and (min-width: 992px) {

            #about {
                padding: 40px 0px 0px 0px !important;
            }

            #footer .nav-fot {
                position: relative;
                top: -110px;
            }

            #footer .footer-top {
                margin-bottom: -40px !important;
            }
        }

        @media only screen and (max-width: 640px) {
            #footer .footer-top .footer-contact {
                margin-bottom: 0 !important;
            }
        }

        #footer .fot-nav-item {
            margin: 10px 0 6px;
        }


        #portfolio-container {
            overflow: unset !important;
        }

        #skills .btn-get-started {
            padding: 22px !important;
        }
        .current-language-drop img.flag
        {
            width: 30px!important;
        }
        .current-language-drop ul{
            min-width: unset;
        }
    </style>

    @yield('styles')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133848856-1"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'UA-133848856-1');
        </script>


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12  d-flex align-items-center justify-content-between">
                {{--                <h1 class="logo"><a href="index.html">ADIB-IT</a></h1>d--}}

                {{--                <div class="sticky-support-btn">--}}

                {{--                    <a href="https://support.adib-it.com" class="btn btn-danger border-0">--}}
                {{--                        <i class="bi bi-gear"></i>--}}
                {{--                        <span class="text-white"> @lang('sentence.menu.support')</span>--}}
                {{--                    </a>--}}

                {{--                </div>--}}

                <a href="{{route('user-home')}}" class="logo ms-4">
                    <img src="{{url('assets/newFront/img/logo.png')}}" alt="adib logo" class="img-fluid">
                    <span>ادیب گستر عصر نوین</span>
                </a>


                <nav id="navbar" class="navbar pe-3">
                    <ul>
                        <div class="d-lg-none">
                            <div class="social-links d-flex justify-content-center ">
                                <a href="{{url('/')}}" class="px-1"><img src="{{locale_flag('fa')}}"
                                                                         alt="fa"></a>
                                <a href="https://adib.com.tr/ar" class="px-1"><img
                                            src="{{locale_flag('ar')}}" alt="ar"></a>
                                <a href="https://adib.com.tr/tr" class="px-1"><img
                                            src="{{locale_flag('tr')}}" alt="tr"></a>
                                <a href="https://adib.com.tr/en" class="px-1"><img
                                            src="{{locale_flag('en')}}" alt="en"></a>
                            </div>

                        </div>

                        <li><a class="nav-link   {{request()->route()->getName() == 'user-home' ? 'active' : ''}} "
                               href="{{route('user-home')}}">خانه</a></li>


                        <li class="dropdown ">
                            <a href="{{route('user-service-list')}}"
                               onclick="location.href='{{route('user-service-list')}}';"
                               class=" {{in_array(request()->route()->getName() , [ 'user-service-list','user-service-show'])  ? 'active' : ''}} ">خدمات</a>
                            @if($services->count() > 1 )
                                <ul>

                                    @foreach($services->take(8) as $item)
                                        <li>
                                            <a href="{{route('user-service-show',[$locale,$item->slug]) }}">{{$item->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                        </li>

                        <li class="dropdown ">
                            <a href="{{route('user-gallery')}}" onclick="location.href='{{route('user-gallery')}}';"
                               class=" {{in_array(request()->route()->getName() , [ 'user-tem-cat','user-gallery','customer'])  ? 'active' : ''}} ">نمونه
                                کارها</a>
                            <ul>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'طراحی-سایت-فروشگاهی-و-ثبت-سفارش']) }}">طراحی
                                        سایت فروشگاهی </a>
                                </li>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'طراحی-سایت-پزشکی-و-پیراپزشکی']) }}">طراحی
                                        سایت پزشکی </a>
                                </li>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'طراحی-سایت-شرکتی']) }}">طراحی سایت
                                        شرکتی </a>
                                </li>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'طراحی-سایت-صنعتی']) }}">طراحی سایت
                                        صنعتی </a>
                                </li>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'سایت-های-وکلا']) }}">طراحی سایت وکلا </a>
                                </li>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'طراحی-سایت-خدماتی']) }}">طراحی سایت
                                        خدماتی </a>
                                </li>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'املاک-و-مستغلات']) }}">طراحی سایت املاک و
                                        مستغلات </a>
                                </li>
                                <li>
                                    <a href="{{route('user-tem-cat',[$locale,'گردشگری']) }}">طراحی سایت گردشگری </a>
                                </li>
                            </ul>

                        </li>

                        <li>
                            <a class="nav-link  {{ in_array(request()->route()->getName(),['our-customer-list','customer.show']) ? 'active' : ''}} "
                               href="{{route('our-customer-list')}}">مشتریان ما</a></li>
                        <li>
                            <a class="nav-link {{ in_array(request()->route()->getName() , ['user-article-list','user-article-show'])   ? 'active' : '' }}  "
                               href="{{route('user-article-list')}}">بلاگ</a></li>
                        <li>
                            <a class="nav-link {{in_array(request()->route()->getName() , ['user-news-list1','user-show-news1'])  ? 'active' : ''}}  "
                               href="{{route('user-news-list1')}}">اخبار</a></li>
                        <li><a class="nav-link   {{request()->route()->getName() == 'about-us' ? 'active' : ''}} "
                               href="{{route('about-us')}}">درباره ما</a></li>

                        <li><a class="nav-link  {{request()->route()->getName() == 'user-contact' ? 'active' : ''}}  "
                               href="{{route('user-contact')}}">تماس با ما</a></li>

                        <li>
                            <a class="nav-link  {{request()->route()->getName() == 'job-form-index' ? 'active' : ''}}  "
                               href="{{route('job-form-index')}}">استخدام</a></li>

                        <li><a class="nav-link last {{request()->route()->getName() == 'order' ? 'active' : ''}}  "
                               href="{{route('order')}}">مشاوره رایگان</a></li>
                    </ul>


                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

                <div class="" id="support-item">
                    <a href="https://support.adib-it.com" class="btn text-white float-end mt-2">
                        <i class="bi bi-gear"></i>
                        <span class="text-white">@lang('sentence.menu.support')</span>
                    </a>

                    <div class="d-none d-lg-block float-end">
                        <div class="dropdown current-language-drop">
                            <button class="btn text-white dropdown-toggle" type="button" id="current-language-dropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{locale_flag()}}" class="flag" alt="{{locale()}}">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="current-language-dropdown">
                                <li>
                                    <a class="dropdown-item" href="{{url('/')}}">
                                        <img src="{{locale_flag('fa')}}" class="flag" alt="{{locale()}}">
{{--                                        <span>@lang('sentence.menu.languages.fa')</span>--}}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://adib.com.tr/ar">
                                        <img src="{{locale_flag('ar')}}" class="flag" alt="{{locale()}}">
{{--                                        <span>@lang('sentence.menu.languages.ar')</span>--}}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://adib.com.tr/tr">
                                        <img src="{{locale_flag('tr')}}" class="flag" alt="{{locale()}}">
{{--                                        <span>@lang('sentence.menu.languages.ar')</span>--}}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://adib.com.tr/en">
                                        <img src="{{locale_flag('en')}}" class="flag" alt="{{locale()}}">
{{--                                        <span>@lang('sentence.menu.languages.en')</span>--}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</header><!-- End Header -->

@yield('body')
<!-- ======= Footer ======= -->

<div class="text-center first-logo">
    <img class="img" src="{{url('assets/newFront/img/logo.png')}}" alt="">
</div>

<footer id="footer">


    <div class="footer-top pb-0">

        <div class="container">

            <div class="row">

                <div class="footer-contact mt-5 d-flex justify-content-center flex-column text-center">
                    {{-- <div class="d-flex justify-content-center footer-logo">
                        <img   src="{{url('assets/newFront/img/logo.png')}}" alt="">
                    </div> --}}

                    <h2 class="font-500 mb-4 h2 text-white text-center">ادیب گستر عصر نوین</h2>

                    <div class="social-links d-flex justify-content-center">
                        <a href="https://twitter.com/Adib_IT_Group"><i class="bi bi-twitter twitter"></i></a>
                        <a href="https://t.me/Adibit"><i class="bi bi-telegram telegram"></i></a>
                        <a href="https://instagram.com/adib_group?utm_medium=copy_link"><i
                                    class="bi bi-instagram instagram"></i></a>
                        <a href="https://www.linkedin.com/in/adib-it-890926173"><i class="bi bi-linkedin linkedin"></i></a>
                        <a style="display: inline-flex;justify-content: center;align-items: center"
                           href="https://www.aparat.com/adibwebdesign"><i class="bi bi-youtube youtube"></i></a>
                        <a style="display: inline-flex;justify-content: center;align-items: center"
                           href="https://www.pinterest.com/adibitc"><i class="bi bi-pinterest pinterest"></i></a>

                    </div>


                    <br>
                    <a class="text-white hover small my-3"
                       href="{{route('landing.design-website','fa')}}">
                        طراحی سایت در شرکت ادیب
                    </a>
                    <a class="text-white hover small my-3"
                       href="{{route('webdesignde','fa')}}">
                        طراحی سایت در آلمان
                    </a>
                    <a class="text-white hover small my-3"
                       href="{{route('webdesigntr','fa')}}">
                        طراحی سایت در ترکیه
                    </a>

                    @foreach (\App\Models\Page::where('status','active')->get(['id','title']) as $item)
                        @if ($item->contents()->count())
                            <a class="text-white hover small my-3" href="{{ route('landing.page.show',['fa',$item->id]) }}">{{$item->title}}</a>
                        @endif
                    @endforeach
                </div>

                <div class="nav-fot col-6 text-lg-center right">
                    <h3 class="text-main-color" onclick="location.href='{{route('user-service-list')}}';">خدمات</h3>

                    @if($services->count() > 1 )
                        @foreach($services->take(7) as $item)
                            <div class="fot-nav-item">
                                <a class="text-white hover small"
                                   href="{{route('user-service-show',[$locale,$item->slug])}}">
                                    {{$item->title}}
                                </a>
                            </div>
                        @endforeach
                    @endif


                </div>
                <div class="nav-fot col-6 text-lg-center left">
                    <h3 class="text-main-color" onclick="location.href='{{route('user-gallery')}}';">نمونه کارها</h3>

                    <div class="fot-nav-item">
                        <a class="text-white"
                           href="{{route('user-tem-cat',[$locale,'طراحی-سایت-فروشگاهی-و-ثبت-سفارش']) }}">طراحی
                            سایت فروشگاهی </a>
                    </div>
                    <div class="fot-nav-item">
                        <a class="text-white"
                           href="{{route('user-tem-cat',[$locale,'طراحی-سایت-پزشکی-و-پیراپزشکی']) }}">طراحی
                            سایت پزشکی </a>
                    </div>
                    <div class="fot-nav-item">
                        <a class="text-white" href="{{route('user-tem-cat',[$locale,'املاک-و-مستغلات']) }}">طراحی سایت
                            املاک و
                            مستغلات </a>
                    </div>
                    <div class="fot-nav-item">
                        <a class="text-white" href="{{route('user-tem-cat',[$locale,'طراحی-سایت-شرکتی']) }}">طراحی سایت
                            شرکتی </a>
                    </div>
                    <div class="fot-nav-item">
                        <a class="text-white" href="{{route('user-tem-cat',[$locale,'طراحی-سایت-صنعتی']) }}">طراحی سایت
                            صنعتی </a>
                    </div>

                    <div class="fot-nav-item">
                        <a class="text-white" href="{{route('user-tem-cat',[$locale,'طراحی-سایت-خدماتی']) }}">طراحی سایت
                            خدماتی </a>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <div class=" footer-bottom">
        <div class="copyright">
            &copy; Copyright <strong>ADIB-IT</strong>. All Rights Reserved
        </div>
        {{-- <div class="credits">
            Designed by <a href="https://adib-it.com/">adib-it</a>
        </div> --}}
    </div>
</footer>
<!-- End Footer -->

<a href="https://wa.me/+905317677479" target="_blank" rel="noreferrer" class="connect-to-whatsapp d-flex align-items-center justify-content-center">
    <i class="bi bi-whatsapp whatsapp"></i></a>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
<!-- Uncomment below i you want to use a preloader -->
{{-- <div id="preloader">--}}
{{--     <div id="img">--}}
{{-- </div>--}}
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SPRPTP3X8N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-SPRPTP3X8N');
</script>

<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{url('assets/newFront/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{url('assets/newFront/vendor/aos/aos.js')}}"></script>
<script src="{{url('assets/newFront/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/newFront/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('assets/newFront/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('assets/newFront/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('assets/newFront/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{url('assets/newFront/js/main.js').'?v'.random_int(122,1000)}}"></script>
<script src="{{url('assets/newFront/js/custom.js').'?v'.random_int(122,1000)}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    @if(session()->has('err_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "ناموفق",
            text: "{{ session('err_message') }}",
            icon: "warning",
            timer: 6000,
            timerProgressBar: true,
        })
    });
    @endif
    @if(session()->has('flash_message'))
    $(document).ready(function () {
        Swal.fire({
            title: "موفق",
            text: "{{ session('flash_message') }}",
            icon: "success",
            timer: 6000,
            timerProgressBar: true,
        })
    })
    ;@endif
    @if (count($errors) > 0)
    $(document).ready(function () {
        Swal.fire({
            title: "ناموفق",
            icon: "warning",
            html:
                    @foreach ($errors->all() as $key => $error)
                        '<p class="text-right mt-2 ml-5" dir="rtl"> {{$key+1}} : ' +
                '{{ $error }}' +
                '</p>' +
                    @endforeach
                        '<p class="text-right mt-2 ml-5" dir="rtl">' +
                '</p>',
            timer: parseInt('{{count($errors)}}') * 1500,
            timerProgressBar: true,
        })
    });
    @endif
</script>

@yield('scripts')


</body>

</html>
