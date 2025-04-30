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
        @foreach($newsList as $news)
        <div class="col-md-4">
            <div class="card-xl-stretch me-md-6">
                <!--begin::Image-->
                <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5"
                    style="background-image: url('{{ asset($news['image']) }}')"
                    href="{{ route('news.show', $news['slug']) }}">
                </a>
                <!--end::Image-->
                <!--begin::Body-->
                <div class="m-0">
                    <!--begin::Title-->
                    <a href="{{ url('/article/' . Str::slug($news['title'])) }}"
                        class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $news['title'] }}</a>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">
                        {{ $news['snippet']}}
                    </div>
                    <!--end::Text-->
                    <!--begin::Content-->
                    <div class="fs-6 fw-bold">
                        <!--begin::Author-->
                        <a href="{{ url('/article/' . Str::slug($news['title'])) }}"
                            class="text-gray-700 text-hover-primary">Admin</a>
                        <!--end::Author-->
                        <!--begin::Date-->
                        <span class="text-muted">on {{ date('M d, Y', strtotime($news['newsDate'])) }}</span>
                        <!--end::Date-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Body-->
            </div>
        </div>
        @endforeach
    </div>
    <!--end::Row-->
    <!-- Pagination -->
    <ul class="pagination">
        {{-- Tombol Previous --}}
        @if ($pagination->onFirstPage())
        <li class="page-item disabled"><a href="#" class="page-link"><i class="previous"></i></a></li>
        @else
        <li class="page-item"><a href="{{ $pagination->previousPageUrl() }}" class="page-link"><i class="previous"></i></a></li>
        @endif

        {{-- Menentukan batas tampilan halaman --}}
        @php
        $totalPages = $pagination->lastPage();
        $currentPage = $pagination->currentPage();
        $startPage = max(1, $currentPage - 2);
        $endPage = min($totalPages, $startPage + 5);

        // Pastikan selalu 6 angka yang ditampilkan jika memungkinkan
        if ($endPage - $startPage < 5) {
            $startPage=max(1, $endPage - 5);
            }
            @endphp

            {{-- Menampilkan nomor halaman yang sudah dibatasi --}}
            @for ($i=$startPage; $i <=$endPage; $i++)
            <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
            <a href="{{ $pagination->url($i) }}" class="page-link">{{ $i }}</a>
            </li>
            @endfor

            {{-- Tombol Next --}}
            @if ($pagination->hasMorePages())
            <li class="page-item"><a href="{{ $pagination->nextPageUrl() }}" class="page-link"><i class="next"></i></a></li>
            @else
            <li class="page-item disabled"><a href="#" class="page-link"><i class="next"></i></a></li>
            @endif
    </ul>
</div>
<!--end::Section-->
@endsection