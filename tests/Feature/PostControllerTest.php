<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostControllerTest extends TestCase
{
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCreatePost()
    {
        $postData = [
            'title' => 'Test Post',
            'body' => 'This is a test post.',
            'author' => 'Moi même',
        ];

        $response = $this->postJson('/api/posts', $postData);
        $response->assertStatus(201);

        $response->assertJson([
            'status' => 201,
            'message' => 'The post was successfully created',
            'data' => [
                'title' => 'Test Post',
                'body' => 'This is a test post.',
                'author' => 'Moi même',
            ],
        ]);

        $this->assertDatabaseHas('posts', $postData);
    }

    public function testCreateMultiPosts()
    {
        for ($i = 1; $i <= 10; $i++) {
            $postData = [
                'title' => 'Test Post ' . $i,
                'body' => "This is a post number {$i}",
                'author' => 'Moi même',
            ];

            $response = $this->postJson('/api/posts', $postData);
            $response->assertStatus(201);

            $response->assertJson([
                'message' => 'The post was successfully created',
                'data' => $postData,
            ]);

            $this->assertDatabaseHas('posts', $postData);
        }
    }

    public function testUpdatePost()
    {

        $post = Post::factory()->create();

        $updatedData = [
            'title' => 'Updated Title',
            'body' => 'Updated Body',
            'author' => 'Updated Author',
        ];

        $response = $this->putJson('/api/posts/' . $post->id, $updatedData);

        $response->assertStatus(200);

        $response->assertJson([
            'message' => 'The post was successfully updated',
            'data' => $updatedData,
        ]);

        $this->assertDatabaseHas('posts', array_merge(['id' => $post->id], $updatedData));
    }

    public function testDeletePost()
    {

        $post = Post::factory()->create();

        $response = $this->deleteJson('/api/posts/' . $post->id);

        $response->assertStatus(200);

        $response->assertJson([
            "message" => 'The post was successfully deleted',
        ]);

        $this->assertDatabaseMissing('posts', ['id' => $post->id]);

    }
}
