@extends('layout.app')
@section('content')


    <link rel="stylesheet" type="text/css" href="../css/article.css"/>
    <link rel="stylesheet" type="text/css" href="../css/article_admin.css"/>
    <link rel="stylesheet" type="text/css" href="../style.css"/>

            <div class="titre">
                <h1>Actualités</h1>
            </div>
            <div class="phrase_intro">
                <p>Retrouvez ici tous les articles et actualités liés au SIAO.</p>
            </div>

            <div class="act">
                <?php 
                    if (isset($_SESSION['user_name']) && $_SESSION['email']=='admin@gmail.com') {
                        echo '<center><a href="../article/ajouter_un_article.php">Ajouter un article</a></center> ';
                    }
                ?><br>
                <div class="actu">

                    </div>
                </div>
            </div>
        </div>
        <script src="Scrip.js"></script>
        
@endsection