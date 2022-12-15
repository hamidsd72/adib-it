@component('layouts.back')
    @slot('title') افزودن {{ $title }} @endslot
    @slot('body')

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
        <!-- Include Editor style. -->
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet" type="text/css"/>

        <style>
            #content_box , #submit_content_form , #content_type {
                display: none;
            }
        </style>

        <div class="card">
            <div class="card-header archive-card-header">
                <div class="archive-circle-wrap">
                    <div class="archive-circle">
                        <i class="fa fa-lemon-o"></i>
                    </div>
                    <h2>افزودن {{ $title }}</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="post">
                {{ Form::open(array('route' => 'content.store', 'method' => 'POST', 'files' => true)) }}
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <div class="form-group">
                                {{ Form::label('page_id', 'نام صفحه') }}
                                <select name="page_id" id="page_id" class="form-control">
                                    @foreach (\App\Models\Page::all(['id','title']) as $item)
                                        @if ($id??'')
                                            <option value="{{$item->id}}" {{$id==$item->id?'selected':''}}>{{$item->title}}</option>
                                        @else
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endif    
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group form-group-post">
                                {{ Form::label('section', 'محل قرارگیری در قالب') }}
                                <select name="section" id="section" class="form-control" onchange="document.getElementById('content_type').style.display = 'block';">
                                    <option value="0" selected>انتخاب کنید</option>
                                    <option value="1" >بخش اول - بنر بالای صغحه</option>
                                    <option value="2">بخش دوم - آیتم های مزایا</option>
                                    <option value="3">بخش سوم - درباره ما</option>
                                    <option value="4">بخش چهارم - نمونه کارها</option>
                                    <option value="5">بخش پنجم - مزیت ها</option>
                                    <option value="6">بخش ششم - ویژگی ها</option>
                                    <option value="7">بخش هفتم - نطرات مشتری</option>
                                    <option value="8">بخش هشتم - اسلایدر نطرات مشتری</option>
                                    <option value="9">بخش نهم - وبلاگ</option>
                                    <option value="10">بخش دهم - تماس ها</option>
                                    {{-- <option value="11">بخش یازدهم - فورم تماس</option> --}}
                                    <option value="12" >بخش دوازدهم - سوالات متداول</option>

                                </select>
                            </div>
                        </div>

                        <div id="content_type" class="col-lg-12" >
                            <div class="form-group form-group-post">
                                {{ Form::label('sort', 'نوع آیتم') }}
                                <select name="sort" id="sort" class="form-control" onchange="content_form_show()">
                                    <option value="" selected>انتخاب کنید</option>
                                    <option value="1">عنوان بخش</option>
                                    <option value="2">محتوا بخش</option>
                                    <option value="3">دکمه</option>
                                </select>
                            </div>
                            <h6 id="description_help"></h6>
                        </div>

                        <div id="content_box" class="col-12 mt-4">
                            <div class="row">

                                <div class="col-lg-9">
                                    <div class="form-group">
                                        {{ Form::label('title', 'متن کوتاه *') }}
                                        {{ Form::text('title', '', array('class' => 'form-control')) }}
                                    </div>
                                </div>
        
                                <div class="col-lg">
                                    <div class="form-group">
                                        {{ Form::label('color', 'رنگ متن') }}
                                        <input type="color" name="color" id="color" value="" class="form-control my-2">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('link', ' اگر لینک دارد , لینک کامل را وارد کنید ') }}
                                        {{ Form::text('link', '', array('class' => 'form-control')) }}
                                    </div>
                                </div>
        
                                <div class="col-lg-12">
                                    <div class="form-group form-group-post">
                                        {{ Form::textarea('description', '', array('class' => 'form-control textarea')) }}
                                    </div>
                                </div>
        
                                <div class="col-lg-12">
                                    {{ Form::label('title', 'تصویر') }}
                                    <input type="file" name="pic" id="pic" class="form-control">
                                </div>
        
                                <div class="col-lg-6">
                                    <div class="form-group form-group-post">
                                        {{ Form::label('status', 'وضعیت') }}
                                        <select name="status" id="status" class="form-control">
                                            <option value="active" selected>فعال</option>
                                            <option value="pending">غیرفعال</option>
                                        </select>
                                    </div>
                                </div>
        
                                <div class="col-lg-6">
                                    <div class="form-group form-group-post">
                                        {{ Form::label('part', 'ترتیب نمایش') }}
                                        {{ Form::number('part', 99, array('class' => 'form-control' , 'required' => 'required')) }}
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                    <a href="{{ URL::previous() }}" class="btn btn-rounded btn-secondary float-right">
                        <i class="fa fa-chevron-circle-right ml-1"></i>بازگشت</a>
                    {{ Form::button('<i class="fa fa-circle-o mtp-1 ml-1"></i>افزودن', array('id' => 'submit_content_form' , 'type' => 'submit', 'class' => 'btn btn-rounded btn-primary float-left')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>

    @endslot
    @push('scripts')

        <script type="text/javascript" src="{{asset('js/editir.min.js')}}"></script>

        <script> $(function () {
                slug('#title', '#slug');


                $('.textarea').froalaEditor({
                    imageMove: true,
                    imageUploadMethod: 'post',
                    imageUploadURL: '{{url('upload.php')}}',
                    imageManagerLoadURL: '{{url('load_image.php')}}',
                    imageDeleteURL: '{{url('delete_image.php')}}',
                    imageUploadParams: {
                        id: 'my_editor'
                    },
                    htmlAllowedTags: ['.*'],   // Changed this to all tags
                    htmlRemoveTags: [''],   // Added this
                    fullPage: true,   // Added this
                    lineBreakerTags: [''],   // Added this, not sure if it does anything yet
                    linkAlwaysBlank: true   // Added this
                });
            });
        </script>

        <script>
            function content_form_show() {
                document.getElementById('content_box').style.display = 'block';
                document.getElementById('submit_content_form').style.display = 'block';
                var type = document.getElementById("sort").value;
             
                if(type==1) {
                    document.getElementById("description_help").innerHTML = 'در این حالت ایپوت متن کوتاه میشود عنوان آبی رنگ و تکست اریا میشود متن زیر عنوان آبی رنگ و اگر بخش انتخابی تصویر هم نیاز دارد از ایپوت تصویر برای درج تصویر استفاده شود و برای تغییر رنگ عنوان آبی رنگ از رنگ متن استفاده کنید ';
                } else if(type==2) {
                    document.getElementById("description_help").innerHTML = 'بعد از درج عنوان هر بخش محتوای بخش نمایش داده میشود که شامل متن کوتاه برای عنوان محتوا که الزامی است و درصورت نیاز تکست اریا برای توضیحات محتوا و درصورت نیاز تصویر محتوا میباشد';
                } else if(type==3) {
                    document.getElementById("description_help").innerHTML = 'دکمه ها در بخش اول , سوم و یازدهم به کار میروند. برای ایجاد دکمه بعد از انتخاب بخش از متن کوتاه و رنگ استفاده کنید و برای انتقال کرسوال از ایپوت ترتیب استفاده کنید';
                }
            }
        </script>
    @endpush
@endcomponent