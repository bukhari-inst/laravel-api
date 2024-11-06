<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author_id',
        'published_year',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
