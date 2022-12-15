@extends('layouts.front.master')
@section('styles')

  <link rel="stylesheet" href="{{url('assets/newFront/landing/new/style.css?v=1234567891')}}">
  <link rel="stylesheet" href="{{url('assets/newFront/landing/new/media_queries.css?v=1234567891')}}">
  <link rel="stylesheet" href="{{url('assets/newFront/landing/new/animation.css?v=123456789')}}">

  <style>

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
  <main class="landing_page">
    <section class="home" id="home">
      <div class="deco-shape shape-1">
        <img src="{{url('assets/newFront/landing/new/img/shape-1.png')}}" alt="">
      </div>
      <div class="deco-shape shape-2">
        <img src="{{url('assets/newFront/landing/new/img/shape-2.png')}}" alt="">
      </div>
      <div class="deco-shape shape-3">
        <img src="{{url('assets/newFront/landing/new/img/shape-3.png')}}" alt="">
      </div>
      <div class="deco-shape shape-4">
        <img src="{{url('assets/newFront/landing/new/img/shape-4.png')}}" alt="">
      </div>
      <div class="home-right">
        <p class="section-subtitle"> گروه ادیب متخصص در طراحی سایت</p>

        <h1 class="main-heading">برنامه ریزی توسط برترین اساتید
        </h1>
        <p class="section-text">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون
          بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
          هدف بهبود ابزارهای کاربردی می باشد.
        </p>
        <div class="home-btn-group">
          <button class="btn btn-primary" onclick="scrool_click('course',1500)">
            <a href="javascript:void(0)"><p class="btn-text">نمونه کارها</p></a>
            <span class="square"></span>
          </button>

          <button class="btn btn-secondary" onclick="scrool_click('form-request-left',2500)">
            <a href="javascript:void(0)"><p class="btn-text">مشاوره رایگان</p></a>
            <span class="square"></span>
          </button>
        </div>
      </div>

      <div class="home-left">
        <div class="img-box">
          <img src="{{url('assets/newFront/landing/new/img/banner-img-bg.png')}}" alt="" class="background-shape">
          <img src="https://azarnejat115.ir/images/img03.png" alt="" class="banner-img">
        </div>
      </div>
    </section>

    <section class="category">
      <p class="section-subtitle">مزایا</p>
      <h2 class="section-title">مزایای طراحی سایت گروه ادیب</h2>
      <ul class="course-item-group">
        <li class="course-category-item">
          <div class="wrapper">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-1.png" alt=""
                 class="category-icon default">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-1-w.png" alt=""
                 class="category-icon hover">
          </div>
          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#">علم داده</a>
            </h3>
            <p class="gategory-subtitle">دادها ها همه چیزند.</p>
          </div>
        </li>
        <li class="course-category-item">
          <div class="wrapper">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-2.png" alt=""
                 class="category-icon default">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-2-w.png" alt=""
                 class="category-icon hover">
          </div>
          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#"> استراتژی کسب و کار </a>
            </h3>
            <p class="gategory-subtitle">بهبود کسب و کار</p>
          </div>
        </li>
        <li class="course-category-item">
          <div class="wrapper">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-3.png" alt=""
                 class="category-icon default">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-3-w.png" alt=""
                 class="category-icon hover">
          </div>
          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#">هنر و طراحی</a>
            </h3>
            <p class="gategory-subtitle">سرگرمی و چالش </p>
          </div>
        </li>
        <li class="course-category-item">
          <div class="wrapper">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-4.png" alt=""
                 class="category-icon default">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-4-w.png" alt=""
                 class="category-icon hover">
          </div>
          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#"> سبک زندگی </a>
            </h3>
            <p class="gategory-subtitle">مهارت های جدید</p>
          </div>
        </li>
        <li class="course-category-item">
          <div class="wrapper">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-5.png" alt=""
                 class="category-icon default">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-5-w.png" alt=""
                 class="category-icon hover">
          </div>
          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#"> بازاریابی </a>
            </h3>
            <p class="gategory-subtitle">مهارت های جدید</p>
          </div>
        </li>
        <li class="course-category-item">
          <div class="wrapper">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-6.png" alt=""
                 class="category-icon default">
            <img src="https://demoprofile.ir/educator/assets/images/course-category-icon-6-w.png" alt=""
                 class="category-icon hover">
          </div>
          <div class="course-category-content">
            <h3 class="category-title">
              <a href="#"> امور مالی </a>
            </h3>
            <p class="gategory-subtitle">مهارت های جدید</p>
          </div>
        </li>
      </ul>
    </section>

    <section class="about" id="about_l">
      <div class="about-right">
        <div class="img-box">
          <img src="{{url('assets/newFront/landing/new/img/about-img-bg.png')}}" alt="" class="about-bg">

          <img src="https://dr-azadehrezaee.ir/wp-content/uploads/2019/02/dr.png" alt="" class="about-img">
        </div>
      </div>

      <div class="about-left">
        <p class="section-subtitle">درباره ما</p>
        <h2 class="section-title">ما بهترین ها را ایجاد میکنیم</h2>

        <p class="section-text">
          لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون
          بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
          هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و
          متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ
          پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط
          سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
          طراحی اساسا مورد استفاده قرار گیرد.
        </p>

        <button class="btn btn-primary">
          <p class="btn-text">بیشتر ببینید</p>
          <span class="square"></span>
        </button>
      </div>
    </section>

    <section class="course" id="course">
      <p class="section-subtitle">نمونه کارها</p>
      <h2 class="section-title">نمونه کارهای طراحی سایت داروخانه</h2>

      <div class="course-grid">
        <div class="course-card">
          <div class="course-banner">
            <a href="" target="_blank">
              <img src="https://adib-it.com/source/asset/uploads/content/data/1401-08-23/photos/pic-9bf7f1f04f45e6ccc7adb758f042f967.png"
                   alt="">
            </a>
            <div class="course-tag-box">
              <a href="" target="_blank">داروخانه دکتر توکلیان</a>
            </div>
          </div>
        </div>
        <div class="course-card">
          <div class="course-banner">
            <a href="" target="_blank">
              <img src="https://adib-it.com/source/asset/uploads/content/data/1401-08-23/photos/pic-8f4b07240bb28da5f1b0792c9ea25426.png"
                   alt="">
            </a>
            <div class="course-tag-box">
              <a href="" target="_blank">داروخانه کارن فارما</a>
            </div>
          </div>
        </div>
        <div class="course-card">
          <div class="course-banner">
            <a href="" target="_blank">
              <img src="https://adib-it.com/source/asset/uploads/content/data/1401-08-23/photos/pic-a234ec5190c22942b848db4fac24a4b4.png"
                   alt="">
            </a>
            <div class="course-tag-box">
              <a href="" target="_blank">داروخانه کیهان فارما</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="event">
      <div class="event-right">
        <div class="event-banner">
          <img src="https://parsstock.ir/600/10202/390329416-%D9%82%DB%8C%D9%85%D8%AA-%D8%A7%D8%B3%DA%A9%D9%86-%D8%AF%D8%A7%D8%B1%D9%88%D8%B3%D8%A7%D8%B2-%D8%AF%D8%B1-%DB%8C%DA%A9-%D8%AC%D8%B9%D8%A8%D9%87-%D8%AF%D8%A7%D8%B1%D9%88-%D8%B2%D9%86-%D8%AF%DA%A9%D8%AA%D8%B1-%D8%AF%D8%B1-%D8%AD%D8%A7%D9%84-%DA%A9%D8%A7%D8%B1-%D8%AF%D8%B1-%D8%AF%D8%A7%D8%B1%D9%88%D8%AE%D8%A7%D9%86%D9%87.jpg"
               alt="" class="banner-img">
        </div>
      </div>

      <div class="event-left">
        <p class="section-subtitle">مزیت های دیگر</p>
        <h2 class="section-title">مزیت های گروه ادیب را بخوانید</h2>
        <div class="event-card-group">
          <div class="event-card">
            <div class="content-right">
              <p class="day">1</p>
{{--              <p class="mount">مهر 1401</p>--}}
            </div>
            <div class="content-left">
              <div class="schedule">
                <p class="keyword">کلمه کلیدی 1</p>
                <p class="keyword">کلمه کلیدی 2</p>
                <p class="keyword">کلمه کلیدی 3</p>
              </div>
              <a href="#" class="event-name">کسب و کارهای نوین</a>
            </div>
          </div>
          <div class="event-card">
            <div class="content-right">
              <p class="day">2</p>
{{--              <p class="mount">آذر 1401</p>--}}
            </div>
            <div class="content-left">
              <div class="schedule">
                <p class="keyword">کلمه کلیدی 1</p>
                <p class="keyword">کلمه کلیدی 2</p>
                <p class="keyword">کلمه کلیدی 3</p>
              </div>
              <a href="#" class="event-name">کسب و کارهای نوین</a>
            </div>
          </div>

          <div class="event-card">
            <div class="content-right">
              <p class="day">3</p>
{{--              <p class="mount">اسفند 1401</p>--}}
            </div>
            <div class="content-left">
              <div class="schedule">
                <p class="keyword">کلمه کلیدی 1</p>
                <p class="keyword">کلمه کلیدی 2</p>
                <p class="keyword">کلمه کلیدی 3</p>
              </div>
              <a href="#" class="event-name">کسب و کارهای نوین</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="featuers">
      <div class="featuers-right">
        <p class="section-subtitle">ویژگی های برتر</p>
        <h2 class="section-title">ما چه ارزش های را دنبال می کنیم...</h2>

        <ul>
          <li class="featuers-item">
            <div class="item-icon-box blu">
              <img src="https://demoprofile.ir/educator/assets/images/feature-icon-1.png" alt="">
            </div>
            <div class="wrapper">
              <h3 class="item-title"> ارزش 1</h3>
              <p class="item-text">طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی
                صفحات آماده نیست. در نتیجه طرح کلی دید درستی به کار فرما نمیدهد.</p>
            </div>
          </li>
          <li class="featuers-item">
            <div class="item-icon-box pink">
              <img src="https://demoprofile.ir/educator/assets/images/feature-icon-2.png" alt="">
            </div>
            <div class="wrapper">
              <h3 class="item-title">ارزش 2</h3>
              <p class="item-text">طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی
                صفحات آماده نیست. در نتیجه طرح کلی دید درستی به کار فرما نمیدهد.</p>
            </div>
          </li>
          <li class="featuers-item">
            <div class="item-icon-box purple">
              <img src="https://demoprofile.ir/educator/assets/images/feature-icon-3.png" alt="">
            </div>
            <div class="wrapper">
              <h3 class="item-title">ارزش 3</h3>
              <p class="item-text">طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی
                صفحات آماده نیست. در نتیجه طرح کلی دید درستی به کار فرما نمیدهد.</p>
            </div>
          </li>
        </ul>
      </div>
      <div class="featuers-left">
        <img src="https://demoprofile.ir/educator/assets/images/coure-features-img.jpg" alt="">
      </div>
    </section>


    <section class="testimonial">
      <div class="testimonial-right">
        <p class="section-subtitle">نظرات مشتریان</p>
        <h2 class="section-title">مشتری ها در مورد ما چه می گویند</h2>
        <p class="section-text">
          طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در نتیجه
          طرح کلی دید درستی به کار فرما نمیدهد.
        </p>
      </div>

      <div class="testimonial-left">
        <div id="carouselCommentControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="testimonial-card">
                <img src="https://demoprofile.ir/educator/assets/images/quote.png" alt="" class="quote-img">
                <p class="testimonial-text">
                  طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در
                  نتیجه طرح کلی دید درستی به کار فرما نمیدهد.
                </p>
                <div class="testimonial-client">
                  <div class="client-img-box">
                    <img src="https://demoprofile.ir/educator/assets/images/client.jpg" alt="">
                  </div>
                  <div class="client-detail">
                    <h4 class="client-name">دکتر توکلیان1</h4>
                    <p class="client-title">مشتری</p>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial-card">
                <img src="https://demoprofile.ir/educator/assets/images/quote.png" alt="" class="quote-img">
                <p class="testimonial-text">
                  طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در
                  نتیجه طرح کلی دید درستی به کار فرما نمیدهد.
                </p>
                <div class="testimonial-client">
                  <div class="client-img-box">
                    <img src="https://demoprofile.ir/educator/assets/images/client.jpg" alt="">
                  </div>
                  <div class="client-detail">
                    <h4 class="client-name">دکتر توکلیان2</h4>
                    <p class="client-title">مشتری</p>
                  </div>
                </div>

              </div>
            </div>
            <div class="carousel-item">
              <div class="testimonial-card">
                <img src="https://demoprofile.ir/educator/assets/images/quote.png" alt="" class="quote-img">
                <p class="testimonial-text">
                  طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در
                  نتیجه طرح کلی دید درستی به کار فرما نمیدهد.
                </p>
                <div class="testimonial-client">
                  <div class="client-img-box">
                    <img src="https://demoprofile.ir/educator/assets/images/client.jpg" alt="">
                  </div>
                  <div class="client-detail">
                    <h4 class="client-name">دکتر توکلیان3</h4>
                    <p class="client-title">مشتری</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselCommentControls"
                  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
              <i class="bi bi-arrow-right"></i>
            </span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselCommentControls"
                  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
              <i class="bi bi-arrow-left"></i>
            </span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
    </section>


    <section class="blog" id="blog">
      <p class="section-subtitle">وبلاگ</p>
      <h2 class="section-title">آخرین مطالب</h2>
      <div class="blog-grid">
        <div class="blog-card">
          <div class="blog-banner">
            <a href="" target="_blank">
              <img src="https://demoprofile.ir/educator/assets/images/blog-1.jpg" alt="">
            </a>
          </div>
          <div class="blog-content">
            <h3 class="blog-title">
              <a href="./blog.html" target="_blank">بررسی راهکارهای تقویت هوش تجاری</a>
            </h3>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-banner">
            <a href="" target="_blank">
              <img src="https://demoprofile.ir/educator/assets/images/blog-2.jpg" alt="">
            </a>
          </div>
          <div class="blog-content">
            <h3 class="blog-title">
              <a href="./blog.html" target="_blank">بررسی راهکارهای تقویت هوش تجاری</a>
            </h3>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-banner">
            <a href="" target="_blank">
              <img src="https://demoprofile.ir/educator/assets/images/blog-3.jpg" alt="">
            </a>
          </div>
          <div class="blog-content">
            <h3 class="blog-title">
              <a href="./blog.html" target="_blank">بررسی راهکارهای تقویت هوش تجاری</a>
            </h3>
          </div>
        </div>
      </div>

    </section>

    <section class="form-request  pb-150px">
      <div class="form-request-right mt--150px-992">
        <p class="section-subtitle">تماس با ما</p>
        <h2 class="section-title">جهت درخواست فرم روبرو را پر کنید</h2>
        <p class="section-text">
          طراحان سایت هنگام طراحی قالب سایت معمولا با این موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در نتیجه طرح کلی دید درستی به کار فرما نمیدهد.
        </p>
      </div>

      <div class="form-request-left" id="form-request-left">
        <form action="" method="post">
          <div class="form-group py-1">
            <label><small class="text-danger ml-1">*</small> نام و نام خانوادگی</label>
            <input type="text" class="form-control" name="" required>
          </div>
          <div class="form-group py-1">
            <label><small class="text-danger ml-1">*</small> شماره تماس</label>
            <div class="d-flex">
              <input type="number" class="form-control" name="" required>
              <select class="w-70px ms-2" name="">
                <option value="90">+90</option>
                <option value="90">+98</option>
              </select>
            </div>
          </div>
          <div class="form-group py-1">
            <label><small class="text-danger ml-1">*</small> متن پیام</label>
            <textarea class="form-control" rows="3" name="" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary float-end mt-3">
            <p class="btn-text">ارسال فرم</p>
            <span class="square"></span>
          </button>
        </form>
      </div>
    </section>

  </main>
@endsection

@section('scripts')
  <script>
      function scrool_click(id,speed)
      {
          $('html,body').animate({
              scrollTop: $('#'+id).offset().top - 60
          }, speed);
      }
  </script>
@endsection