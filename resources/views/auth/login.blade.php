@extends('layout.app')
@section('content')

<link rel="stylesheet" href="../css/connexion.css">
            <div class="container">
                <div class="login-container">
                    <h2>Se Connecter</h2>
                    <?php
                        // Afficher un message d'erreur si l'email existe déjà
                        if (isset($_GET['error']) && $_GET['error'] == 'login_incorrect') {
                            echo '<p style="color: red; text-align: center;">Email ou mot de passe incorrect !</p>';
                        }
                    ?>
                    <form action="/login" method="post">
                        @csrf
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" required>
                        
                        @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <button type="submit">Connexion</button>
                        </div>
                        <p class="register-link">Pas encore de compte ? <a href="{{route('register')}}">Inscrivez-vous</a></p>
                    </form>
                </div>
            </div>
        </div>
        <script src="../Scrip.js"></script>
       
@endsection

