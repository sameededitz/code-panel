<!doctype html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="bg-theme bg-theme9">

    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('partials.sidebar')
        <!--end sidebar wrapper -->
        <!--start header -->
        @include('partials.navbar')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">

                <!--start page content -->
                @yield('content')
                <!--end page content -->

            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--End Back To Top Button-->
        <footer class="page-footer d-flex justify-content-between align-items-center">
            @php
                $startYear = 2025;
                $currentYear = date('Y');
            @endphp
            <p class="mb-0">
                Copyright ©
                @if ($currentYear == $startYear)
                    {{ $startYear }}
                @elseif ($currentYear > $startYear)
                    {{ $startYear }}-{{ $currentYear }}
                @endif
                . All rights reserved.
            </p>
            <span class="mb-0">
                Made By
                <a href="https://tecclubx.com" class="text-primary" target="_blank">TecClub</a>
            </span>
        </footer>
    </div>
    <!--end wrapper-->

    @include('partials.scripts')
</body>

</html>
