<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A post detail test.
     *
     * @test
     */
    public function testPostDetail()
    {
        $response = $this->get('/blog/1')
            ->assertStatus(200)
            ->assertSee('Comments');
    }
}
