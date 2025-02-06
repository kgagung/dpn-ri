<!--begin::Page title-->
<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
    <!--begin::Title-->
    <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
        {{$pageTitle}}
    </h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
        <!--begin::Item-->
        @foreach ($breadcrumb as $item)
            @if ($item['url'] == null)
                <li class="breadcrumb-item text-muted">
                    {{$item['name']}}
                </li>
            @else
                <li class="breadcrumb-item text-muted">
                    <a href="{{$item['url']}}">{{$item['name']}}</a>
                </li>
            @endif

            {{-- if loop is not last add bullet --}}
            @if (!$loop->last)
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
            @endif

        @endforeach
    </ul>
    <!--end::Breadcrumb-->
</div>
<!--end::Page title-->