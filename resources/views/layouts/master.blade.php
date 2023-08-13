<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Locker | Hotel Booking</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>


    @include('layouts.includes.header')

    {{ $slot }}

    @include('layouts.includes.footer')

    <!-- jQuery Library -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery Easing -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- jQuery Main -->
    <script src="assets/js/main.js"></script>
</body>
</html>

