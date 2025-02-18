<nav class="nav" id="topNav">   
    <ul>
        <div>
            <div></div>
            <a href="../Service/gouvernance.php">Gouvernance</a>
            <a href="../equipe/equipe.php">Equipe SIAO/ Pôle d'activités</a>
            <a href="../actu/actualites.php">Actualité</a>
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
                <a href="../connexion/page_connexion.php">Se Connecter/S'inscrire</a></li>
            <?php endif; ?>

        </div>
    </ul>  
</nav>