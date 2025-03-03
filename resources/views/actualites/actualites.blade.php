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
                    @if (Auth::user() && Auth::user()->email=='admin@gmail.com')
                       <center><a href="{{route('add_actu')}}">Ajouter un article</a></center>
                    @endif
                    <br>
                <div class="actu">
                    
                    </div>
                </div>
            </div>
        </div>
        <script src="Scrip.js"></script>
        
@endsection