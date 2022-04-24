<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'score',
        'coins',
        'user_id',
        'enemies'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
