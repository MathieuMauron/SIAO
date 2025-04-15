
<nav class="nav" id="topNav">
    <ul>
        <li><a href="{{route('gouvernance')}}">Gouvernance</a></li>
        <li><a href="{{route('equipe')}}">Equipe SIAO / Pôle d'activités</a></li>
        <li><a href="{{route('actualites')}}">Actualité</a></li>
        <li><a href="https://basedeconnaissances.sisiao.dihal.gouv.fr/support/utiliser-le-si-siao" target="_blank">Ressources</a></li>
        <li><a href="#agenda">Agenda</a></li>

        @auth
            <li><a href="{{route('profil')}}">Mon Profil {{ Auth::user()->name }}</a></li>
        @endauth

        @guest
            <li><a href="{{route('login')}}">Se Connecter / S'inscrire</a></li>
        @endguest

        <!-- Bouton hamburger -->
        <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </li>
    </ul>
</nav>

