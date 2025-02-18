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
            <?php if (isset($_SESSION['user_name'])): ?>
                <!-- Si l'utilisateur est connecté, on affiche le bouton Mon Profil -->
                <a href="../connexion/profil.php">Mon Profil (<?php echo htmlspecialchars($_SESSION['user_name']); ?>)</a></li>
            <?php else: ?>
                <!-- Sinon, on affiche le bouton de connexion -->
                <a href="{{route('login')}}">Se Connecter/S'inscrire</a></li>
            <?php endif; ?>
        </div>
    </ul>  
</nav>