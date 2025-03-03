@extends('landing.master')

@section('content')

<!--begin::About-->
<div class="mb-18">
    <!--begin::Wrapper-->
    <div class="mb-10">
        <!--begin::Top-->
        <div class="mb-15">
            <!--begin::Title-->
            <h1 class="fs-3x text-dark mb-6">Visi dan Misi</h1>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="fs-3 text-gray-600 fw-semibold" style="text-align: justify;">
                <h1>Visi</h1>
                <p style="font-style: italic;">"Mewujudkan kebijakan pertahanan nasional yang strategis, terintegrasi, dan adaptif dalam rangka menjaga kedaulatan negara, keutuhan wilayah, serta keselamatan bangsa di tengah dinamika global dan tantangan pertahanan yang terus berkembang."
                </p>

                <br>
                <hr><br>

                <h1>Misi</h1>
                <ol>
                    <li><span style="font-weight: bold;">Menyusun Kebijakan Strategis</span><br>
                        <p>Merumuskan kebijakan pertahanan nasional yang terpadu, berbasis kajian strategis, serta selaras dengan kepentingan nasional untuk menghadapi ancaman dalam berbagai dimensi.</p>
                    </li>
                    <li><span style="font-weight: bold;">Menyelaraskan Geostrategi, Geopolitik, dan Geoekonomi</span><br>
                        <p>Mengembangkan solusi kebijakan yang mempertimbangkan faktor geostrategi, geopolitik, dan geoekonomi guna mendukung ketahanan nasional dan memperkuat posisi Indonesia dalam percaturan global.</p>
                    </li>
                    <li><span style="font-weight: bold;">Meningkatkan Sinergi Antar Lembaga</span><br>
                        <p>Mengkoordinasikan dan mengharmonisasikan kebijakan pertahanan dengan kementerian/lembaga terkait serta unsur masyarakat dalam rangka mewujudkan pertahanan yang efektif dan efisien.</p>
                    </li>
                    <li><span style="font-weight: bold;">Mengoptimalkan Mobilisasi dan Demobilisasi Komponen Pertahanan</span><br>
                        <p>Menyusun kebijakan mengenai pengerahan dan pembinaan komponen pertahanan negara untuk meningkatkan kesiapan dalam menghadapi ancaman serta memperkuat sistem pertahanan nasional.</p>
                    </li>
                    <li><span style="font-weight: bold;">Melaksanakan Evaluasi dan Penguatan Kebijakan Pertahanan</span><br>
                        <p>Melakukan analisis, penilaian risiko, serta penyempurnaan kebijakan pertahanan secara berkala guna memastikan kesiapan dan ketahanan nasional terhadap ancaman yang dinamis.</p>
                    </li>
                    <li><span style="font-weight: bold;">Menjalankan Administrasi Dewan Pertahanan Nasional Secara Efektif</span><br>
                        <p>Mengelola dan mengoptimalkan peran Dewan Pertahanan Nasional dalam memberikan rekomendasi dan pertimbangan kebijakan kepada Presiden untuk meningkatkan kualitas pengambilan keputusan di bidang pertahanan nasional.</p>
                    </li>
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