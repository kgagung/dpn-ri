@extends('landing.master')

@section('content')

<!--begin::About-->
<div class="mb-18">
    <!--begin::Wrapper-->
    <div class="mb-10">
        <!--begin::Top-->
        <div class="mb-15">
            <!--begin::Title-->
            <h1 class="fs-3x text-dark mb-6">Tugas & Fungsi</h1>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="fs-3 text-gray-600 fw-semibold" style="text-align: justify;">
                <p>Berdasarkan
                    <a href="https://peraturan.bpk.go.id/Details/310783/perpres-no-202-tahun-2024" target="_blank" class="link-primary pe-1">Peraturan Presiden (Perpres) Nomor 202 Tahun 2024</a> tanggal 14 Desember 2024 tentang Dewan Pertahanan Nasional,
                </p>
                <p><span class="text-gray-800 pe-1">Dewan Pertahanan Nasional mempunyai tugas melaksanakan pemberian pertimbangan dan perumusan
                        solusi kebiiakan dalam rangka penetapan kebijakan di bidang pertahanan nasional yang bersifat strategis mencakup kedaulatan negara, keutuhan wilayah, dan keselamatan bangsa.</span>
                </p>
                <p>Dalam melaksanakan tugas sebagaimana dimaksud, DPN menyelenggarakan fungsi:</p>
                <ol>
                    <li>Penyusunan kebijakan terpadu pertahanan negara, sebagai pedoman kementerian/lembaga dan masyarakat dalam melaksanakan tugas dan tanggung jawab masing-masing untuk mendukung penyelenggaraan pertahanan negara;</li>

                    <li>Penyusunan kebijakan terpadu pengerahan komponen
                        pertahanan negara dalam rangka mobilisasi dan
                        demobilisasi;</li>

                    <li>Penilaian risiko kebijakan pertahanan negara;</li>

                    <li>Perumusan solusi kebijakan terkait geostrategi, geopolitik,
                        dan geoekonomi terhadap penyelarasan kebiiakan strategis
                        dan program prioritas di bidang pertahanan nasional;</li>

                    <li>Pelaksanaan administrasi DPN; dan</li>

                    <li>Pelaksanaan fungsi lain yang diberikan oleh Presiden.</li>
                </ol>
            </div>
            <!--end::Text-->
        </div>
        <!--end::Top-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::About-->

@push('scripts_page')
<script>
    document.querySelectorAll("#numbered-paragraphs p").forEach((p, index) => {
        p.innerHTML = (index + 1) + ". " + p.innerHTML;
    });
</script>
@endpush

@endsection