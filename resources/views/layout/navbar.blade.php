<nav class="nav" id="topNav">   
    <ul>
        <div>
            <div></div>
            <a href="{{route('gouvernance')}}">Gouvernance</a>
            <a href="{{route('equipe')}}">Equipe SIAO/ Pôle d'activités</a>
            <a href="{{route('actualites')}}">Actualité</a>
            <a href="https://basedeconnaissances.sisiao.dihal.gouv.fr/support/utiliser-le-si-siao" target="_blank">Ressources</a>
            <a href="#agenda">Agenda</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <!-- Vérifiez si l'utilisateur est connecté -->
            @auth
            <a href="../connexion/profil.php">Mon Profil {{Auth::user()->name}}</a></li>
            @endauth
                <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                
            @guest
            <a href="{{route('login')}}">Se Connecter/S'inscrire</a></li>
            @endguest
                <!-- Sinon, on affiche le bouton de connexion -->
                
        </div>
    </ul>  
</nav>