<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* import dv.ttf font from public folder */
        @font-face {
            font-family: 'dv';
            src: url('{{URL::to("/")}}/dv.ttf');
        }
        .dv1{
            font-family: 'dv';
            font-size: 30px;
        }
        .dv3{
            font-family: 'dv';
            font-size: 25px;
        }
        .dv2{
            font-family: 'dv';
            font-size: 20px;
        }

    </style>
    <title class="dv">Bas</title>
    <link rel="icon" type="image/png" href="{{URL::to('/')}}/images/Logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="assets/css/Navigation-Clean.css"> --}}
    {{-- <link rel="stylesheet" href="assets/css/styles.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('icons/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-html5-2.0.1/datatables.min.css"/>
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/styles.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/Team-Boxed.css">

</head>

<body style="background-image:url({{URL::to('/')}}/assets/img/bg.png);background-repeat:no-repeat;background-size:cover;">
    @include('navbar')
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.3/b-2.0.1/b-html5-2.0.1/datatables.min.js"></script>

</body>
{{-- <footer>
    @include('footer')
</footer> --}}

@stack('scripts')
</html>