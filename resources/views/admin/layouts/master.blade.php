<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="light"
    data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-body-image="none">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | SNTCSSC Website and Student Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="SNTCSSC" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    <!-- head css -->
    @include('layouts.head-css')
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- top tagbar -->
        @include('layouts.top-tagbar')
        <!-- topbar -->
        @include('layouts.topbar')
        @include('layouts.sidebar')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- footer -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- customizer -->
    @include('layouts.customizer')
    <!-- scripts -->
    @include('layouts.vendor-scripts')

</body>

</html>
