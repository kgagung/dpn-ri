@extends('landing.article.main')

@section('content')
<!--begin::Layout-->
<div class="d-flex flex-column flex-xl-row">
    <!--begin::Content-->
    <div class="flex-lg-row-fluid me-xl-15">
        <!--begin::Post content-->
        <div class="mb-17">
            <!--begin::Wrapper-->
            <div class="mb-8">
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-6">
                    <!--begin::Item-->
                    <div class="me-9 my-1">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-element-11 text-primary fs-2 me-1"></i>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <span class="fw-bold text-gray-400">{{ $articleDate }}</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Info-->
                <!--begin::Title-->
                <a href="#" class="text-dark text-hover-primary fs-2 fw-bold">
                    {{ $articleTitle }}
                    <span class="fw-bold text-muted fs-5 ps-1">5 mins read</span>
                </a>
                <!--end::Title-->
                <!--begin::Container-->
                <div class="overlay mt-8">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                        style="background-image:url('{{ $articleImg }}')">
                    </div>
                    <!--end::Image-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Description-->
            <div class="fs-5 fw-semibold text-gray-600">
                <!--begin::Text-->
                <p class="mb-8" style="text-align: justify;">{!! $content !!}</p>

                <!--end::Text-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Post content-->
    </div>
    <!--end::Content-->
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
        <!-- x-landing.recent-post -->
    </div>
    <!--end::Sidebar-->
</div>
<!--end::Layout-->
@endsection