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
                {{ Form::open(array('route' => 'category-store', 'method' => 'PUT')) }}
                <div class="form-group">
                    {{ Form::label('name', 'نام') }}
                    {{ Form::text('name', '', array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('slug', 'نامک') }}
                    {{ Form::text('slug', '', array('class' => 'form-control')) }}
                </div>
                <br/>
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