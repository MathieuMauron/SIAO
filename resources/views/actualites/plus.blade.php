@extends('layout.app')
@section('content')

<link rel="stylesheet" type="text/css" href="../css/article.css"/>
<link rel="stylesheet" type="text/css" href="../css/article_admin.css"/>
<link rel="stylesheet" type="text/css" href="../style.css"/>

<div class="actu">
    <div class="article-card">
        <h2 class="article-title">{{ $actualites->titre }}</h2>
        <h3 class="article-subtitle">{{ $actualites->accroche }}</h3>
        <p class="article-author">Publié par {{ $actualites->nom }} le {{ $actualites->created_at }} </p>
        <p>{{$actualites->content}}</p>
    </div>                 
</div>
<script src="Scrip.js"></script>
        
@endsection



