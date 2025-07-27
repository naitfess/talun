<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
	<title>Desa Talun - Not Found</title>
	<meta charset="utf-8" />
	<meta name="description" content="Halaman tidak ditemukan" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:title" content="Desa Talun - Not Found" />
	<link rel="canonical" href="http://preview.keenthemes.comauthentication/general/error-404.html" />
	<link rel="shortcut icon" href="{{ asset('metronic') }}/media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="{{ asset('metronic') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
	<!--begin::Theme mode setup on page load-->
	<style>body { background-image: url('{{ asset('metronic') }}/media/auth/bg9.jpg'); } [data-bs-theme="dark"] body { background-image: url('{{ asset('metronic') }}/media/auth/bg9.jpg'); }</style>
	<!--end::Theme mode setup on page load-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Page bg image-->
		<style>body { background-image: url('{{ asset('metronic') }}/media/auth/bg9.jpg'); } [data-bs-theme="dark"] body { background-image: url('{{ asset('metronic') }}/media/auth/bg9.jpg'); }</style>
		<!--end::Page bg image-->
		<!--begin::Authentication - Signup Welcome Message -->
		<div class="d-flex flex-column flex-center flex-column-fluid">
			<!--begin::Content-->
			<div class="d-flex flex-column flex-center text-center p-10">
				<!--begin::Wrapper-->
				<div class="card card-flush w-lg-650px py-5">
					<div class="card-body py-15 py-lg-20">
						<!--begin::Title-->
						<h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Oops!</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fw-semibold fs-6 text-gray-500 mb-7">Halaman Tidak Ditemukan!</div>
						<!--end::Text-->
						<!--begin::Illustration-->
						<div class="mb-3">
							<img src="{{ asset('metronic') }}/media/auth/404-error.png" class="mw-100 mh-300px theme-light-show" alt="" />
							<img src="{{ asset('metronic') }}/media/auth/404-error-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
						</div>
						<!--end::Illustration-->
						<!--begin::Link-->
						<div class="mb-0">
							<a href="{{ route('beranda') }}" class="btn btn-sm btn-primary">Kembali ke Beranda</a>
						</div>
						<!--end::Link-->
					</div>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Authentication - Signup Welcome Message-->
	</div>
	<!--end::Root-->
	<!--begin::Javascript-->
	<script>var hostUrl = "{{ asset('metronic') }}/";</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="{{ asset('metronic') }}/plugins/global/plugins.bundle.js"></script>
	<script src="{{ asset('metronic') }}/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--end::Javascript-->
</body>
<!--end::Body-->
</html>