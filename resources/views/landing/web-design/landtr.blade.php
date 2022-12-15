@extends('layouts.front.master')

@section('meta')@endsection

@section('styles')

    <link rel="stylesheet" href="/assets/newFront/landing/css/contact.css">
    <link rel="stylesheet" href="/assets/newFront/landing/css/landing.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        h1, h2, h3, h4, h5, h6, button,a {
            font-family: 'IRANSans',sans-serif!important;
        }
        .wpresidence_button:hover {
            border-color: #cbb26a;
            background-color: transparent;
        }
        .comment-form #submit:hover, .wpresidence_button:hover {
            text-decoration: none;
            background-color: transparent;
            background-position: left bottom;
            color: #cbb26a;
            border-color: #cbb26a;
            transition: all 300ms ease;
            webkit-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            cursor: pointer;
            color: #fff !important;
        }

        .wpresidence_button {
            border-radius: 5px;
            text-shadow: none;
            margin-bottom: 15px;
            border-radius: 0;
            text-transform: capitalize;
            padding: 6px 34px;
            border: 1px solid;
            border-top-color: currentcolor;
            border-right-color: currentcolor;
            border-bottom-color: currentcolor;
            border-left-color: currentcolor;
            border-top-color: currentcolor;
            border-right-color: currentcolor;
            border-bottom-color: currentcolor;
            border-left-color: currentcolor;
            line-height: 2;
            background-image: -webkit-gradient(linear,left top,right top,color-stop(50%,transparent),color-stop(50%,#fff));
            background-size: 200% 100%;
            background-position: right bottom;
            display: inline-block;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            border-radius: 3px;
            width: 100%;
            color: #fff;
            background-color: #cbb26a !important;
        }
        .wpcf7 button[type="submit"] {
            color: #cbb26a;
            background-color: #cbb26a !important;
            border-color: #cbb26a !important;
        }
    </style>
@endsection

@section('body')
    <section class="slider-top">
        <div class="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" ></li>
                    <li data-target="#myCarousel" data-slide-to="3" ></li>
                    {{--                        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>--}}
                    {{--                        <li data-target="#myCarousel" data-slide-to="3" class="active"></li>--}}
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <h2 class="text-slider" style="color: #34e1eb;">طراحی وب سایت در ترکیه</h2>
                        <img class="slider-img" src="https://adib-it.com/source/assets/uploads/sliders/slider1.jpg" alt="adib" style="width:100%;object-fit: cover;">
                    </div>
                    <div class="item active">
                        <h2 class="text-slider" style="color: #34e1eb;">طراحی وب سایت در ترکیه</h2>
                        <img class="slider-img" src="https://adib-it.com/source/assets/uploads/sliders/slider2.jpg" alt="adib" style="width:100%;object-fit: cover;">
                    </div>
                    <div class="item active">
                        <h2 class="text-slider" style="color: #34e1eb;">طراحی وب سایت در ترکیه</h2>
                        <img class="slider-img" src="https://adib-it.com/source/assets/uploads/sliders/slider3.jpg" alt="adib" style="width:100%;object-fit: cover;">
                    </div>
                    {{--                    <div class="item">--}}
                    {{--                            <h2 class="text-slider">طراحی وب سایت در آلمان</h2>--}}
                    {{--                                <img src="https://sianhome.com/source/assets/uploads/sliders/1401-06-23/photos/photo-77879201147eeedb305e590c7489d05f.jpg" alt="sinhome" style="width:100%;object-fit: cover;">--}}
                    {{--                    </div>--}}


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="container" style="margin-top: 50px;">
            <h2 class="heading-title text-center headline">ما طراحی انواع سایت برای شما را در کشور ترکیه انجام خواهیم داد</h2>
            <p>شرکت ادیب گستر عصر نوین با بیش از 20 سال تجربه در حوزه طراحی انواع وب سایت شامل سایت های فروشگاهی و شرکتی آماده ارائه خدمات به شما برای توسعه کسب و کار خود درکشور ترکیه می باشد.</p>

            <h2 class="heading-title text-center headline">مراحل طراحی سایت در ترکیه</h2>
            <div class="elementor-element elementor-element-a673fab elementor-column col-sm-12 col-lg-12 col-md-12 elementor-top-column" data-id="a673fab" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        <section class="elementor-element elementor-element-c5b91d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="c5b91d5" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="row">
                                    <div class="elementor-element elementor-element-7815fcd elementor-column col-sm-12 col-lg-6 col-md-6 elementor-inner-column headline" data-id="7815fcd" data-element_type="column" data-sr-id="7" style="visibility: visible; opacity: 1; transition: opacity 0.6s cubic-bezier(0.5, 0, 0, 1) 0.4s;">
                                        <div class="elementor-column-wrap element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-b001fcf animated-fast elementor-position-left elementor-widget elementor-widget-featured-box " data-id="b001fcf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;,&quot;_animation_delay&quot;:150}" data-widget_type="featured-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-featured-box-wrapper">
                                                            <div class="elementor-featured-box-flex">
                                                                <div class="elementor-featured-box-top">
                                                                    <div class="elementor-featured-box-icon">
                                                                        <img src="/assets/newFront/img/icons/bulb.png">
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-featured-box-bottom">
                                                                    <h3 class="elementor-featured-box-title">تحلیل کسب و کار</h3>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-featured-box-content">
                                                                <p class="elementor-featured-box-description">ما در مجموعه ادیب در قدم اول به آنالیز کسب و کار شما می پردازیم، در این مرحله تحلیلی پیرامون کسب و کار شما انجام می دهیم و پیشنهادات خود را در زمینه اینکه چه سایتی با چه محتوایی مناسب شما است به شما ارائه خواهیم داد. اگر از قبل وب سایت داشته باشید پیشنهادات ما برای بهبود سایت قبلی شما خواهد بود.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3e96ab0 elementor-column col-sm-12 col-lg-6 col-md-6 elementor-inner-column headline" data-id="3e96ab0" data-element_type="column" data-sr-id="8" style="visibility: visible; opacity: 1; transition: opacity 0.6s cubic-bezier(0.5, 0, 0, 1) 0.4s;">
                                        <div class="elementor-column-wrap element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-9c513a4 animated-fast elementor-position-left elementor-widget elementor-widget-featured-box " data-id="9c513a4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="featured-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-featured-box-wrapper">
                                                            <div class="elementor-featured-box-flex">
                                                                <div class="elementor-featured-box-top">
                                                                    <div class="elementor-featured-box-icon">
                                                                        <img src="/assets/newFront/img/icons/mathematics.png">
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-featured-box-bottom">
                                                                    <h3 class="elementor-featured-box-title">بررسی رقبا و نحوه فعالیت آنها</h3>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-featured-box-content">
                                                                <p class="elementor-featured-box-description">نکته مهم در طراحی سایت و سئو بررسی فعالیت رقبا و پایش مستمر جایگاه فعلی سایت شما در مقایسه با رقباست که تاثیر بسیار مهمی در انتخاب مسیر طراحی و توسعه سایت خواهد داشت.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="elementor-element elementor-element-0ce1269 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="0ce1269" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="row">
                                    <div class="elementor-element elementor-element-604b9ca elementor-column col-sm-12 col-lg-6 col-md-6 elementor-inner-column headline" data-id="604b9ca" data-element_type="column" data-sr-id="9" style="visibility: visible; opacity: 1; transition: opacity 0.6s cubic-bezier(0.5, 0, 0, 1) 0.4s;">
                                        <div class="elementor-column-wrap element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-d50fa9c animated-fast elementor-position-left elementor-widget elementor-widget-featured-box" data-id="d50fa9c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="featured-box.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-featured-box-wrapper">
                                                            <div class="elementor-featured-box-flex">
                                                                <div class="elementor-featured-box-top">
                                                                    <div class="elementor-featured-box-icon">
                                                                        <img src="/assets/newFront/img/icons/compass.png">
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-featured-box-bottom">
                                                                    <h3 class="elementor-featured-box-title">اشراف بر قوانین و قواعد طراحی سایت در کشور ترکیه</h3>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-featured-box-content">
                                                                <p class="elementor-featured-box-description">قواعدی که در مورد طراحی سایت در ترکیه باید رعایت شود اعم از اینکه تابع قوانین جاری کشور ترکیه باشد و محتواهای آن مغایریتی با قوانین جاری این کشور نداشته باشد و از استانداردهای لازم بهره گرفته باشد.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-25a87a9 elementor-column col-sm-12 col-lg-6 col-md-6 elementor-inner-column" data-id="25a87a9" data-element_type="column">
                                        <div class="elementor-column-wrap element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-7b3eff3 animated-fast elementor-position-left elementor-widget elementor-widget-featured-box headline" data-id="7b3eff3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;}" data-widget_type="featured-box.default" data-sr-id="10" style="visibility: visible; opacity: 1; transition: opacity 0.6s cubic-bezier(0.5, 0, 0, 1) 0.4s;">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-featured-box-wrapper">
                                                            <div class="elementor-featured-box-flex">
                                                                <div class="elementor-featured-box-top">
                                                                    <div class="elementor-featured-box-icon">
                                                                        <img src="/assets/newFront/img/icons/laptop.png">
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-featured-box-bottom">
                                                                    <h3 class="elementor-featured-box-title">طراحی حرفه ای و تخصصی وب سایت شما</h3>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-featured-box-content">
                                                                <p class="elementor-featured-box-description">با توجه به تجربه و تخصص همکاران ما در طی سالیان متمادی در امر طراحی انواع وب سایت های اینترنتی، لذا تمامی استانداردهای لازم در طراحی سایت اعم از رسپانسیو بودن و رعایت شیوه نامه های تجربه کاربری و ... لحاظ شده و رعایت می شود.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>


            <div class="row about">
                <div class="col-sm-12 col-lg-12 featured-box-wrapper headline">
                    <div class="col-sm-12 col-lg-6">
                        <h2 class="heading-title headline">کمک به توسعه کسب و کار با راه اندازی سایت در ترکیه</h2>
                        <p>امروز تمامی کسب و کارها و بیزینس ها وجود یک وب سایت برای معرفی خود به مشتریان نیاز دارند تا تعداد مشتریان خود را افزایش داده و در نهایت شرکت خود را توسعه بخشند. طراحی سایت برای تمامی حوزه های کاری امری ضروری و یک نیاز مبرم است. مشاغلی مانند آژانس های املاک، رستوران ها، شرکت های خدمات و کسانی که محصولی برای فروش دارند، نیاز به راه اندازی یک وب سایت اختصاصی برای خود دارند.</p>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <h2 class="heading-title headline">رتبه اول سایت شما در نتایج جستجو در ترکیه</h2>
                        <p>ما تمامی تخصص و توان خود را به کار می گیریم تا شما بتوانید با بهینه سازی سایت خود، به نتایج اول جستو در نتایج گوگل برسید که قطعا این امر موجب سرازیر شدن مشتریان به سمت شما شده و علاوه بر توسعه کسب و کار، موجب افزایش تعداد مشتریان شما خواهد شد.</p>
                    </div>
                </div>

            </div>



            <h2 class="heading-title text-center headline text-center">هزینه طراحی سایت در ترکیه</h2>
            <p>هزینه طراحی سایت در ترکیه به عوامل گوناگونی بستگی دارد. اعم از اینکه آیا سایت شما با استفاده از سیستم های یکپارچه مدیریت محتوا مانند وردپرس ساخته خواهد شد و یا کد نویسی اختصاصی برای آن انجام خواهد گرفت. همچنین نوع سایتی که طراحی می شود نیز در قیمت و هزینه تمام شده طراحی سایت در کشور ترکیه موثر است. به عنوان مثال هزینه طراحی سایت فروشگاهی و طراحی سایت شرکتی و.. با یکدیگر متفاوت است.</p>
            <section class="elementor-element elementor-element-257a3c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section " data-id="257a3c3" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12 col-md-12" data-id="1d6f08b" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-2014ac3 animated-fast elementor-widget elementor-widget-heading animated opal-move-up" data-id="2014ac3" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;,&quot;_animation_delay&quot;:150}" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-heading-wrapper">
                                                <span class="sub-title"></span>
                                                <div class="elementor-heading-wrapper-inner">
                                                    <h3 class="heading-title elementor-size-default">جهت دریافت مشاوره رایگان طراحی سایت با ما در تماس باشید</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-cc707fe animated-fast elementor-align-left elementor-wpcf7-button-primary elementor-wpcf7-button-md elementor-widget elementor-widget-opal-contactform7 animated opal-move-up" data-id="cc707fe" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;opal-move-up&quot;,&quot;_animation_delay&quot;:250}" data-widget_type="opal-contactform7.default">
                                        <div class="elementor-widget-container">
                                            <div class="wpcf7" id="wpcf7-f1052-p341-o1" dir="ltr" lang="en-US">
                                                <div class="screen-reader-response"></div>
                                                <form action="#" method="post" class="wpcf7-form">
                                                    @csrf

                                                    <div style="display: none;"> <input type="hidden" value="1052"> <input type="hidden" name="_wpcf7_version" value="5.1.4"> <input type="hidden" name="_wpcf7_locale" value="en_US"> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1052-p341-o1"> <input type="hidden" name="_wpcf7_container_post" value="341"></div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-4"> <span class="wpcf7-form-control-wrap text-337"><input required="" type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" id="form-name" aria-invalid="false" placeholder="نام و نام خوانوادگی"></span></div>
                                                            <div class="row">
                                                                <div class="col-md-3 mb-4">
                                                                    <select class="form-control" name="code">
                                                                        <option value="90">+90</option>
                                                                        <option value="98">+98</option>
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-9">
                                                                    <div class="mb-4"> <span class="wpcf7-form-control-wrap text-338"><input required="" type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text" id="form-subject" aria-invalid="false" placeholder="شماره تلفن"></span></div>
                                                                </div>
                                                            </div>




                                                            <div class="mb-4"> <span class="wpcf7-form-control-wrap textarea-339"><textarea required="" name="message" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea form-control" id="textarea" aria-invalid="false" placeholder="پیام"></textarea></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-cont">
                                                        <button type="submit" id="btn-cont-submit_sh" class="wpresidence_button sh_but_1">ارسال</button>
                                                        <input type="hidden" value="" name="contact_to">
                                                        <div class="bottom-arrow"></div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="accordion" id="accordionExample">
                <h2 class="heading-title">سئوالات متداول در باره طراحی سایت در ترکیه</h2>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseOne">
                            1-آیا امکان طراحی سایت به چندین زبان برای شما وجود دارد؟
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <p class="text">
                                بله شما می توانید علاوه بر طراحی سایت به زبان ترکی، به سایر زبان های اتحادیه اروپا ، عربی و یا حتی فارسی نیز سایت خود را راه اندازی کنید.                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseOne">
                            2-در صورتی که بعد از طراحی سایت قصد تغییر آن را داشته باشم چه کاری باید انجام دهم؟                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="text">
                                در صورتی که پس از اتمام سایت نیاز به انجام تغییرات یا به روز رسانی آن را داشته باشید، می توانید در قالب قرارداد جداگانه پشتیبانی سالانه آن را نیز به مجموعه ادیب بسپارید و خیال خود را در مورد مشکلات احتمالی سایت در آینده راحت کنید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapseOne">
                            3-آیا مطالب و تصاویر وب سایت باید توسط مشتری تهیه و  تولید شود؟                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="text">
                                بله. مطالب و محتواها و حتی تصاویری که بایستی بر روی سایت بارگذاری شود توسط مشتری در اختیار شرکت ادیب قرار می گیرد. البته شایان ذکر است که مجموعه ادیب نیز با دریافت هزینه ای اندک آمادگی لازم را برای تولید محتوای متنی و تصویری برای سایت شما را دارد.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseOne">
                            4-علاوه بر هزینه طراحی سایت آیا هزینه دیگری نیز باید پرداخت کنیم؟
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="text">
                                پیش از همه چیز اولین قدم در طراحی سایت ثبت دامنه و پس از آن خرید هاست می باشد که هزینه زیادی برای شما نخواهد داشت. علاوه بر این در صورتی که قصد ارتقاء رتبه سایت طراحی شما برای شما را در نتایج گوگل را نیز دارید هزینه جداگانه ای برای  خدمات سئو سایت دریافت می گردد که این موضوع بستگی به محتوای سایت شما و کلمات کلیدی سایت شما دارد.
                            </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row contact-section">
                <div class="col-xl-9 col-lg-12 col-md-12 ">
                    <h2 class="heading-title">تماس با ما</h2>
                    <div class="widget widget-social">
                        <div class="widget-content">
                            <ul class="social">
                                <li>
                                    <a href="https://m.facebook.com/sianhome-111339027710360/" class="facebook">
                                        <i class="fa fa-facebook "></i>
                                    </a>
                                </li>


                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=+905451002002" class="whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/sian.home/" class="instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntct">
                        <h3>آدرس</h3>
                        <img src="https://sianhome.com/assets/editor/upload/check_editor_1662975365_001-location.png" style="width:62px; height:62px;" class="lazyloaded" data-ll-status="loaded" width="62" height="62">
                        <noscript><img width="62" height="62" src="https://sianhome.com/assets/editor/upload/check_editor_1662975365_001-location.png" style="width:62px; height:62px;" /></noscript>
                        <p style="direction: ltr;text-align: center;">Çobançeşme Mahallesi, Sanayi Caddesi, <br>Nish Residence D Blok No: 44/9 Bahçelievler, İstanbul, Türkiye</p>
                        <hr>
                        <h3>تلفن</h3>
                        <img src="https://sianhome.com/assets/editor/upload/check_editor_1662975384_002-24-hours.png" style="width:62px; height:62px;" class="lazyloaded" data-ll-status="loaded" width="64" height="64">
                        <noscript><img width="64" height="64" src="https://sianhome.com/assets/editor/upload/check_editor_1662975384_002-24-hours.png" style="width:62px; height:62px;" /></noscript>
                        <p style="direction: ltr;text-align: center;"><a style="color:#000;text-decoration:none;" id="phone-trigger" href="tel:905451002002">+90 545 100 20 02</a></p>


                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal().reveal('.headline', { delay: 400 });

    </script>

@endsection


