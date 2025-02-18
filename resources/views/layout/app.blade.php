
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title> SIAO 83 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="body">
        @yield('fzehfozef')
            <div class="top">
            <a class="imglogo" href="../accueil/home.php">
                <img class="imglogo1" src="../images/itinova.png"></a> 
                @include('navbar.navbar')
            </div>
            @yield('content')

            @include('footer.footer')
    </body>
</html>
