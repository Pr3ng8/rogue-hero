<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'score',
        'coins',
        'enemies'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
