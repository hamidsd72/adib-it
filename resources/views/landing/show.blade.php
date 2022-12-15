@extends('layouts.front.master')
@section('styles')
  <link rel="stylesheet" href="{{url('assets/newFront/landing/new/style.css?v=1234567891')}}">
  <link rel="stylesheet" href="{{url('assets/newFront/landing/new/media_queries.css?v=1234567891')}}">
  <link rel="stylesheet" href="{{url('assets/newFront/landing/new/animation.css?v=123456789')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/adib/new/css/reset.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('assets/adib/new/css/reset.css')}}">
  <link rel="stylesheet" href="{{url('assets/newFront/landing/css/captcha.css')}}">
  <style>
    .featuers .featuers-item .wrapper p , .featuers .section-title p { color: white !important; }
    .carousel-inner { max-height: 270px !important; }
    .course-category-item:hover { background: linear-gradient(45deg, #ff531a, transparent);border: none; }
    .course-category-item:hover { background: none; box-shadow: none; }
    .accordion-button::after { margin: unset; position: absolute; width: 2rem; height: 2rem; background-size: 2rem; }
    .course-banner .course-tag-box a { background: #fff; }
    .course-category-item { display: unset; }
    .category-icon.default, .course-category-item:hover .category-icon.hover { display: unset; }
    strong { font-weight: bold; }
    .category-icon { border: 6px solid var(--cultured); width: 120px; border-radius: 50%; }
    .course-category-item { border: none; }
    .category-title a { font-size: 20px; font-weight: 500; }
    .course-category-item:hover .category-title a { font-weight: bold; color: #6c757d !important; transition: 0.8s; }
    @media screen and (min-width: 992px) { .blog-banner img { height: 420px; } .form-request { grid-template-columns: 2fr 3fr; } }
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

    @if ($page->contentsOne()->count())
      <section class="home" id="home">
        {{-- // 1 بخش اول - بنر بالای صغحه --}}
        {{-- <div class="deco-shape shape-1"><img src="{{url('assets/newFront/landing/new/img/shape-1.png')}}" alt="banner"></div> --}}
        <div class="deco-shape shape-2"><img src="{{url('assets/newFront/landing/new/img/shape-2.png')}}" alt="banner"></div>
        <div class="deco-shape shape-3"><img src="{{url('assets/newFront/landing/new/img/shape-3.png')}}" alt="banner"></div>
        <div class="deco-shape shape-4"><img src="{{url('assets/newFront/landing/new/img/shape-4.png')}}" alt="banner"></div>
                    
        <div class="home-right">
          @foreach ($page->contentsOne() as $item)
            @if ($item->sort==1)
              <p class="section-subtitle pt-lg-4" style="color: {{$item->color}} !important" >{{$item->title}}</p>
              <h1 class="main-heading">{!! $item->description !!}</h1>
            @endif
    
            @if ($item->sort==2)
              <p class="section-text mt-4" style="color: {{$item->color}} !important">{{ $item->title }}</p>
              {!! $item->description !!}
            @endif
          @endforeach

          <div class="home-btn-group">
            <div class="d-none">{{$counter=0}}</div>
            @foreach ($page->contentsOne()->where('sort',3) as $item)
              <a href="#" class="btn btn-secondary {{$counter==0?'':'ms-lg-4'}}" style="border: none;background: {{$item->color}} !important"
                 @if ($counter==1) data-bs-toggle="modal" data-bs-target="#msgBox"
                 @else onclick="scrool_click('course', {{$item->part}} )" @endif
              >
                <p class="btn-text">{{$item->title}}</p><span class="square"></span>
              </a>
              <div class="d-none">{{$counter+=1}}</div>
            @endforeach
          </div>

        </div>
  
        @foreach ($page->contentsOne()->where('sort',1) as $item)
          @if ($item->pic)
            <div class="home-left">
              <div class="img-box">
                <img src="{{url('assets/newFront/landing/new/img/banner-img-bg.png')}}" alt="{{$item->title}}" class="background-shape">
                <img src="{{ url($item->pic) }}" alt="{{$item->title}}" class="banner-img">
              </div>
            </div>
          @endif
        @endforeach

      </section>
    @endif

    @if ($page->contentsTwo()->count())
      <section class="category">
        {{-- // 2 بخش دوم - آیتم های مزایا --}}
        @foreach ($page->contentsTwo()->where('sort','1') as $item)
          <h3>
            <p class="section-subtitle" style="color: {{$item->color}} !important" >{{ $item->title }}</p>
          </h3>
          <h2 class="section-title">{!! $item->description !!}</h2>
        @endforeach

        <ul class="course-item-group">
          @foreach ($page->contentsTwo()->where('sort','2') as $item)
            <li class="course-category-item">
              @if ($item->pic)
                <div class="wrapper text-center mb-3">
                  <a href="{{$item->link?$item->link=='/'?'#':$item->link:'#'}}" >
                    <img src="{{url($item->pic)}}" alt="{{$item->title}}" class="category-icon p-1 default">
                    <img src="{{url($item->pic)}}" alt="{{$item->title}}" class="category-icon p-1 hover">
                  </a>
                </div>
              @endif
              <div class="course-category-content text-center">
                <h3 class="category-title"><a href="{{$item->link?$item->link=='/'?'#':$item->link:'#'}}" style="color: {{$item->color}}" >{{$item->title}}</a></h3>
                <p class="gategory-subtitle">{!! $item->description !!}</p>
              </div>
            </li>
          @endforeach
        </ul>
      </section>
    @endif

    @if ($page->contentsTree()->count())
      <section class="about" id="about_l">
        {{-- // 3 بخش سوم - درباره ما --}}
        <div class="about-right">
          <div class="img-box">
            <img src="{{url('assets/newFront/landing/new/img/about-img-bg.png')}}" alt="" class="about-bg">
            @foreach ($page->contentsTree()->where('sort','1') as $item)
              @if ($item->pic)
                <img src="{{url($item->pic)}}" alt="{{$item->title}}" class="about-img">
              @endif
            @endforeach
          </div>
        </div>

        <div class="about-left">
          @foreach ($page->contentsTree()->where('sort','1') as $item)
            <p class="section-subtitle" style="color: {{$item->color}} !important" >{{$item->title}}</p>
            <h2 class="section-title">{!! $item->description !!}</h2>
          @endforeach

          @foreach ($page->contentsTree()->where('sort','2') as $item)
            <p class="section-text" style="color: {{$item->color}} !important" >{!! $item->title !!}</p>
            <p class="section-text">{!! $item->description !!}</p>
          @endforeach

          <div class="my-4">
            @foreach ($page->contentsTree()->where('sort','3') as $item)
              <div class="d-flex">
                <a href="{{$item->link?$item->link=='/'?'#':$item->link:'#'}}" class="btn btn-primary" style="border: none;background: {{$item->color}} !important">
                  <p class="btn-text">{{$item->title}}</p><span class="square"></span>
                </a>
              </div>
            @endforeach
          </div>

        </div>
      </section>
    @endif

    @if ($page->contentsFour()->count())
      <section class="course" id="course">
        {{-- // 4 بخش چهارم - نمونه کارها --}}
        @foreach ($page->contentsFour()->where('sort','1') as $item)
          <p class="section-subtitle text-center" style="max-width: unset;color: {{$item->color}} !important" >{{ $item->title }}</p>
          <h2 class="section-title" style="max-width: unset;">{!! $item->description !!}</h2>
        @endforeach

        <div class="course-grid">
          @foreach ($page->contentsFour()->where('sort','2') as $item)
            @if ($item->pic)
              <div class="course-card">
                <div class="course-banner">
                  <a href="{{$item->link?$item->link=='/'?'#':$item->link:'#'}}" target="_blank"><img src="{{url($item->pic)}}" alt="{{$item->title}}"></a>
                  <div class="course-tag-box">
                    <a href="{{$item->link?$item->link=='/'?'#':$item->link:'#'}}" target="_blank" style="color: {{$item->color}} !important">{{$item->title}}</a>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </section>
    @endif

    @if ($page->contentsFive()->count())
      <section class="event">
        {{-- // 5 بخش پنجم - مزیت ها --}}
        @foreach ($page->contentsFive()->where('sort','1') as $item)
          @if ($item->pic)
            <div class="event-right">
              <div class="event-banner">
                <img src="{{url($item->pic)}}" alt="{{$item->title}}" class="banner-img">
              </div>
            </div>
          @endif
        @endforeach

        <div class="event-left">
          
          @foreach ($page->contentsFive()->where('sort','1') as $item)
            <p class="section-subtitle" style="color: {{$item->color}} !important" >{{$item->title}}</p>
            <h2 class="section-title">{!! $item->description !!}</h2>
          @endforeach

          <div class="event-card-group">
            <div style="display: none">{{$index=0}}</div>
            @foreach ($page->contentsFive()->where('sort','2') as $item)
              <div class="event-card">
                <div class="content-right">
                  <p class="day">{{$index+=1}}</p>
                </div>
                <div class="content-left">
                  <div class="schedule fs-5" style="color: {{$item->color}} !important">
                    {{$item->title}}
                  </div>
                  <a href="{{$item->link?$item->link=='/'?'#':$item->link:'#'}}" class="event-name">{!! $item->description !!}</a>
                </div>
              </div>
            @endforeach
          </div>
          
        </div>
      </section>
    @endif

    @if ($page->contentsSix()->count())
      <section class="featuers">
      {{-- // 6 بخش ششم - ویژگی ها --}}
        <div class="featuers-right">
          @foreach ($page->contentsSix()->where('sort','1') as $item)
            <p class="section-subtitle" style="color: {{$item->color}} !important" >{{$item->title}}</p>
            <h2 class="section-title">{!! $item->description !!}</h2>
          @endforeach

          <ul>
            @foreach ($page->contentsSix()->where('sort','2') as $item)
              <li class="featuers-item">
                <div class="item-icon-box purple">
                  <img src="{{$item->pic?url($item->pic):''}}" alt="{{$item->title}}">
                </div>
                <div class="wrapper">
                  <h3 class="item-title" style="color: {{$item->color}} !important">{{$item->title}}</h3>
                  <p class="item-text">{!! $item->description !!}</p>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

        @foreach ($page->contentsSix()->where('sort','1') as $item)
          @if ($item->pic)
            <div class="featuers-left">
              <img src="{{url($item->pic)}}" alt="{{$item->title}}">
            </div>
          @endif
        @endforeach
        
      </section>
    @endif

    @if ($page->contentsSeven()->count() || $page->contentsEight()->count())
      <section class="testimonial">

        @if ($page->contentsSeven()->count())
          <div class="testimonial-right">
            @foreach ($page->contentsSeven()->where('sort','1') as $item)
              <p class="section-subtitle" style="color: {{$item->color}} !important" >{{$item->title}}</p>
              <h2 class="section-title">{!! $item->description !!}</h2>
            @endforeach
            @foreach ($page->contentsSeven()->where('sort','2') as $item)
              <p class="section-subtitle" style="color: {{$item->color}} !important" >{{$item->title}}</p>
              <h2 class="section-text">{!! $item->description !!}</h2>
            @endforeach
          </div>
        @endif

        @if ($page->contentsEight()->count())
          <div class="testimonial-left">
            <div id="carouselCommentControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div style="display: none">{{$index=0}}</div>

                @foreach ($page->contentsEight()->where('sort','2') as $item)
                  @if ($item->pic)
                    <div class="carousel-item {{$index==0?'active':''}}">
                      <div class="testimonial-card">
                        <img src="https://demoprofile.ir/educator/assets/images/quote.png" alt="" class="quote-img">
                        <p class="testimonial-text">{!! $item->description !!}</p>
                        <div class="testimonial-client pt-4">
                          <div class="client-img-box">
                            <img src="{{url($item->pic)}}" alt="{{$item->title}}">
                          </div>
                          <div class="client-detail">
                            <h4 class="client-name">{{$item->title}}</h4>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div style="display: none">{{$index=1}}</div>

                  @endif
                @endforeach

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselCommentControls"
                      data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                  <i class="bi bi-arrow-right"></i>
                </span>
                <span class="visually-hidden">قبلی</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselCommentControls"
                      data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                  <i class="bi bi-arrow-left"></i>
                </span>
                <span class="visually-hidden">بعدی</span>
              </button>
            </div>

          </div>
        @endif
          
      </section>
    @endif

    @if ($page->contentsNine()->count())
      <section class="blog" id="blog">

        @foreach ($page->contentsNine()->where('sort','1') as $item)
          <p class="section-subtitle" style="color: {{$item->color}} !important" >{{$item->title}}</p>
          <h2 class="section-title">{!! $item->description !!}</h2>
        @endforeach

        <div class="blog-grid">
          @foreach ($page->contentsNine()->where('sort','2') as $item)
            @if($item->pic)
              <div class="blog-card">
                <div class="blog-banner">
                  <a href="" target="_blank">
                    <img src="{{url($item->pic)}}" alt="{{$item->title}}">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="blog-title">
                    <a href="{{$item->link?$item->link=='/'?'#':$item->link:'#'}}" target="_blank">{{ $item->title }}</a>
                  </h3>
                </div>
              </div>
            @endif
          @endforeach
        </div>

      </section>
    @endif

    @if ($page->contentsTwelve()->count())
      <section class="accordion">
        <div class="container mx-auto">

          @foreach ($page->contentsTwelve()->where('sort','1') as $item)
            <p class="section-subtitle text-center mb-lg-3" style="color: {{$item->color}} !important" >{{$item->title}}</p>
            <h2 class="section-title text-center">{!! $item->description !!}</h2>
          @endforeach
          
          <div class="d-none">{{$question=0}}</div>
          <div class="accordion my-4 my-lg-5" id="accordionExample">
            @foreach ($page->contentsTwelve()->where('sort','2') as $item)
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$item->id}}">
                  <button class="accordion-button p-3 {{$question==0?'':'collapsed'}}" type="button" data-bs-toggle="collapse"
                   data-bs-target="#collapse{{$item->id}}" aria-expanded="{{$question==0?'true':'false'}}" aria-controls="collapse{{$item->id}}">
                    <h6 class="ps-5">{{$item->title}}</h6>
                  </button>
                </h2>
                <div id="collapse{{$item->id}}" class="accordion-collapse collapse {{$question==0?'show':''}}" aria-labelledby="heading{{$item->id}}" data-bs-parent="#accordionExample">
                  <div class="accordion-body p-2 p-lg-4">{!! $item->description !!}</div>
                </div>
              </div>
              <div class="d-none">{{$question+=1}}</div>
            @endforeach
          </div>
                  
        </div>
      </section>
    @endif

    {{-- @if ($page->contentsTen()->count() || $page->contentsEleven()->count()) --}}
      <section class="form-request pb-150px">

        @if ($page->contentsTen()->count())
          <div class="form-request-right mt--150px-992 mb-5">
            @foreach ($page->contentsTen()->where('sort','1') as $item)
              <p class="section-subtitle" style="color: {{$item->color}} !important" >{{$item->title}}</p>
              <h2 class="section-title">{!! $item->description !!}</h2>
            @endforeach

            @foreach ($page->contentsTen()->where('sort','2') as $item)
              <p class="section-text">{!! $item->description !!}</p>
            @endforeach
          </div>
        @endif

        <div class="border rounded">
          <div class="form-request-left pt-2 pt-lg-3" id="form-request-left">
            <form id="landing_form" action="{{ route('landing.page.send.message','fa') }}" method="POST">
              @csrf
              <input type="hidden" name="page" value="{{$page->title}}">
              <div class="form-group py-1">
                <label class="mb-2 mb-lg-3"><small class="text-danger ml-1">*</small>نام و نام خانوادگی</label>
                <input type="text" class="form-control" name="fullname" required>
              </div>
              <div class="form-group py-1">
                <label class="mb-2 mb-lg-3"><small class="text-danger ml-1">*</small>ایمیل شما</label>
                <input type="email" class="form-control" name="email" required>
              </div>
              <div class="form-group py-1">
                <label class="mb-2 mb-lg-3"><small class="text-danger ml-1">*</small> شماره تماس</label>
                <div class="d-flex">
                  <input type="text" class="form-control" name="number" required>
                  <select class="w-70px ms-2" name="preNumber">
                    <option value="98">+98</option>
                    <option value="90">+90</option>
                  </select>
                </div>
              </div>
              <div class="form-group py-1">
                <label class="mb-2 mb-lg-3"><small class="text-danger ml-1">*</small> متن پیام</label>
                <textarea class="form-control" rows="3" name="text" required></textarea>
              </div>
              {{-- <button type="submit" class="btn btn-primary float-end my-3"> --}}
              <button class="g-recaptcha btn btn-primary float-end my-3" data-sitekey="6LfLS9kgAAAAAH0jCae-OshbDmgb87XNd3MQj-6U" data-callback='onSubmit3' data-action='submit'>
                <p class="btn-text">ارسال فرم</p>
                <span class="square"></span>
              </button>
            </form>
          </div>
        </div>
          
      </section>
    {{-- @endif --}}

    <!-- The Modal -->
    <div class="modal" id="msgBox">
      <div class="modal-dialog mx-auto pt-5">
        <div class="modal-content">
          <form id="landing_form" action="{{ route('landing.page.send.message','fa') }}" method="POST">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title p-2 p-lg-3 fw-bold">تماس با ما</h4>
            </div>
          
            <!-- Modal body -->
            <div class="modal-body p-2 p-lg-3">
              @csrf
              <input type="hidden" name="page" value="{{$page->title}}">
              <div class="form-group">
                <label class="my-2 my-lg-3"><small class="text-danger">*</small>نام و نام خانوادگی</label>
                <input type="text" class="form-control" name="fullname" required>
              </div>
              <div class="form-group">
                <label class="my-2 my-lg-3"><small class="text-danger">*</small>ایمیل شما</label>
                <input type="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                <label class="my-2 my-lg-3"><small class="text-danger">*</small> شماره تماس</label>
                <div class="d-flex">
                  <input type="text" class="form-control" name="number" required>
                  <select class="w-70px ms-2" name="preNumber">
                    <option value="98">+98</option>
                    <option value="90">+90</option>
                  </select>
                </div>
              </div>
              <div class="form-group mb-2 mb-lg-3">
                <label class="my-2 my-lg-3"><small class="text-danger">*</small> متن پیام</label>
                <textarea class="form-control" rows="3" name="text" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">
                <p class="btn-text">ارسال فرم</p>
                <span class="square"></span>
              </button>
              <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="modal">انصراف</button>
            </div>
              
          </form>
        </div>
      </div>
    </div>

  </main>
@endsection
@section('scripts')
  <script src="{{url('assets/newFront/landing/js/captcha.js')}}"></script>
  <script>
    function onSubmit3(token) {
          document.getElementById("landing_form").submit();
      }
  </script>
  <script>
      function scrool_click(id,speed) {
          $('html,body').animate({
              scrollTop: $('#'+id).offset().top - 60
          }, speed);
      }
  </script>
  <script>
    $(function(){
        $("input[name='number']").on('input', function (e) {
            $(this).val($(this).val().replace(/[^0-9۰-۹]/g, ''));
        });
    });
</script>
@endsection
