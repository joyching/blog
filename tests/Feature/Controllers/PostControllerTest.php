<?php

namespace Tests\Feature\Controllers;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanShowList()
    {
        $this->get('/posts')
            ->assertViewIs('blog.index');
    }

    public function testItCanSpecificPost()
    {
        $post = factory(Post::class)->create();

        $this->get("/posts/{$post->id}")
            ->assertViewIs('blog.post')
            ->assertSee($post->title);
    }
}
