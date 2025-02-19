{{-- <!--begin::Header-->
<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <nav class="d-flex align-items-center align-items-center position-relative"
        style="background: linear-gradient(to right, #182A2C 15%, #F40C34 50%); z-index: 50; height: 75px;">
        <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
            id="#kt_header_menu" data-kt-menu="true">
            <div class="text-center">
                <a href="{{ url('/') }}">
<img src="{{ asset('media/dpn/Logo DPN_atmosphere tulisan putih-14.png') }}" alt="Logo" class="me-20" style="max-height: 60px; padding-left: 10%">
</a>
</div>

<div class="d-flex align-items-center">
    <!--begin:Menu item-->
    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
        <!--begin:Menu link-->
        <span class="menu-link py-3">
            <span class="menu-title" style="font-size: medium; color: white;">Profil</span>
            <span class="menu-arrow d-lg-none"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link py-3" href="{{ url('/strukturOrganisasi') }}"
                    title="Struktur Organisasi dari Dewan Pertahanan Nasional Republik Indonesia"
                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                    data-bs-placement="right">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-people">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                    </span>
                    <span class="menu-title">Struktur Organisasi</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link py-3" href="" target="_blank"
                    title="Lihat Visi & Misi dari Dewan Pertahanan Nasional Republik Indonesia"
                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                    data-bs-placement="right">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-abstract-12">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Visi & Misi</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link py-3" href=""
                    title="Lihat Tugas & Fungsi dari Dewan Pertahanan Nasional Republik Indonesia"
                    data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                    data-bs-placement="right">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-office-bag">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span class="menu-title">Tugas & Fungsi</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
        </div>
        <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->
</div>

<div class="d-flex align-items-center">
    <a href="https://analitika.fisipol.unesa.ac.id/" class="nav-link"
        style="font-size: medium; color: white;">Geo-Int</a>
</div>
</div>
</nav>
<!--end::Container-->
</div>
<!--end::Header--> --}}

<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}"
    style="animation-duration: 0.3s; background: linear-gradient(to right, #182A2C 15%, #F40C34 50%); z-index: 50; height: 75px;">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center ">
            <!--begin::Logo-->
            <div class="d-flex align-items-center ">
                <!--begin::Mobile menu toggle-->
                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2hx">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
                <!--end::Mobile menu toggle-->
                <!--begin::Logo image-->
                <a href="{{ url('/') }}">
                    <img alt="Logo" src="{{ asset('media/dpn/Logo DPN_atmosphere tulisan putih-14.png') }}"
                        class="logo-default h-25px h-lg-200px">
                    <img alt="Logo" src="{{ asset('media/dpn/Logo DPN_atmosphere tulisan putih-14.png') }}"
                        class="logo-sticky h-20px h-lg-200px">
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo-->
            <!--begin::Menu wrapper-->
            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
                        id="#kt_header_menu" data-kt-menu="true">

                        <div class="d-flex align-items-center">
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="bottom-start"
                                class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                <!--begin:Menu link-->
                                <span class="menu-link py-3">
                                    <span class="menu-title" style="font-size: medium; color: white;">Profil</span>
                                    <span class="menu-arrow d-lg-none"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div
                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="{{ url('/strukturOrganisasi') }}"
                                            title="Struktur Organisasi dari Dewan Pertahanan Nasional Republik Indonesia"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-people">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Struktur Organisasi</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href="" target="_blank"
                                            title="Lihat Visi & Misi dari Dewan Pertahanan Nasional Republik Indonesia"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-abstract-12">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Visi & Misi</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link py-3" href=""
                                            title="Lihat Tugas & Fungsi dari Dewan Pertahanan Nasional Republik Indonesia"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon">
                                                <i class="ki-duotone ki-office-bag">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </span>
                                            <span class="menu-title">Tugas & Fungsi</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                        </div>

                        <div class="d-flex align-items-center">
                            <a href="https://analitika.fisipol.unesa.ac.id/" class="nav-link"
                                style="font-size: medium; color: white;">Geo-Int</a>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Menu wrapper-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>