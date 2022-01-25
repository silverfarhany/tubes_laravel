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
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8" />
    <title>Member</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="../theme/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle1036.css?v=2.1.1"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="../theme/demo1/dist/assets/plugins/global/plugins.bundle1036.css?v=2.1.1" rel="stylesheet"
        type="text/css" />
    <link href="../theme/demo1/dist/assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1" rel="stylesheet"
        type="text/css" />
    <link href="../theme/demo1/dist/assets/css/style.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="../theme/demo1/dist/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="../theme/demo1/dist/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="../theme/demo1/dist/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="../theme/demo1/dist/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon"
        href="https://preview.keenthemes.com/keen/theme/demo1/dist/assets/media/logos/favicon.ico" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1070954,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="/home">
            <img alt="Logo" src="https://preview.keenthemes.com/keen/theme/demo1/dist/assets/media/logos/logo-1.svg" />
        </a>
        <!--end::Logo-->


        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Dashboard-->
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-lg-4">
                            </div>
                        </div>
                        <!--end::Row-->

                    </div>
                    <!--end::Menu Container-->
                </div>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--end::Dashboard-->
        </div>
    </div>
</body>
<div class="container">
    <!--begin::Dashboard-->
    <!--begin::Row-->
    <br></br>
    <br></br>
    {{-- {{$person = $session_id_roll }} --}}
    <div class="card card-custom gutter-b">
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bold font-size-h4 text-dark-75">Your score</span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-0">
            <!--begin::Table-->
            <table class="table table-separate">
                <tbody>
                    <tr>
                        <td width="200px">Your Name</td>
                        <td>: {{ $person->name }} </td>
                    </tr>
                    <tr>
                        <td>Your First task Score</td>
                        <td>: {{ $score->week1 }}</td>
                    </tr>
                    <tr>
                        <td>Your Second task score</td>
                        <td>: {{ $score->week2 }}</td>
                    </tr>
                    <tr>
                        <td>Your Third task score</td>
                        <td>: {{ $score->week3 }}</td>
                    </tr>
                    <tr>
                        <td>Your Fourths task score</td>
                        <td>: {{ $score->week4 }}</td>
                    </tr>
                    <tr>
                        <td>Your Final task score</td>
                        <td>: {{ $score->finaltask }}</td>
                    </tr>
                    <tr>
                        <td>Your Final score</td>
                        <td>: {{ $score->finalscore }}</td>
                    </tr>                    
                </tbody>
            </table>
            <!--end::Table-->   
            <br> </br>        
            <a href="/logout" type="submit" class="btn btn-danger">Logout</a>            
            <br> </br>
        
        </div>

    </div>
    {{--@php
        header('content-type:image/jpeg');
        $font = Storage::path('\public\BRUSHSCI.TTF');
        $image = imagecreatefromjpeg(Storage::path('\public\certificate.jpg'));
        $color = imagecolorallocate($image, 19, 21, 22);
        imagettftext($image, 50, 0, 365, 420, $color, $font, $nama);
        $date = '6th may 2020';
        imagettftext($image, 20, 0, 450, 595, $color, Storage::path('\public\AGENCYR.TTF'), $date);
        imagejpeg($image,Storage::path($nama . '.jpg'));
        imagedestroy($image);
        $path = $nama . '.jpg';
    @endphp
    <a src="<?php Storage::path("\public\storage/$path"); ?>"> </a>
</div> --}}

</div>
<footer>
    @extends('footer')
</footer>
