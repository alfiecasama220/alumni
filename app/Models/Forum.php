<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ForumComment;

class Forum extends Model
{
    use HasFactory;

    protected $table = "forum";

    protected $fillable = [
        'title',
        'description'
    ];
}
