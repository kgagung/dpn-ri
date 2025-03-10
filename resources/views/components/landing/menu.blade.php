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
                    <img alt="Logo" src="{{ asset('media/dpn/Logo DPN.png') }}"
                        class="logo-default h-25px h-lg-70px">
                    <img alt="Logo" src="{{ asset('media/dpn/Logo DPN.png') }}"
                        class="logo-sticky h-20px h-lg-70px">
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
                                class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                                <!--begin:Menu link-->
                                <span class="menu-link" style="padding: 0;">
                                    <span class="menu-title px-5" style="font-size: medium; color: white;">Profil</span>
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
                                        <a class="menu-link py-3" href="{{ url('/visiMisi') }}"
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
                                        <a class="menu-link py-3" href="{{ url('/tugasFungsi') }}"
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
                        <!--begin:Menu item-->
                        <div class="d-flex align-items-center px-5">
                            <a href="https://analitika.fisipol.unesa.ac.id/" class="nav-link"
                                style="font-size: medium; color: white;">Unit Informatika</a>
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="d-flex align-items-center px-5">
                            <a href="{{ url('/layanan') }}" class="nav-link"
                                style="font-size: medium; color: white;">Layanan</a>
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Login Button-->
            <div class="ms-auto">
                @auth
                <div class="dropdown">
                    <button class="menu-title btn dropdown-toggle" style="font-size: medium; color: white;" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <a href="{{ url('/login') }}" class="nav-link" style="font-size: medium; color: white;">Login</a>
                @endauth
            </div>
            <!--end::Login Button-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>