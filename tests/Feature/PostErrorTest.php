<?php

namespace Test\Feature;

use Illiminate\Foundation\Testing\RefreshDatabase;
use Illiminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostErrorTest extends TestCase
{
    public function testCreatePostWithoutTitle()
    {

        $response = $this->postJson('/api/posts', [
            'body' => 'This is a post without title',
            'author' => 'Moi même',
        ]);
        $response->assertStatus(422);

        $response->assertJsonMissingValidationErrors;
    }
    public function testCreatePostWithoutBody()
    {

        $response = $this->postJson('/api/posts', [
            'title' => 'This is a test post without body',
            'author' => 'Moi même',
        ]);
        $response->assertStatus(422);

        $response->assertJsonMissingValidationErrors('body');
    }
    public function testCreatePostWithoutAuthor()
    {

        $response = $this->postJson('/api/posts', [
            'title' => 'This is a test post',
            'body' => 'This is a test post without author',
        ]);
        $response->assertStatus(422);

        $response->assertJsonMissingValidationErrors('author');
    }
}
