<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body id="body">

<!-- Start Top Header Bar -->
    @include('layouts.navbar')
<!-- End Top Header Bar -->


<!-- Main Menu Section -->
    @yield('content')


    @include('layouts.footer')

<!--
Essential Scripts
=====================================-->

<!-- Main jQuery -->
    @include('layouts.script')


</body>
</html>
