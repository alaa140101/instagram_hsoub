<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_path',
        'post_caption'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
    }

    public function likedByUsers() {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function like(User $user) {
        return $this->likedByUsers()->save($user);
    }

    public function dislike(User $user) {
        return $this->likedByUsers()->detach($user);
    }

    public function likedByUser(User $user) {
        return (bool)DB::table('likes')->where('user_id', $user->id)->where('post_id', $this->id)->count();
    }

    public function likeSystem(User $user) {
        
        if($this->likedByUser($user)) {
            return $this->dislike($user);
        }else {
            return $this->like($user);
        }
    }

}
