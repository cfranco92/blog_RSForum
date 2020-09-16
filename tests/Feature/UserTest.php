<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A user register test .
     *
     * @return void
     */
    public function testUserRegister()
    {
        $response = $this->get('/register')
            ->assertStatus(200)
            ->assertSee('Register');
    }
    
    /**
     * A user login test .
     *
     * @return void
     */
    public function testUserLogin()
    {
        $response = $this->get('/login')
            ->assertStatus(200)
            ->assertSee('Login');
    }
}
