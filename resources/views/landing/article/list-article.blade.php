@extends('landing.article.main')

@section('content')
<!--begin::Section-->
<div class="mb-17">
    <!--begin::Content-->
    <div class="d-flex flex-stack mb-5">
        <!--begin::Title-->
        <h3 class="text-dark">{{$pageTitle}}</h3>
        <!--end::Title-->
        <!--begin::Link-->
        {{-- <a href="#" class="fs-6 fw-semibold link-primary">View All Article</a> --}}
        <!--end::Link-->
    </div>
    <!--end::Content-->
    <!--begin::Separator-->
    <div class="separator separator-dashed mb-9"></div>
    <!--end::Separator-->
    <!--begin::Row-->
    <div class="row g-10">
        <!--begin::Col-->
        <div class="col-md-4">
            <!--begin::Feature post-->
            <div class="card-xl-stretch me-md-6">
                <!--begin::Image-->
                <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                    style="background-image: url('{{ asset($image) }}')"
                    data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                    <img src="media/svg/misc/video-play.svg"
                        class="position-absolute top-50 start-50 translate-middle" alt="" />
                </a>
                <!--end::Image-->
                <!--begin::Body-->
                <div class="m-0">
                    <!--begin::Title-->
                    <a href="../../demo55/dist/pages/user-profile/overview.html"
                        class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $newsTitle }}</a>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">{{ $snippet }}</div>
                    <!--end::Text-->
                    <!--begin::Content-->
                    <div class="fs-6 fw-bold">
                        <!--begin::Author-->
                        <a href="../../demo55/dist/pages/user-profile/overview.html"
                            class="text-gray-700 text-hover-primary">{{ $creator }}</a>
                        <!--end::Author-->
                        <!--begin::Date-->
                        <span class="text-muted">on {{ $newsDate}}</span>
                        <!--end::Date-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feature post-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <!--begin::Feature post-->
            <div class="card-xl-stretch mx-md-3">
                <!--begin::Image-->
                <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                    style="background-image:url('{{ $image}}')"
                    data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                    <img src="media/svg/misc/video-play.svg"
                        class="position-absolute top-50 start-50 translate-middle" alt="" />
                </a>
                <!--end::Image-->
                <!--begin::Body-->
                <div class="m-0">
                    <!--begin::Title-->
                    <a href="../../demo55/dist/pages/user-profile/overview.html"
                        class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $newsTitle}}</a>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">{{ $snippet }}</div>
                    <!--end::Text-->
                    <!--begin::Content-->
                    <div class="fs-6 fw-bold">
                        <!--begin::Author-->
                        <a href="../../demo55/dist/pages/user-profile/overview.html"
                            class="text-gray-700 text-hover-primary">{{ $creator }}</a>
                        <!--end::Author-->
                        <!--begin::Date-->
                        <span class="text-muted">on {{ $newsDate }}</span>
                        <!--end::Date-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feature post-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-4">
            <!--begin::Feature post-->
            <div class="card-xl-stretch ms-md-6">
                <!--begin::Image-->
                <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                    style="background-image:url('{{ $image}}')"
                    data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
                    <img src="media/svg/misc/video-play.svg"
                        class="position-absolute top-50 start-50 translate-middle" alt="" />
                </a>
                <!--end::Image-->
                <!--begin::Body-->
                <div class="m-0">
                    <!--begin::Title-->
                    <a href="../../demo55/dist/pages/user-profile/overview.html"
                        class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $newsTitle }}</a>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">{{ $snippet }}</div>
                    <!--end::Text-->
                    <!--begin::Content-->
                    <div class="fs-6 fw-bold">
                        <!--begin::Author-->
                        <a href="../../demo55/dist/pages/user-profile/overview.html"
                            class="text-gray-700 text-hover-primary">{{ $creator }}</a>
                        <!--end::Author-->
                        <!--begin::Date-->
                        <span class="text-muted">on {{ $newsDate }}</span>
                        <!--end::Date-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Feature post-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
</div>
<!--end::Section-->
@endsection