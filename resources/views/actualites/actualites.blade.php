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

                            <center><a href="{{route('lire_plus')}}" class="article-link">Lire plus</a></center>
                        
                            @if (Auth::user() && Auth::user()->email === 'admin@gmail.com')
                                <div class="delete-form-container" style="display:flex; justify-content:space-around">
                                    <form method="POST" action="/delete_actu/{{$actualite->id}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">Supprimer</button>
                                    </form>
                                    <button><a style="color:white" href="{{ route('modif_actu', $actualite->id) }}">Modifier</a></button>
                                </div>
                            @endif
                        </div>
                   
                            @if (($index + 1) % 3 == 0)
                                <div style="width: 100%; margin-top:15px"></div>
                            @endif
                   
                        @endforeach
                    </div>
            </div>
        </div>
        <script src="Scrip.js"></script>
        
@endsection