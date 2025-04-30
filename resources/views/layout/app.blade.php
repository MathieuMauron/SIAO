<!DOCTYPE html>
<html>
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3QDHJ4GB7K"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-3QDHJ4GB7K');
        </script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="body">
            <div class="top">
            <a class="imglogo" href="{{route('home')}}">
                <img class="imglogo1" src="{{asset('img/logo.png')}}"></a>
                @include('layout.navbar')
            </div>
       @yield('content')
       @include('layout.footer')
       <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>