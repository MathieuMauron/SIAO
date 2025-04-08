@extends('layout.app')
@section('content')
    
<link rel="stylesheet" href="../css/connexion.css">

<div class="container">
    <div class="login-container">
                    <h2>S'inscrire</h2>
                    
                    <?php
                    // Afficher un message d'erreur si l'email existe déjà
                    if (isset($_GET['error']) && $_GET['error'] == 'email_exists') {
                        echo '<p style="color: red; text-align: center;">Cet email est déjà utilisé. Veuillez en choisir un autre.</p>';
                    }
                    ?>

        <form action="/register" method="POST">
            @csrf
                        <div class="input-group">
                            <label for="name">Nom</label>
                            <input type="text" id="nom" name="name" required>
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="input-group">
                            <button type="submit">Inscription</button>
                        </div>
                    </form>
                    <p>Vous avez déjà un compte ?  <a href="{{route('login')}}">Se connecter</a></p>
                </div>    
            </div>  
        </div>
        <script src="../scrip.js"></script>
        @endsection