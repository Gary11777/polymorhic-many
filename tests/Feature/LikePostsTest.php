<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LikePostsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_a_post_can_be_liked(): void
    {
        $this->actingAs(User::factory()->create());

        $post = Post::factory()->create();

        $post->like();

        $this->assertCount(1, $post->likes);
    }
}
