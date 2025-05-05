@extends('layout.app')
@section('content')

<link rel="stylesheet" type="text/css" href="../css/article_admin.css"/>

<div class="ajout_article">
    <section class="bienvenue">
        <h2>Ajouter un nouvel article</h2>
        <center>
            <form action="/add_actu" method="POST" class="add_actu">
                @csrf
                <div class="section_titre">
                    <label class="label" for="titre">Titre de l'article :</label><br>
                    <input type="text" class="titre" name="titre" required>
                </div>
                <div class="section_accroche">
                    <label class="label" for="accroche">Phrase d'accroche</label><br>
                    <input class="accroche" type="text" name="accroche" rows="8" required></textarea>
                </div>
                <div class="section_contenu">
                    <label class="label" for="contenu">Contenu de l'article :</label><br>
                    <textarea class="content" name="content" rows="8" required></textarea>
                </div>
                <button type="submit" class="bouton">Ajouter l'article</button>
            </form>
        </center>
    </section>
</div>

@endsection
