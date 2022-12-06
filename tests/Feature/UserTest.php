<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    

    public function test_renderiza_login()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_renderiza_registro()
    {
        $response = $this->get('/register');

        $response->assertSee('Register');

        $response->assertStatus(200);
    }

    public function test_no_usuarios_duplicados(){
        
        $this->seed();
        $usuarios = User::all();

        $this->assertTrue($usuarios[0]['email'] != $usuarios[1]['email']);
    }


}
