<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class EventsComment extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $table = "event_comment";

    protected $fillable = [
        'event_id',
        'comments',
        'user_id',
    ];
}
