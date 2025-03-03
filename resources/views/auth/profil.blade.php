@extends('layout.app')
@section('content')

        <link rel="stylesheet" href="{{asset("css/menu_deroulant.css")}}">

            <center>
            <div class="mid">
                <h1>Bienvenue sur votre profil, 
                {{Auth::user()->name}}</h1>
                <p>Voici vos informations :</p>
                <div class="déconnexion">
                    <a href="logout.php">Déconnexion</a>
                </div>             
            </div>
            </center>
        </div>
        <script src="../Scrip.js"></script>
        <footer>
            <ul>
                <li>F.A.Q</li>
                <li>Mentions égales</li>
                <li>Conditions générales</li>
                <li><a href="contact@siao115var.com">Nous contacter </a></li>
            </ul>
        </footer>
    </body>
</html>

@endsection