@extends('layout.app')
@section('content')

<div class="article-detail">
    <h1 class="article-title"><?php echo htmlspecialchars($article['titre']); ?></h1>
    <p class="article-author">Publié par <?php echo htmlspecialchars($article['nom']); ?> le <?php echo htmlspecialchars($article['date_creation']); ?></p>
    <div class="article-content">
        <?php echo nl2br(htmlspecialchars($article['content'])); ?>
    </div>
</div>
<script src="../Scrip.js"></script>

@endsection



