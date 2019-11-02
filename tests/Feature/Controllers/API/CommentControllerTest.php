<?php

namespace Tests\Feature\Controllers\API;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanCreateComment()
    {
        $post = factory(Post::class)->create();

        $this->post("posts/{$post->id}/comments", ['comment_body' => 'test'])
            ->assertJsonStructure(['id', 'body', 'created_at', 'user' => ['id', 'name']])
            ->assertJson([
                'body' => 'test',
                'user' => [
                    'id' => $post->user->id,
                    'name' => $post->user->name
                ]
            ]);

        $this->assertDatabaseHas('comments', [
            'user_id' => $post->user->id,
            'body' => 'test',
        ]);
    }
}
