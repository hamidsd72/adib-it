@component('layouts.back')
    @slot('title') افزودن {{ $title }} @endslot
    @slot('body')
        <div class="card">
            <div class="card-header archive-card-header">
                <div class="archive-circle-wrap">
                    <div class="archive-circle">
                        <i class="flaticon-rocket"></i>
                    </div>
                    <h2>افزودن {{ $title }}</h2>
                </div>
            </div>
            <div class="card-body">
                {{ Form::open(array('route' => 'page.store', 'method' => 'POST')) }}
                    <div class="form-group">
                        {{ Form::label('title', 'عنوان') }}
                        {{ Form::text('title', '', array('class' => 'form-control','required' => 'required')) }}
                    </div>
                    <div class="form-group mb-4">
                        {{ Form::label('status', 'وضعیت') }}
                        <select name="status" id="status" class="form-control">
                            <option value="active" selected>فعال</option>
                            <option value="pending">غیرفعال</option>
                        </select>
                    </div>
                    <a href="{{ URL::previous() }}" class="btn btn-rounded btn-secondary float-right"><i class="fa fa-chevron-circle-right ml-1"></i>بازگشت</a>
                    {{ Form::button('<i class="fa fa-circle-o mtp-1 ml-1"></i>افزودن', array('type' => 'submit', 'class' => 'btn btn-rounded btn-primary float-left')) }}
                {{ Form::close() }}
            </div>
        </div>
    @endslot
    @push('scripts')
        <script type="text/javascript">
            slug('#name', '#slug');
        </script>
    @endpush
@endcomponent