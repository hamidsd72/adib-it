@component('layouts.back')
    @slot('title') افزودن {{ $title }} @endslot
    @slot('body')


        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
              type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

        <!-- Include Editor style. -->
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet"
              type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet"
              type="text/css"/>

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
                {{ Form::model($category, array('route' => array('content.update', $category->id), 'method' => 'PATCH' , 'files' => true)) }}
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group form-group-post">
                                {{ Form::label('section', 'محل قرارگیری در قالب') }}
                                <select name="section" id="section" class="form-control" >
                                    <option value="1" {{$category->section==1?'selected':''}} >بخش اول - بنر بالای صغحه</option>
                                    <option value="2" {{$category->section==2?'selected':''}} >بخش دوم - آیتم های مزایا</option>
                                    <option value="3" {{$category->section==3?'selected':''}} >بخش سوم - درباره ما</option>
                                    <option value="4" {{$category->section==4?'selected':''}} >بخش چهارم - نمونه کارها</option>
                                    <option value="5" {{$category->section==5?'selected':''}} >بخش پنجم - مزیت ها</option>
                                    <option value="6" {{$category->section==6?'selected':''}} >بخش ششم - ویژگی ها</option>
                                    <option value="7" {{$category->section==7?'selected':''}} >بخش هفتم - نطرات مشتری</option>
                                    <option value="8" {{$category->section==8?'selected':''}} >بخش هشتم - اسلایدر نطرات مشتری</option>
                                    <option value="9" {{$category->section==9?'selected':''}} >بخش نهم - وبلاگ</option>
                                    <option value="10" {{$category->section==10?'selected':''}} >بخش دهم - تماس ها</option>
                                    <option value="12" {{$category->section==12?'selected':''}} >بخش دوازدهم - سوالات متداول</option>
                                    {{-- <option value="11" {{$category->section==11?'selected':''}} >بخش یازدهم - فورم تماس</option> --}}
                                </select>
                            </div>
                        </div>

                        <div id="content_type" class="col-lg-12" >
                            <div class="form-group form-group-post">
                                {{ Form::label('sort', 'نوع آیتم') }}
                                <select name="sort" id="sort" class="form-control" >
                                    <option value="1" {{$category->sort==1?'selected':''}} >عنوان بخش</option>
                                    <option value="2" {{$category->sort==2?'selected':''}} >محتوا بخش</option>
                                    <option value="3" {{$category->sort==3?'selected':''}} >دکمه</option>
                                </select>
                            </div>
                            <h6 id="description_help"></h6>
                        </div>

                        <div class="col-lg-9">
                            <div class="form-group">
                                {{ Form::label('title', 'متن کوتاه *') }}
                                {{ Form::text('title', null, array('class' => 'form-control')) }}
                            </div>
                        </div>

                        <div class="col-lg">
                            <div class="form-group">
                                {{ Form::label('color', 'رنگ متن') }}
                                <input type="color" name="color" id="color" value="{{$category->color}}" class="form-control my-2">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                {{ Form::label('link', ' اگر لینک دارد , لینک کامل را وارد کنید ') }}
                                {{ Form::text('link', null, array('class' => 'form-control')) }}
                            </div>
                        </div>
        
                        <div class="col-lg-12">
                            <div class="form-group form-group-post">
                                {{ Form::textarea('description', null, array('class' => 'form-control textarea')) }}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            {{ Form::label('title', 'تصویر') }}
                            <input type="file" name="pic" id="pic" class="form-control">
                        </div>
                        @if ($category->pic)
                            <div class="col-lg-6">
                                <img src="{{url($category->pic)}}" alt="banner" height="80px">
                            </div>
                        @endif

                        <div class="col-lg-12"></div>
                        
                        <div class="col-lg-6">
                            <div class="form-group form-group-post">
                                {{ Form::label('status', 'وضعیت') }}
                                <select name="status" id="status" class="form-control">
                                    <option value="active" {{$category->status=='active'?'selected':''}}>فعال</option>
                                    <option value="pending" {{$category->status=='pending'?'selected':''}}>غیرفعال</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group form-group-post">
                                {{ Form::label('part', 'ترتیب نمایش') }}
                                {{ Form::number('part', null, array('class' => 'form-control' , 'required' => 'required')) }}
                            </div>
                        </div>

                    </div>
                    <a href="{{ URL::previous() }}" class="btn btn-rounded btn-secondary float-right">
                        <i class="fa fa-chevron-circle-right ml-1"></i>بازگشت</a>
                    {{ Form::button('<i class="fa fa-circle-o mtp-1 ml-1"></i>ویرایش', array('type' => 'submit', 'class' => 'btn btn-rounded btn-primary float-left')) }}
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

    @endpush
@endcomponent