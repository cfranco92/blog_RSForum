<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A home test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/')
            ->assertStatus(200)
            ->assertSee('Laravel');
    }
}
