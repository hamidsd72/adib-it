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

        <style>
            .fr-wrapper div:nth-child(1) a {
                visibility: hidden !important;
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
                    {{ Form::open(array('route' => 'product-store', 'method' => 'PUT', 'files' => true)) }}
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('title', 'نام') }}

                                {{ Form::text('title', '', array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('slug', 'نامک') }}

                                {{ Form::text('slug', '', array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="form-group form-group-post">



                                {{ Form::textarea('text', '', array('class' => 'form-control textarea')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group form-group-post">

                                {{ Form::textarea('short_text', '', array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('photo', 'تصویر شاخص') }}

                                {{ Form::file('photo', array('accept' => 'image/*')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('title_page', 'عنوان صفحه') }}

                                {{ Form::text('title_page', '', array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('tags', 'کلمات کلیدی') }}

                                {{ Form::text('tags', '', array('class' => 'form-control')) }}

                            </div>

                        </div>

                        <div class="col-md-12">

                            {{ Form::label('description', 'توضیحات سئو') }}

                            <div class="form-group  form-group-post">

                                {{ Form::textarea('description', '', array('class' => 'form-control', 'size' => '30x2', 'placeholder' => '')) }}



                            </div>

                        </div>

                        {{-- box 2 secion --}}
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part2_title', 'عنوان پارت 2') }}

                                {{ Form::text('part2_title', '', array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::textarea('part2_description', '', array('class' => 'form-control textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                {{ Form::label('part2_photo', 'تصویر پارت 2') }}

                                {{ Form::file('part2_photo', array('accept' => 'image/*')) }}

                            </div>

                        </div>
                        {{-- PART 3 --}}
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part3_title', 'عنوان پارت 3') }}

                                {{ Form::text('part3_title', '', array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::textarea('part3_description', '', array('class' => 'form-control textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        {{-- BOX 4 --}}
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_r_title', 'عنوان پارت 4 (راست)') }}

                                {{ Form::text('part4_r_title', '', array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::textarea('part4_r_description', '', array('class' => 'form-control textarea', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_l1_title', 'عنوان پارت 4 باکس 1 (چپ)') }}

                                {{ Form::text('part4_l1_title', '', array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::label('part4_l1_title', 'توضیحات پارت 4 باکس 1 (چپ)') }}

                                {{ Form::textarea('part4_l1_description', '', array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_l2_title', 'عنوان پارت 4 باکس 2 (چپ)') }}

                                {{ Form::text('part4_l2_title', '', array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::label('part4_l2_title', 'توضیحات پارت 4 باکس 2 (چپ)') }}

                                {{ Form::textarea('part4_l2_description', '', array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group">

                                {{ Form::label('part4_l3_title', 'عنوان پارت 4 باکس 3 (چپ)') }}

                                {{ Form::text('part4_l3_title', '', array('class' => 'form-control')) }}

                            </div>

                        </div>
                        <div class="col-md-12">

                            <div class="form-group form-group-post">

                                {{ Form::label('part4_l3_title', 'توضیحات پارت 4 باکس 3 (چپ)') }}

                                {{ Form::textarea('part4_l3_description', '', array('class' => 'form-control', 'size' => '30x2', 'placeholder' => 'خلاصه نوشته...')) }}

                            </div>

                        </div>

                    </div>
                    <br/>
                    <a href="{{ URL::previous() }}" class="btn btn-rounded btn-secondary float-right"><i
                                class="fa fa-chevron-circle-right ml-1"></i>بازگشت</a>
                    {{ Form::button('<i class="fa fa-circle-o mtp-1 ml-1"></i>افزودن', array('type' => 'submit', 'class' => 'btn btn-rounded btn-primary float-left')) }}
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