@component('layouts.back')
    @slot('title') مدیریت {{ $title }} @endslot
    @slot('body')
        <div class="card">
            <div class="card-header archive-card-header">
                <div class="archive-circle-wrap">
                    <div class="archive-circle">
                        <i class="flaticon-rocket"></i>
                    </div>
                    <h2>لیست {{ $title }} 
                        @if ($id??'')
                            @if ($categories->count())
                                {{$categories->first()->page()?$categories->first()->page()->title:''}}
                            @endif         
                        @endif
                    </h2>
                </div>
            </div>
            <div class="paginate p-3">
                @if ($id??'')
                    <a href="{{ route('content.page.create',$id) }}" class="btn btn-rounded btn-primary"><i class="fa fa-circle-o ml-1"></i>افزودن</a>
                @else
                    <a href="{{ route('content.create') }}" class="btn btn-rounded btn-primary"><i class="fa fa-circle-o ml-1"></i>افزودن</a>
                @endif
            </div>
            <div class="card-body">
                <div class="dd">
                    <ol class="dd-list">
                        @if ($categories)
                            @foreach($categories as $category)
                                <li class="dd-item {{$category->status=='active'?'text-success':'text-danger'}}" data-id="{{ $category->id }}">
                                    <div class="dd-handle">
                                        @unless ($id??'')
                                            {{ $category->page()?$category->page()->title.' - ':' '}}
                                        @endunless
                                        @switch($category->section)
                                            @case(1)
                                                اول - بنر بالای صغحه
                                                @break
                                            @case(2)
                                                دوم - آیتم های مزایا
                                                @break
                                            @case(3)
                                                سوم - درباره ما
                                                @break
                                            @case(4)
                                                چهارم - نمونه کارها
                                                @break
                                            @case(5)
                                                پنجم - مزیت ها
                                                @break
                                            @case(6)
                                                ششم - ویژگی ها
                                                @break
                                            @case(7)
                                                هفتم - نطرات مشتری
                                                @break
                                            @case(8)
                                                هشتم - اسلایدر نطرات مشتری
                                                @break
                                            @case(9)
                                                نهم - وبلاگ
                                                @break
                                            @case(10)
                                                دهم - تماس ها
                                                @break
                                            @case(11)
                                                یازدهم - فورم تماس
                                                @break
                                            @case(12)
                                                دوازدهم - سوالات متداول
                                                @break
                                        @endswitch
                                         - 
                                        @switch($category->sort)
                                            @case(1)
                                                عنوان
                                                @break
                                            @case(2)
                                                محتوا
                                                @break
                                            @case(3)
                                                دکمه
                                                @break
                                        @endswitch
                                        {{' - '.$category->part}}
                                    </div>
                                    <div class="btn-inline">
                                        <a href="{{ route('content.edit', $category->id) }}" class="btn float-left mx-3"><i class="fa fa-edit ml-1"></i>ویرایش</a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['content.destroy', $category->id] ]) !!}
                                        {!! Form::button('<i class="fa fa-ban ml-1"></i>حذف', ['type' => 'submit', 'class' => 'btn btn-danger float-left', 'onclick' => 'return confirm("آیا مطمئن هستید؟")']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    {{-- @include('panel.categories.each', $category) --}}
                                </li>
                            @endforeach
                        @endif
                    </ol>
                </div>
            </div>
        </div>
    @endslot
    @push('scripts')
        <script type="text/javascript" src="{{ asset('js/easing.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/nestable.min.js') }}"></script>
        <script type="text/javascript">
            $('.dd').nestable();
            $('.dd').on('change', function () {
                $.post('{{ route('category-sort') }}', {
                    sort: JSON.stringify($('.dd').nestable('serialize')),
                    _token: '{{ csrf_token() }}'
                }, function () {
                    $.jGrowl('ذخیره شد', {life: 3000, position: 'bottom-right', theme: 'bg-success'});
                });
            });
        </script>
    @endpush
@endcomponent

