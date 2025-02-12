@extends('landing.master')

@section('content')
<!--begin::Container-->
<div class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Card-->
    <div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08));">
        <!--begin::Card body-->
        <div class="card-body p-lg-20">
            <!--begin::Heading-->
            <div class="text-center mb-5 mb-lg-10">
                <!--begin::Title-->
                <h3 class="fs-2hx text-black mb-5" id="portfolio" data-kt-scroll-offset="{default: 100, lg: 250}">Struktur Organisasi</h3>
                <!--end::Title-->
            </div>
            <!--end::Heading-->					
            
            <!-- Pastikan ini adalah flex container -->
            <div class="d-flex justify-content-center align-items-center">
                <img class="w-100" src="{{ asset('media/dpn/Struktur-Organisasi.png') }}" alt="Struktur Organisasi">
            </div>
            
            <!--end::Tabs wrapper-->
        </div>
        <!--end::Card body-->
    </div>
</div>
<!--end::Container-->
@endsection