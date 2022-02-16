<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/unicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.bundle.min.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



</head>

<body class="dark:bg-slate-800">
    {{-- navbar --}}
    @include('frontend.components.navbar')

    {{-- content --}}
    <div class="main">
        @yield('content')


    </div>



    {{-- footer --}}
    @include('frontend.components.footer')


    

</body>

</html>
