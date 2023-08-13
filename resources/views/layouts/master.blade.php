<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Red Locker'}}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    {{ $style ?? '' }}
</head>
<body>


    @include('layouts.includes.header')

    {{ $slot }}

    @include('layouts.includes.footer')

    <!-- jQuery Library -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <!-- jQuery Main -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    {{ $script ?? '' }}
</body>
</html>

