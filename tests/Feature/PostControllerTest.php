<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;


class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreatePost()
    {
        $response = $this->postJson('/api/posts', [
            'title' => 'Test Post',
            'body' => 'This is a test post.',
            'author' => 'Moi même',
        ]);
        $response->assertStatus(201);

        $response->assertJson([
            'message' => 'The post was successfully created',
            'data' => [
                'title' => 'Test Post',
                'body' => 'This is a test post.',
                'author' => 'Moi même',
            ],
        ]);
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Post',
            'body' => 'This is a test post.',
            'author' => 'Moi même',
        ]);
    }
}
