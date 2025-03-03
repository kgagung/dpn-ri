@extends('landing.master')

@section('content')

<style>
    .org-chart {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .box {
        border: 2px solid black;
        padding: 10px;
        min-width: 300px;
        background-color: white;
        font-weight: bold;
    }

    .line {
        height: 20px;
        width: 2px;
        background-color: black;
        margin: 0 auto;
    }

    .horizontal-line {
        width: 80%;
        height: 2px;
        background-color: black;
        margin: 5px auto;
    }

    .dashed-line {
        border-top: 2px dashed black;
        width: 100%;
        margin: 5px 0;
    }

    .row>div {
        display: flex;
        justify-content: center;
    }
</style>
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


            {{--<div class="org-chart">

                <!-- Ketua -->
                <div class="box">KETUA <br> <span class="fw-bold">DEWAN PERTAHANAN NASIONAL</span> <br> <span class="fw-bold">PRESIDEN REPUBLIK INDONESIA</span></div>
                <div class="line"></div>

                <!-- Anggota -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="box text-start">
                            ANGGOTA TETAP DEWAN PERTAHANAN NASIONAL
                            <ul class="mt-2">
                                <li><strong>WAKIL PRESIDEN</strong></li>
                                <li><strong>MENTERI PERTAHANAN</strong></li>
                                <li><strong>MENTERI LUAR NEGERI</strong></li>
                                <li><strong>MENTERI DALAM NEGERI</strong></li>
                                <li><strong>PANGLIMA TENTARA NASIONAL INDONESIA</strong></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box text-start">
                            ANGGOTA TIDAK TETAP DEWAN PERTAHANAN NASIONAL
                            <ul class="mt-2">
                                <li><strong>MENTERI SEKRETARIS NEGARA</strong></li>
                                <li><strong>MENTERI KEUANGAN</strong></li>
                                <li><strong>BADAN INTELIJEN NEGARA</strong></li>
                                <li><strong>KEPALA STAF ANGKATAN</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="line"></div>

                <!-- Ketua Harian -->
                <div class="box">KETUA HARIAN <br> <span class="fw-bold">DEWAN PERTAHANAN NASIONAL</span> <br> <span class="fw-bold">MENTERI PERTAHANAN</span></div>
                <div class="line"></div>

                <!-- Sekretaris & Kelompok Pakar -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">SEKRETARIS DPN <br> <span class="fw-bold">WAKIL MENTERI PERTAHANAN</span></div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">KELOMPOK PAKAR STRATEGIS DAN INDUSTRI PERTAHANAN</div>
                    </div>
                </div>
                <div class="horizontal-line"></div>

                <!-- Deputi Bidang -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">DEPUTI BIDANG GEOSTRATEGI</div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">DEPUTI BIDANG GEOPOLITIK</div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">DEPUTI BIDANG GEOEKONOMI</div>
                    </div>
                </div>
                <!--end::Tabs wrapper-->
            </div>--}}
            <!--end::Card body-->
        </div>
    </div>
    <!--end::Container-->
    @endsection