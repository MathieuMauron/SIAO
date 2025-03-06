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
                        @foreach ($actualites as $index => $actualite)
                            <div class="article-card">
                                <h2 class="article-title">{{ $actualite->titre }}</h2>
                                <h3 class="article-subtitle">{{ $actualite->accroche }}</h3>
                                <p class="article-author">Publié par {{ $actualite->nom }} le {{ $actualite->created_at }} </p>
                                <a href="../article/lire_plus.php" class="article-link">Lire plus</a>
                            </div>
                    
                            {{-- Ajoute un saut de ligne toutes les 3 actualités --}}
                            @if (($index + 1) % 3 == 0)
                                <div style="width: 100%; margin-top:15px"></div>
                            @endif
                        @endforeach
                    </div>
            </div>
        </div>
        <script src="Scrip.js"></script>
        
@endsection