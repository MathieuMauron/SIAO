@extends('layout.app')
@section('content')

        <link rel="stylesheet" href="{{asset("css/menu_deroulant.css")}}">

            <center>
            <div class="mid">
                <h1>Bienvenue sur votre profil, 
                {{Auth::user()->name}}</h1>
                <p>Voici vos informations :</p>
                <div>
                    <p>Nom : {{Auth::user()->name}}</p>
                    <p>Adresse Email : {{Auth::user()->email}}</p>
                    <p>Compte créé le {{Auth::user()->created_at}}</p>
                </div>
                <div class="déconnexion">
                    <a href='{{route("logout")}}'>Déconnexion</a>
                </div>             
            </div>
            </center>
        </div>
        <script src="../Scrip.js"></script>
    </body>
</html>

@endsection