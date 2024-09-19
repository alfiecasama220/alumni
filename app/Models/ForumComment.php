<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Forum;
use App\Models\User;

class ForumComment extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $table = "forum_comment";

    protected $fillable = [
        'forum_id',
        'comments',
        'user_id',
    ];
}
