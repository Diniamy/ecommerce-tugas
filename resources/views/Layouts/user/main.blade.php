<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/templates/user/img/fav.png') }}">

    <!-- Author Meta -->
    <meta name="author" content="CodePixar">

    <!-- Meta Description -->
    <meta name="description" content="">

    <!-- Meta Keywords -->
    <meta name="keywords" content="">

    <!-- Meta Character Set -->
    <meta charset="UTF-8">

    <!-- Site Title -->
    <title>Merch Store</title>

    <!-- Include CSS Styles -->
    @include('layouts.user.style')
</head>

<body>
    <!-- Sweet Alert Notification -->
    @include('sweetalert::alert')

    <!-- Navbar -->
    @include('layouts.user.navbar')

    <!-- Content Section -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.user.footer')

    <!-- Include JS Scripts -->
    @include('layouts.user.script')
</body>

</html>