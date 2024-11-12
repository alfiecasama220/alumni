<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobComment extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $table = "job_comment";

    protected $fillable = [
        'forum_id',
        'comments',
        'user_id',
    ];
}
