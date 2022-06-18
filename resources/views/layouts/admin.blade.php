<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

            @include('includes.navbar')
            @include('includes.sidebar')
            @yield('content')
            @include('includes.footer')

        </div>
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    {{-- @include('sweetalert::alert') --}}


</body>

</html>
