<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HttpTest extends TestCase
{
    public function testHomePageIsAccessible()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    
    public function testLoginPageIsAccessible()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    
    public function testNewsPageIsAccessible()
    {
        $response = $this->get('/actualites');
        $response->assertStatus(200);
    }
}