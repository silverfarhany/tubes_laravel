<!DOCTYPE html>
<!--
Template Name: Keen - The Ultimate Bootstrap 4 HTML Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Support: https://keenthemes.com/theme-support
License: You must have a valid license purchased only from themes.getbootstrap.com(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src= '../../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-5FS8GGP');</script>
		<!-- End Google Tag Manager -->
		<meta charset="utf-8" />
		<title>KoreanCourse | Login </title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="../../../../theme/demo1/dist/assets/css/pages/login/login-21036.css?v=2.1.1" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="../../../../theme/demo1/dist/assets/plugins/global/plugins.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/demo1/dist/assets/css/style.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="../../../../theme/demo1/dist/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/demo1/dist/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/demo1/dist/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="../../../../theme/demo1/dist/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://preview.keenthemes.com/keen/theme/demo1/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
		<script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!-- Google Tag Manager (noscript) -->
		<noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-2 login-signin-on d-flex flex-column flex-column-fluid bg-white position-relative overflow-hidden" id="kt_login">
				<!--begin::Header-->
				<div class="login-header py-10 flex-column-auto">
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
						<!--begin::Logo-->
						<a href="#" class="flex-column-auto py-5 py-md-0">
							<img src="https://preview.keenthemes.com/keen/theme/demo1/dist/assets/media/logos/logo-6.svg" alt="logo" class="h-50px" />
						</a>
						<!--end::Logo-->
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="login-body d-flex flex-column-fluid align-items-stretch justify-content-center">
					<div class="container row">
						<div class="col-lg-6 d-flex align-items-center">
							<!--begin::Signin-->
							<div class="login-form login-signin">
								<!--begin::Form-->
								<form action="/regis" method="post" class="form w-xxl-550px rounded-lg p-20" novalidate="novalidate" id="kt_login_signup_form">
                                @csrf
									<!--begin::Title-->
									<div class="pb-13 pt-lg-0 pt-5">
										<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>										
										<p class="text-muted font-weight-bold font-size-h4">Already have an account?<a href="/"> Back to Login</a></p>
									</div>
									<!--end::Title-->
									@if(session()->has('loginRegister'))
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										{{ session('loginRegister') }}
									</div>
									@endif
									<!--begin::Form group-->
									<div class="form-group ">
										@csrf
										<input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6  @error('fullname') is-invalid @enderror" type="text" placeholder="Full Name" name="fullname" autocomplete="off" />
									</div>
									@error('fullname')
									<div class="alert alert-danger">
										{{ $message }}
									</div>
									@enderror
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group">
										<input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6  @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" autocomplete="off" />
									</div>
									@error('email')
									<div class="alert alert-danger">
										{{ $message }}
									</div>
									@enderror
									<!--end::Form group-->
									
									<!--begin::Form group-->
									<div class="form-group">
										<input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6  @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" autocomplete="off" />
									</div>
									@error('password')
									<div class="alert alert-danger">
										{{ $message }}
									</div>
									@enderror
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group">
										<input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6  @error('cpassword') is-invalid @enderror" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
									</div>
									@error('cpassword')
									<div class="alert alert-danger">
										{{ $message }}
									</div>
									@enderror
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group">
										<div class="checkbox-inline">
											<label class="checkbox">
											<input type="checkbox" name="agree" />
											<span></span>I Agree the 
											<a href="#" class="ml-1">terms and conditions</a>.</label>
										</div>
									</div>
									<!--end::Form group-->
									<!--begin::Form group-->
									<div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
										<button type="submit" id="kt_login_signup_form" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
										<a type="button" href="/" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</a>
									</div>
									<!--end::Form group-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Signin-->
						</div>
						<div class="col-lg-6 bgi-size-contain bgi-no-repeat bgi-position-y-center bgi-position-x-center min-h-150px mt-10 m-md-0" style="background-image: url(https://preview.keenthemes.com/keen/theme/demo1/dist/assets/media/svg/illustrations/accomplishment.svg)"></div>
					</div>
				</div>
				<!--end::Body-->
				<!--begin::Footer-->
				<div class="login-footer py-10 flex-column-auto">
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between">
						<div class="font-size-h6 font-weight-bolder order-2 order-md-1 py-2 py-md-0">
							<span class="text-muted font-weight-bold mr-2">2021©</span>
							<a href="https://keenthemes.com/keen" target="_blank" class="text-dark-50 text-hover-primary">Silverfarhany</a>
						</div>
						<div class="font-size-h5 font-weight-bolder order-1 order-md-2 py-2 py-md-0">
							<a href="#" class="text-primary">Terms</a>
							<a href="#" class="text-primary ml-10">Plans</a>
							<a href="#" class="text-primary ml-10">Contact Us</a>
						</div>
					</div>
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3E97FF", "secondary": "#E5EAEE", "success": "#08D1AD", "info": "#844AFF", "warning": "#F5CE01", "danger": "#FF3D60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#DEEDFF", "secondary": "#EBEDF3", "success": "#D6FBF4", "info": "#6125E1", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="../../../../theme/demo1/dist/assets/plugins/global/plugins.bundle1036.js?v=2.1.1"></script>
		<script src="../../../../theme/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle1036.js?v=2.1.1"></script>
		<script src="../../../../theme/demo1/dist/assets/js/scripts.bundle1036.js?v=2.1.1"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="../../../../theme/demo1/dist/assets/js/pages/custom/login/login1036.js?v=2.1.1"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>