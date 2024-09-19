<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Course;
use App\Models\EventsComment;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function course() {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function eventsComment() {
        return $this->hasmany(EventsComment::class);
    }

    public function forumComment() {
        return $this->hasMany(ForumComment::class);
    }

    // public function comments() {
    //     return $this->belongsTo(EventsComment::class, 'event_id');
    // }

    protected $approve = "1";
    protected $reject = "2";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'gender',
        'batch',
        'connected_to',
        'avatar',
        'status', 
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
