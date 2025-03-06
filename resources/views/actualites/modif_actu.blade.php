@extends('layout.app')
@section('content')

<link rel="stylesheet" type="text/css" href="../css/article_admin.css"/>

            <div class="ajout_article">
                <section class="bienvenue">
                    <h2>Ajouter un nouvel article</h2>
                    <center>
                        <form action="{{ route('update_actu', $actualite->id) }}" method="post" class="add_actu">
                            @csrf
                            @method('put')
                            <div>
                                <label class="label" for="titre">Titre de l'article :</label><br>
                                <input type="text" class="titre" name="titre" required value="{{ old('titre', $actualite->titre) }}">
                            </div>
                            <div>
                                <label class="label" for="accroche">Phrase d'accroche</label><br>
                                <input class="accroche" type="text" name="accroche" rows="8" required value="{{ old('accroche', $actualite->accroche) }}">
                            </div>
                            <div>
                                <label class="label" for="contenu">Contenu de l'article :</label><br>
                                <textarea class="content" name="content" rows="8" required >{{old('content', $actualite->content) }}</textarea>
                            </div>
                            <button type="submit" class="bouton">Modifier</button>
                        </form>
                    </center>
                </section>
            </div>
        </div>
        <script src="../Scrip.js"></script>
    </body>
</html>

@endsection
