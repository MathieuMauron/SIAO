@extends('layout.app')
@section('content')

<link rel="stylesheet" href="../css/connexion.css">
            <div class="container">
                <div class="login-container">
                    <h2>Se Connecter</h2>
                    @if ($errors->has('email'))
                        <p class="error">{{$errors->first('email')}}</p>
                    @endif
                    <form action="/login" method="post">
                        @csrf
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" id="password" name="password" required>
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

