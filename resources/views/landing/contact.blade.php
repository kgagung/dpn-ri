@extends('landing.master')

@section('content')
<!--begin::Content main-->
<div class="mb-14">
    <!--begin::Heading-->
    <div class="mb-8">
        <!--begin::Title-->
        <h1 class="fs-2x text-dark mb-6">Kantor Pusat</h1>
        <!--end::Title-->
        <!--begin::Address-->
        <div class="fs-3 text-dark mb-6">
            <i class="ki-solid ki-bank text-dark"></i>
            Jl. Medan Merdeka Barat No.15 Jakarta Pusat 10110
        </div>
        <!--end::Address-->
        <!--begin::Telephone-->
        <div class="fs-3 text-dark mb-6">
            <i class="bi bi-telephone-fill text-danger"></i>
            021-12345678
        </div>
        <!--end::Telephone-->
        <!--begin::e-Mail-->
        <div class="fs-3 text-dark mb-6">
            <i class="bi bi-envelope-fill text-warning"></i>
            <a href="mailto:dpn-ri@dpn.go.id">dpn-ri@dpn.go.id</a>
        </div>
        <!--end::e-Mail-->
        <!--begin::Jam Pelayanan-->
        <div class="fs-3 text-dark">
            Jam Pelayanan: <br>
            Senin - Jumat <br>
            Pukul 08.00 - 15.00 WIB
        </div>
        <!--end::Jam Pelayanan-->
    </div>
    <!--end::Heading-->
    <!--begin::Maps-->
    <div id="kt_leaflet_1" style="height:400px;"></div>
    <!--end::Maps-->
</div>
<!--end::Content main-->

@push('scripts_page')
<script>
    // Class definition
    var KTLeaflet = function() {

        // Private functions
        var demo1 = function() {
            // define leaflet
            var leaflet = L.map('kt_leaflet_1', {
                center: [-6.17710726562533, 106.82229877076507],
                zoom: 15
            });

            // set leaflet tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(leaflet);

            // set custom SVG icon marker
            var leafletIcon = L.divIcon({
                html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                bgPos: [10, 10],
                iconAnchor: [20, 37],
                popupAnchor: [0, -37],
                className: 'leaflet-marker'
            });

            // bind marker with popup
            var marker = L.marker([-6.17710726562533, 106.82229877076507], {
                icon: leafletIcon
            }).addTo(leaflet);
            marker.bindPopup("<b>Dewan Pertahanan Nasional</b><br/>Jakarta").openPopup();
        }

        return {
            // public functions
            init: function() {
                // default charts
                demo1();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTLeaflet.init();
    });
</script>
@endpush
@endsection