<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

trait Likable
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    use RefreshDatabase;

    public function like($user = null)
    {
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
    }

    public function likes()
    {
        return $this->morphToMany(User::class, 'likable')->withTimestamps();
    }
}
