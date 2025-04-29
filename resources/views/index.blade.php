<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="" />
	<title>Dewan Pertahanan Nasional Republik Indonesia</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="" />
	<meta name="keywords"
		content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Dewan Pertahanan Nasional - Republik Indonesia" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="{{ asset('media/dpn/Logo DPN.ico') }}" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
	<!-- Leaflet CSS -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
	<script>
		// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
	</script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-body position-relative">
	<div class="d-flex flex-column flex-root">
		<!--begin::Header Section-->
		<div class="mb-0" id="home">
			<!--begin::Wrapper-->
			<div class="bgi-size-cover bgi-position-x-center bgi-position-y-center position-relative">
				<x-landing.menu />

				<x-landing.carousel-header />
			</div>
			<!--end::Wrapper-->
			<!--begin::Curve bottom-->
			<div class="landing-curve mb-10 mb-lg-20">
				<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
						fill="#182A2C"></path>
				</svg>
			</div>
			<!--end::Curve bottom-->
		</div>
		<!--end::Header Section-->
		<!--begin::Projects Section-->
		<div class="mb-lg-n15 position-relative z-index-2">
			<!--begin::Container-->
			<div class="container">
				<!--begin::Card-->
				<div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
					<!--begin::Card body-->
					<div class="card-body p-lg-20">
						<!--begin::Tabs wrapper-->
						<!-- <div class="d-flex flex-center mb-5 mb-lg-15">
								
								<ul class="nav border-transparent flex-center fs-5 fw-bold">
									<li class="nav-item">
										<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Latest</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Web Design</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">Mobile Apps</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_development">Development</a>
									</li>
								</ul>
								
							</div> -->
						<!--end::Tabs wrapper-->
						<!--begin::Tabs content-->
						<!--begin::Content-->
						<div class="mb-17">
							<!--begin::Content-->
							<div class="d-flex flex-stack mb-5">
								<!--begin::Title-->
								<h3 class="fs-2hx text-dark mb-5" id="portfolio"
									data-kt-scroll-offset="{default: 100, lg: 250}">{{$pageTitle}}</h3>
								<!--end::Title-->
								<!--begin::Link-->
								<a href="{{ url('/article') }}" class="fs-6 fw-semibold link-primary">View All
									Article</a>
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
											style="background-image: url('{{ $news['image'] }}')"
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
						</div>
						<!--end::Content-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Projects Section-->
		<!--begin::Statistics Section-->
		<div class="mt-sm-n10">
			<!--begin::Curve top-->
			<div class="landing-curve" style="color: #182A2C;">
				<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
						fill="currentColor"></path>
				</svg>
			</div>
			<!--end::Curve top-->
			<!--begin::Wrapper-->
			<div class="pb-15 pt-18">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mt-15 mb-3" id="achievements"
						data-kt-scroll-offset="{default: 100, lg: 150}">
						<!--begin::Title-->
						<h3 class="fs-2hx text-black fw-bold mb-5">Persebaran Batalyon</h3>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="fs-5 text-gray-700 fw-bold">Persebaran Batalyon yang terletak di seluruh Indonesia
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<div class="card card-custom gutter-b">
						<div class="card-body">
							<div id="kt_leaflet_6" style="height:500px;"></div>
						</div>
					</div>
				</div>
				<!--end::Container-->
			</div>

			<!--end::Wrapper-->

			<x-landing.footer />
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<i class="ki-duotone ki-arrow-up">
					<span class="path1"></span>
					<span class="path2"></span>
				</i>
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<i class="ki-duotone ki-arrow-up">
				<span class="path1"></span>
				<span class="path2"></span>
			</i>
		</div>
		<!--end::Scrolltop-->
		<!--begin::Javascript-->
		<script>
			var hostUrl = "{{ asset('') }}";
		</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>
		<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('js/custom/widgets.js') }}"></script>
		<script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/new-target.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

		<script>
			// Class definition
			var KTLeaflet = function() {
				var demo6 = function() {
					fetch('/api/batalyon-maps')
						.then(res => res.json())
						.then(data => {
							if (data.length === 0) {
								console.error('Tidak ada data titik batalyon');
								return;
							}

							// Init map
							var leaflet = new L.Map('kt_leaflet_6', {
								zoom: 5,
								center: new L.latLng(-2.5489, 118.0149) // Koordinat Indonesia
							});

							leaflet.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'));

							L.control.scale().addTo(leaflet);

							var leafletIcon = L.divIcon({
								html: `<span class="svg-icon svg-icon-danger svg-icon-3x">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5
								C20,12.8325623 17.8236613,16.03566 13.470984,
								20.1092932 C12.9154018,20.6292577 12.0585054,
								20.6508331 11.4774555,20.1594925 C7.15915182,
								16.5078313 5,13.2880005 5,10.5 Z M12.5,12
								C13.8807119,12 15,10.8807119 15,9.5
								C15,8.11928813 13.8807119,7 12.5,7
								C11.1192881,7 10,8.11928813 10,9.5
								C10,10.8807119 11.1192881,12 12.5,12 Z"
								fill="#000000" fill-rule="nonzero"/>
							</g>
						</svg></span>`,
								iconAnchor: [20, 37],
								popupAnchor: [0, -37],
								className: 'leaflet-marker'
							});

							data.forEach(function(item) {
								// Tukar urutan koordinat jadi [lat, lng]
								const correctedLoc = [item.loc[1], item.loc[0]];

								const marker = L.marker(correctedLoc, {
									icon: leafletIcon
								}).addTo(leaflet);

								marker.bindPopup(`<strong>Lokasi: ${item.WADMKK}, ${item.WADMPR}</strong><br>Kelas Produksi: ${item.Kelas_To_5}`, {
									closeButton: false
								});
							});
						})
						.catch(err => {
							console.error("Gagal memuat data titik batalyon:", err);
						});
				}

				return {
					init: function() {
						demo6();
					}
				};
			}();

			jQuery(document).ready(function() {
				KTLeaflet.init();
			});
		</script>
</body>
<!--end::Body-->

</html>