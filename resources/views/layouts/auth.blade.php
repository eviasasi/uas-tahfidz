<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
    <link rel="stylesheet" href="{{ asset('assets/css/style-mobile.css') }}">
    <style>
        .simple-footer {
            color: white !important;
        }

        .title {
            text-align: center;
        }
    </style>

</head>

<body style="background-color: #4C3575">
    <div id="app">
        @yield('content')


        @include('includes.script')
    </div>

</body>

</html>
