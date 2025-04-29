<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function un_utilisateur_peut_se_connecter_avec_des_identifiants_valides()
    {
        // Crée un utilisateur fictif
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => bcrypt('password123'),
        ]);

        // Simule une tentative de connexion
        $response = $this->post('/login', [
            'email' => 'user@example.com',
            'password' => 'password123',
        ]);

        // Vérifie que l'utilisateur est bien authentifié
        $this->assertAuthenticatedAs($user);

        // Vérifie la redirection après connexion (vers la page d’accueil)
        $response->assertRedirect('/');
    }

    #[Test]
    public function la_connexion_echoue_avec_un_mot_de_passe_incorrect()
    {
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->post('/login', [
            'email' => 'user@example.com',
            'password' => 'wrongpassword',
        ]);

        $this->assertGuest();
        $response->assertSessionHasErrors('email');
    }
}
