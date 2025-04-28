<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActuTest extends TestCase
{
    use RefreshDatabase;
    public function testAdminCanAddActualite()
{
    
    // Création de l'utilisateur admin
    $admin = User::factory()->create(['email' => 'admin@gmail.com']);
    
    // Données à envoyer pour l'ajout d'une actualité
    $newsData = [
        'titre' => 'New Actualite',
        'content' => 'Content of the news article',
        'accroche' => 'Accroche of the news',
    ];

    // Effectuer la requête en tant qu'administrateur
    $response = $this->actingAs($admin)->post('/add_actu', $newsData);

    // Vérifie que la redirection a bien eu lieu après l'ajout
    $response->assertRedirect(route('actualites'));

    // Vérifie que l'actualité a bien été ajoutée à la base de données
    $this->assertDatabaseHas('actualites', [
        'titre' => 'New Actualite',
        'content' => 'Content of the news article',
        'accroche' => 'Accroche of the news',
    ]);
}
}
