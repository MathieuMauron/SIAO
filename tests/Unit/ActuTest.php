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
    
    $newsData = [
        'titre' => 'New Actualite',
        'content' => 'Content of the news article',
        'accroche' => 'Accroche of the news',
    ];

    $response = $this->actingAs($admin)->post('/add_actu', $newsData);

    $response->assertRedirect(route('actualites'));

    $this->assertDatabaseHas('actualites', [
        'titre' => 'New Actualite',
        'content' => 'Content of the news article',
        'accroche' => 'Accroche of the news',
    ]);
}
}
