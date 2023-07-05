<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = [];

    protected $withCount = ['likedUsers'];

    protected $with = ['category'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class , 'post_tags');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function likedUsers()
    {
        return $this->belongsToMany(User::class, 'post_user_likes');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
