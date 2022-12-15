<script type="text/javascript" src="{{ url('source/assets/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ url('source/assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ url('source/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('source/assets/js/jgrowl.min.js') }}"></script>
<script src="https://use.fontawesome.com/aa54207244.js"></script>
<script type="text/javascript" src="{{ url('source/assets/js/panel.js') }}"></script>
<script type="text/javascript" src="{{ url('source/assets/js/froala_editor.pkgd.min.js') }}"></script>
<script src="{{asset('source/assets/js/fastselect.standalone.min.js')}}"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

{{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>--}}
{{--<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">--}}

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script src="{{ url('ck_editor/laravel-ckeditor/ckeditor.js') }}"></script>
<script src="{{ url('ck_editor/laravel-ckeditor/adapters/jquery.js') }}"></script>
<script type="text/javascript">
    var textareaOptions = {
        filebrowserImageBrowseUrl: '{{ url('filemanager?type=Images') }}',
        filebrowserImageUploadUrl: '{{ url('filemanager/upload?type=Images&_token=') }}',
        filebrowserBrowseUrl: '{{ url('filemanager?type=Files') }}',
        filebrowserUploadUrl: '{{ url('filemanager/upload?type=Files&_token=') }}',
        language: 'fa'
    };
    $('.textarea').ckeditor(textareaOptions);
    slug('#title', '#slug');
</script>


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
            timer: parseInt('{{count($errors)}}') * 15000,
            timerProgressBar: true,
        })
    });
    @endif
</script>

<script>

    $(function () {

        slug('#title', '#slug');
        {{--$('.textarea').froalaEditor({--}}
        {{--    imageMove: true,--}}
        {{--    imageUploadMethod: 'post',--}}
        {{--    imageUploadURL: '{{url('upload.php')}}',--}}
        {{--    imageManagerLoadURL: '{{url('load_image.php')}}',--}}
        {{--    imageDeleteURL: '{{url('delete_image.php')}}',--}}
        {{--    imageUploadParams: {--}}
        {{--        id: 'my_editor'--}}
        {{--    }--}}
        {{--});--}}


    });
</script>
@stack('scripts')
</body>
</html>
<?php //VisitLog::save();?>
