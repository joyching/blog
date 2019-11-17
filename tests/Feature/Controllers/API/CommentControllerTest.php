<?php

namespace Tests\Feature\Controllers\API;

use App\User;
use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanCreateComment()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();

        $this->actingAs($user)
            ->post("posts/{$post->id}/comments", ['comment_body' => 'test'])
            ->assertJsonStructure(['id', 'body', 'created_at', 'user' => ['id', 'name']])
            ->assertJson([
                'body' => 'test',
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name
                ]
            ]);

        $this->assertDatabaseHas('comments', [
            'user_id' => $user->id,
            'body' => 'test',
        ]);
    }

    public function testItUnauthorizedToCreateComment()
    {
        $post = factory(Post::class)->create();

        $this->post("posts/{$post->id}/comments", ['comment_body' => 'test'])
            ->assertStatus(401);

        $this->assertDatabaseMissing('comments', [
            'body' => 'test',
        ]);
    }
}
