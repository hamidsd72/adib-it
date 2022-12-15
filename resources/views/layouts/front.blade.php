<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" prefix="og:http://ogp.me/" itemscope="itemscope"
      itemtype="http://schema.org/WebPage">
<head>
    <title>طراحی سایت | طراحی فروشگاه اینترنتی | شرکت ادیب </title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    {{--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>--}}
    <meta name="viewport" content="initial-scale=0, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="base-url" content="{{ url('/') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/revolution.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front.css') }}"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "adib",
            "url": "https://adib-it.com/",
            "logo": "https://bwt.ir/lib/assets/img/logo-logo.png",
          