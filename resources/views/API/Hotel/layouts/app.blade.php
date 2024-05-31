<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sorently Setenium Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href=" {{asset('hotel/css/bootstrap.min.css')}} " type="text/css">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('hotel/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('hotel/css/style.css')}}" type="text/css"> 
    {{-- Sweetalert2 --}}
    <link rel="stylesheet" href="{{asset('adminlte/plugins/sweetalert2/sweetalert2.min.css')}}">
</head>
<body>

    

    @yield('content')



    <!-- Js Plugins -->
    <script src="{{asset('hotel/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('hotel/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('hotel/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('hotel/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('hotel/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('hotel/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('hotel/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('hotel/js/main.js')}}"></script>
    {{-- Sweetalert2 --}}
    <script src="{{asset('adminlte/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>
    
    @extends('layouts.statusPopUp')
</body>
   

</html>