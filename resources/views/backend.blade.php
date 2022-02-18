<!--
=========================================================
* Argon Dashboard 2 - v2.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>
        Penuda Sentrum Bitung | Dashboard
    </title>
    {{-- SELECT - 2 --}}
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link href="{{ asset('assets/css/select2.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/select2.js') }}"></script>


    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ 'assets/css/nucleo-svg.css' }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    {{-- ckeditor --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>



</head>

<body class="g-sidenav-show   bg-gray-300">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    {{-- sidebar --}}
    @include('backend.components.sidebar')



    <main class="main-content position-relative border-radius-lg ">

        @include('backend.components.header')


        <!-- End Navbar -->
        <div class="container-fluid py-4">

            @yield('main')


            @include('backend.components.footer')
        </div>
    </main>


    @include('backend.components.setting')


    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

    
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.0') }}"></script>
</body>

</html>
