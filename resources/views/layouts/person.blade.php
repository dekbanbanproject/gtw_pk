<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Gotowin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="gtw-backoffice">
    <meta name="author" content="backoffice">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="gtw-backoffice">
    <meta property="og:site_name" content="gtw">
    <meta property="og:description" content="gtw-backoffice">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('asset/media/favicons/logo_cir.png') }}">

    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('asset/media/favicons/logo_cir.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('asset/media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('asset/css/dashmix.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/js/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
    {{-- <link rel="stylesheet" href="{{ asset('assets/js/sweetalert2/sweetalert2.min.css') }}">
    <script src="{{ asset('assets/js/sweetalert2/sweetalert2.all.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.0/sweetalert2.min.js"
        integrity="sha512-33a7z5UWvWHAxBi0waVWN71V1WSXylTH1Iier1lEZdKxvE4RdoYkOKWazVr9av5O1GS6aaOcE3nUB3sPQRA7Jg=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.0/sweetalert2.min.css"
        integrity="sha512-EeZYT52DgUwGU45iNoywycYyJW/C2irAZhp2RZAA0X4KtgE4XbqUl9zXydANcIlEuF+BXpsooxzkPW081bqoBQ=="
        crossorigin="anonymous" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Kanit&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/styledis.css') }}">
    <link rel="stylesheet" href="{{asset('css/stylesl.css')}}">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->

    <!-- cdn ???????????????????????????????????? ??????????????????????????? ?????????????????????????????????????????????????????? bootstarp ????????? jquery ???????????????????????? ??????????????????????????????????????????????????????????????? -->
    <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> -->
    <!-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> -->
    <!-- <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> -->
    
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('asset/js/plugins/select2/css/select2.min.css')}}">
    <!-- sweet alert2 -->
    <link rel="stylesheet" href="{{asset('asset/js/plugins/sweetalert2/sweetalert2.min.css')}}">
    <!-- END Stylesheets -->
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-size: 12px;
            font-size: 1.2rem;

        }

        input {
            font-size: 1.5em;

        }
    </style>
    <style>
        .fix {
            position: fixed;
            width: 100%;
            z-index: 5;
        }
    </style>
    @yield('css_before')
</head>

<body>

    <div id="page-container" class="page-header-dark main-content-boxed page-header-fixed">

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Logo -->

                    <a class="link-fx font-size-lg font-w600 text-white" href="">
                        <i class="fa fa-1.5x fa-users text-warning"></i>
                        <span class="text-white-50"></span><span class="text-white"
                            style="font-weight: normal;font-family: 'Kanit', sans-serif;">?????????????????????</span>
                    </a>
                    <!-- END Logo -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div>
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block"
                                style=" font-family: 'Kanit', sans-serif; font-weight: normal;">{{ Auth::user()->name }}
                            </span>
                            <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                            <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                                User Options
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-user mr-1"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="far fa-fw fa-file-alt mr-1"></i> Invoices
                                </a>
                                <div role="separator" class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout"
                                    data-action="side_overlay_toggle">
                                    <i class="far fa-fw fa-building mr-1"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>



                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-header-dark">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-primary" data-toggle="layout"
                                    data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="Search your websites.."
                                id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-2x fa-spinner fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Navigation -->
            <div class="bg-white fix">
                <div>
                    <!-- Toggle Main Navigation -->
                    <div class="d-lg-none push">
                        <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                        <button type="button"
                            class="btn btn-block btn-light d-flex justify-content-between align-items-center"
                            data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                            Menu
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- END Toggle Main Navigation -->

                    <!-- Main Navigation -->
                    <div id="main-navigation" class="d-none d-lg-block ">

                        <ul class="nav-main nav-main-horizontal nav-main-hover ">
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_person/dashboard') ? ' active' : '' }}"
                                    href="{{ url('manager_person/dashboard') }}">
                                    <i class="nav-main-link-icon fa fa-chart-pie"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">Dashboard</span>

                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_person/carcalendar') ? ' active' : '' }}"
                                    href="{{ url('manager_person/carcalendar') }}">
                                    <i class="nav-main-link-icon fa fa-calendar-alt"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">??????????????????</span>

                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_person/inforperson') ? ' active' : '' }}"
                                    href="{{ url('manager_person/inforperson') }}">
                                    <i class="nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">???????????????????????????????????????</span>

                                </a>
                            </li>

                            <li class="nav-main-item">

                                <a class="nav-main-link{{ request()->is('manager_person/persondevreport') ? ' active' : '' }}"
                                    href="{{ url('manager_person/persondevreport') }}">
                                    <i class="nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">????????????????????????????????????????????????</span>

                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_person/inforperson_meetinginside') ? ' active' : '' }}"
                                    href="{{ url('manager_person/inforperson_meetinginside') }}">
                                    <i class="nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">?????????????????????????????????????????????</span>

                                </a>
                            </li>
                            {{-- <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_person/jobdescriptions/personnel*') ? ' active' : '' }}"
                                    href="{{ route('mperson.jobdescriptions_personnel') }}">
                                    <i class="nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">Job Descripton</span>
                                </a>
                            </li> --}}
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu {{request()->is('manager_person/setup/infowork*')?'active':''}}" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-cogs"></i>
                                    <span class="nav-main-link-name">???????????????????????????????????????</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <div class="nav-main-item-title">??????????????????????????????????????????</div></li>
                                    <li class="nav-main-item">
                                        <div role="separator" class="dropdown-divider"></div>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{request()->is('manager_person/setup/infowork/kpi*')?'active':''}}" href="{{ route('mperson.setinfo_kpi') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">??????????????????????????? (KPI)</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{request()->is('manager_person/setup/infowork/job_description*')?'active':''}}" href="{{ route('mperson.setinfo_jobd') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">Job description</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{request()->is('manager_person/setup/infowork/permission_job*')?'active':''}}" href="{{ route('mperson.permission_job') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">???????????????????????????????????????????????????????????? KPI</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{request()->is('formpdf/persondevfunction*')?'active':''}}" href="{{ route('form.persondevfunction') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">??????????????????????????????????????????</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_person/jobdescriptions/personnel*') ? ' active' : '' }}"
                                    href="{{ route('mperson.jobdescriptions_personnel') }}">
                                    <i class="nav-main-link-icon fa fa-users"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">Job Descripton</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu {{request()->is('manager_person/setup/infowork*')?'active':''}}" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-cogs"></i>
                                    <span class="nav-main-link-name">???????????????????????????????????????</span>
                                </a>
                                <ul class="nav-main-submenu"> --}}
                                    <!-- 
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ url('manager_person/setupcorecompetency') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name"> Core competency</span>
                                        </a>
                                    </li> 
                                    <li class="nav-main-item">
                                        <a class="nav-main-link"
                                            href="{{ url('manager_person/setupfuntionalcompetency') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name"> Funtional competency</span>
                                        </a>
                                    </li> -->
{{-- 
                                    <li class="nav-main-item">
                                        <div class="nav-main-item-title">??????????????????????????????????????????</div></li>
                                    <li class="nav-main-item">
                                        <div role="separator" class="dropdown-divider"></div>
                                    </li> --}}
                                    <!--
                                    //???????????????????????????????????????
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ url('manager_person/setupkpis') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">??????????????????????????? (KPIs)</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ url('manager_person/setupjobdescription') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">Job description</span>
                                        </a>
                                    </li>
                                    -->
{{-- 
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{request()->is('manager_person/setup/infowork/kpi*')?'active':''}}" href="{{ route('mperson.setinfo_kpi') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">??????????????????????????? (KPI)</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{request()->is('manager_person/setup/infowork/job_description*')?'active':''}}" href="{{ route('mperson.setinfo_jobd') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">Job description</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{request()->is('manager_person/setup/infowork/permission_job*')?'active':''}}" href="{{ route('mperson.permission_job') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name">???????????????????????????????????????????????????????????? KPI</span>
                                        </a>
                                    </li> --}}
                                    <!-- <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ url('manager_person/setupsetscore') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name"> ?????????????????????????????????</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ url('manager_person/setupsetscoreweight') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name"> ??????????????????????????????????????????????????????????????????????????????</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link"
                                            href="{{ url('manager_person/setinforperson_meetinginside') }}">
                                            <i class="nav-main-link-icon fa fa-cog"></i>
                                            <span class="nav-main-link-name"> ?????????????????????????????????????????????</span>
                                        </a>
                                    </li> -->
                                {{-- </ul>
                            </li> --}}

                            <!-- <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_car/carinforefer') ? ' active' : '' }}"
                                    href="">
                                    <i class="nav-main-link-icon fa fa-ambulance"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;"></span>

                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_car/infomationcar') ? ' active' : '' }}"
                                    href="">
                                    <i class="nav-main-link-icon fa fa-paste"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;"></span>

                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_car/') ? ' active' : '' }}" href="">
                                    <i class="nav-main-link-icon fa fa-cogs"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;"></span>

                                </a>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_car/report') ? ' active' : '' }}"
                                    href="">
                                    <i class="nav-main-link-icon fa fa-clipboard-list"></i>
                                    <span class="nav-main-link-name"
                                        style="font-size: 14px;font-family: 'Kanit', sans-serif;">??????????????????</span>

                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('manager_book/bookpurchase') ? ' active' : '' }}"
                                    href="{{ url('manager_book/bookpurchase') }}">
                                    <i class="nav-main-link-icon fa fa-money-check-alt"></i>
                                    <span class="nav-main-link-name" style="font-size: 16px;">??????????????????????????????????????????</span>

                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <!-- END Main Navigation -->
                </div>
            </div>
            <!-- END Navigation -->

            <!-- Page Content -->
            <div style="margin-top:50px">
                @yield('content')
            </div>


        </main>
        <!-- END Main Container -->

        <script src="{{ asset('asset/js/dashmix.app.js') }}"></script>
        <!-- Laravel Scaffolding JS -->
        <script src="{{ asset('asset/js/laravel.app.js') }}"></script>
        <script src="{{ asset('js/globalFunction.js') }}"></script>
        <script src="{{ asset('js/formControl.js') }}"></script>
        <script src="{{ asset('google/Charts.js') }}"></script>
        <!-- <script src="{{ asset('select2/select2.min.js') }}"></script> -->
        <script src="{{asset('asset/js/plugins/select2/js/select2.full.min.js')}}"></script>
        <!-- sweet alert2 -->
        <script src="{{asset('asset/js/plugins/es6-promise/es6-promise.auto.min.js')}}"></script>
        <script src="{{asset('asset/js/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <!-- notify -->
        <script src="{{asset('asset/js/plugins/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

        @yield('footer')
</body>

</html>