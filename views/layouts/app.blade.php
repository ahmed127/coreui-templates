<html lang="en" >
    <!--begin::Head-->
    <head>
        <base href="">
        <meta charset="utf-8"/>
        <title>{{config('app.name')}}</title>
        <meta name="description" content="Updates and statistics"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!--begin::Fonts-->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <!--end::Fonts-->

        <!--begin::Page Vendors Styles(used by this page)-->
            <link href="{{ asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Page Vendors Styles-->

        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Page Vendors Styles-->

        <!--begin::Global Theme Styles(used by all pages)-->
            <link href="{{ asset('metronic/assets/plugins/global/plugins.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('metronic/assets/css/style.bundle.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Global Theme Styles-->

        <!--begin::Layout Themes(used by all pages)-->
            <link href="{{ asset('metronic/assets/css/themes/layout/header/base/light.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('metronic/assets/css/themes/layout/header/menu/light.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('metronic/assets/css/themes/layout/brand/dark.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
            <link href="{{ asset('metronic/assets/css/themes/layout/aside/dark.css?v=7.0.6') }}" rel="stylesheet" type="text/css"/>
        <!--end::Layout Themes-->

        <link rel="shortcut icon" href="{{ asset('img/4go-white.png') }}"/>

    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    	<!--begin::Main-->
            <!--begin::Header Mobile-->
                <div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed " >
                    <!--begin::Logo-->
                    <a href="index.html">
                        {{-- <img alt="Logo" src="{{asset('metronic/assets/media/logos/logo-light.png')}}"/> --}}
                        <img alt="Logo" src="{{asset('img/4go-white.png')}}" width="50px"/>
                    </a>
                    <!--end::Logo-->

                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center">
                            <!--begin::Aside Mobile Toggle-->
                            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                                <span></span>
                            </button>
                            <!--end::Aside Mobile Toggle-->

                        <!--begin::Topbar Mobile Toggle-->
                        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                            <span class="svg-icon svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </button>
                        <!--end::Topbar Mobile Toggle-->
                    </div>
                    <!--end::Toolbar-->
                </div>
            <!--end::Header Mobile-->
            <div class="d-flex flex-column flex-root">
                <!--begin::Page-->
                <div class="d-flex flex-row flex-column-fluid page">

                    <!--begin::Aside-->
                        @include('layouts.sidebar')
                    <!--end::Aside-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                        <!--begin::Header-->
                            <div id="kt_header" class="header header-fixed">
                                <!--begin::Container-->
                                <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                                        <!--begin::Header Menu Wrapper-->
                                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                        </div>
                                        <!--end::Header Menu Wrapper-->

                                    <!--begin::Topbar-->
                                    <div class="topbar">
                                        <!--begin::Languages-->
                                            <div class="dropdown">
                                                <!--begin::Toggle-->
                                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                                        <img class="h-20px w-20px rounded-sm" src="{{asset('metronic/assets/media/svg/flags/226-united-states.svg')}}" alt=""/>
                                                    </div>
                                                </div>
                                                <!--end::Toggle-->

                                                <!--begin::Dropdown-->
                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                                    <!--begin::Nav-->
                                                        <ul class="navi navi-hover py-4">
                                                            <!--begin::Item-->
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="symbol symbol-20 mr-3">
                                                                        <img src="{{asset('metronic/assets/media/svg/flags/226-united-states.svg')}}" alt=""/>
                                                                    </span>
                                                                    <span class="navi-text">English</span>
                                                                </a>
                                                            </li>
                                                            <!--end::Item-->

                                                            <!--begin::Item-->
                                                            <li class="navi-item active">
                                                                <a href="#" class="navi-link">
                                                                    <span class="symbol symbol-20 mr-3">
                                                                        <img src="{{asset('metronic/assets/media/svg/flags/128-spain.svg')}}" alt=""/>
                                                                    </span>
                                                                    <span class="navi-text">Spanish</span>
                                                                </a>
                                                            </li>
                                                            <!--end::Item-->

                                                            <!--begin::Item-->
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="symbol symbol-20 mr-3">
                                                                        <img src="{{asset('metronic/assets/media/svg/flags/162-germany.svg')}}" alt=""/>
                                                                    </span>
                                                                    <span class="navi-text">German</span>
                                                                </a>
                                                            </li>
                                                            <!--end::Item-->

                                                            <!--begin::Item-->
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="symbol symbol-20 mr-3">
                                                                        <img src="{{asset('metronic/assets/media/svg/flags/063-japan.svg')}}" alt=""/>
                                                                    </span>
                                                                    <span class="navi-text">Japanese</span>
                                                                </a>
                                                            </li>
                                                            <!--end::Item-->

                                                            <!--begin::Item-->
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="symbol symbol-20 mr-3">
                                                                        <img src="{{asset('metronic/assets/media/svg/flags/195-france.svg')}}" alt=""/>
                                                                    </span>
                                                                    <span class="navi-text">French</span>
                                                                </a>
                                                            </li>
                                                            <!--end::Item-->
                                                        </ul>
                                                    <!--end::Nav-->
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                        <!--end::Languages-->

                                        <!--begin::User-->
                                            <div class="topbar-item">
                                                @php
                                                    $admin = auth('admin')->user()->name??'Username';
                                                @endphp
                                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ $admin }}</span>
                                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                                        <span class="symbol-label font-size-h5 font-weight-bold">{{ucfirst(substr($admin ,0,1))}}</span>
                                                    </span>
                                                </div>
                                            </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Topbar-->
                                </div>
                                <!--end::Container-->
                            </div>
                        <!--end::Header-->

                        <!--begin::Content-->
                        <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                            <!--begin::Subheader-->
                            <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                                <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                    <!--begin::Info-->
                                    <div class="d-flex align-items-center flex-wrap mr-1">

                                        <!--begin::Page Heading-->
                                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                                            <!--begin::Page Title-->
                                            {{-- <h5 class="text-dark font-weight-bold my-1 mr-5"> Dashboard </h5> --}}
                                            <!--end::Page Title-->
                                            <!--begin::Breadcrumb-->
                                            @yield('breadcrumb')
                                            <!--end::Breadcrumb-->
                                        </div>
                                        <!--end::Page Heading-->
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Subheader-->

                            <!--begin::Entry-->
                            <div class="d-flex flex-column-fluid">
                                <!--begin::Container-->
                                <div class=" container ">
                                    <!--begin::Dashboard-->
                                    @yield('content')
                                    <!--end::Dashboard-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Entry-->
                        </div>
                        <!--end::Content-->

                        <!--begin::Footer-->
                        <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                            <!--begin::Container-->
                            <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <!--begin::Copyright-->
                                <div class="text-dark order-2 order-md-1">
                                    <span class="text-muted font-weight-bold mr-2">{{date('Y')}}&copy;</span>
                                    <a href="{{ route('home') }}" target="_blank" class="text-dark-75 text-hover-primary">4GO</a>
                                </div>
                                <!--end::Copyright-->

                                <!--begin::Nav-->
                                <div class="nav nav-dark">
                                    <a href="https://www.techvillageco.com/" target="_blanck" class="nav-link pl-0 pr-5">Tech Village</a>
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
        <!--end::Main-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
                        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <!--end::Scrolltop-->

        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        
        <script>

            var KTAppSettings = {
                "breakpoints": {
                    "sm": 576,
                    "md": 768,
                    "lg": 992,
                    "xl": 1200,
                    "xxl": 1400
                },
                "colors": {
                    "theme": {
                        "base": {
                            "white": "#ffffff",
                            "primary": "#3699FF",
                            "secondary": "#E5EAEE",
                            "success": "#1BC5BD",
                            "info": "#8950FC",
                            "warning": "#FFA800",
                            "danger": "#F64E60",
                            "light": "#E4E6EF",
                            "dark": "#181C32"
                        },
                        "light": {
                            "white": "#ffffff",
                            "primary": "#E1F0FF",
                            "secondary": "#EBEDF3",
                            "success": "#C9F7F5",
                            "info": "#EEE5FF",
                            "warning": "#FFF4DE",
                            "danger": "#FFE2E5",
                            "light": "#F3F6F9",
                            "dark": "#D6D6E0"
                        },
                        "inverse": {
                            "white": "#ffffff",
                            "primary": "#ffffff",
                            "secondary": "#3F4254",
                            "success": "#ffffff",
                            "info": "#ffffff",
                            "warning": "#ffffff",
                            "danger": "#ffffff",
                            "light": "#464E5F",
                            "dark": "#ffffff"
                        }
                    },
                    "gray": {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#EBEDF3",
                        "gray-300": "#E4E6EF",
                        "gray-400": "#D1D3E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#7E8299",
                        "gray-700": "#5E6278",
                        "gray-800": "#3F4254",
                        "gray-900": "#181C32"
                    }
                },
                "font-family": "Poppins"
            };

        </script>
        <!--end::Global Config-->

        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="{{asset('metronic/assets/plugins/global/plugins.bundle.js?v=7.0.6')}}"></script>
        <script src="{{asset('metronic/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6')}}"></script>
        <script src="{{asset('metronic/assets/js/scripts.bundle.js?v=7.0.6')}}"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Vendors(used by this page)-->
        <script src="{{asset('metronic/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6')}}"></script>
        <!--end::Page Vendors-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="{{asset('metronic/assets/js/pages/widgets.js?v=7.0.6')}}"></script>
        <!--end::Page Scripts-->

        <!--begin::Page Vendors(used by this page)-->
        <script src="{{asset('metronic/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.6')}}"></script>
        <!--end::Page Vendors-->

        <!--begin::Page Scripts(used by this page)-->
            <script src="{{asset('metronic/assets/js/pages/crud/datatables/basic/scrollable.js?v=7.0.6')}}"></script>
        <!--end::Page Scripts-->

        <script src="{{asset("js/ahmed-back-end-developer.js")}}"></script>

        <script>

            $('.check_inputs').click(function() {
                var targetClasses = $(this).val();
                if ($(this).is(':checked')) {
                    $(targetClasses).attr('checked', true);
                } else {
                    $(targetClasses).attr('checked', false);
                }
            });

        </script>

        @yield('scripts')
</body>
    <!--end::Body-->
    @stack('scripts')
</html>
