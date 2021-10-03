<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use \App\Http\Traits\Followable;
use \App\Http\Traits\Likable;

class User extends Authenticatable {

    use HasFactory,
        Notifiable,
        Followable,
        Likable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value) {
        $avatar = null;
        if ($value) {
            $avatar = "storage/" . $value;
        } else {

            $avatar = 'img/default-avatar.png';
        }

        return asset($avatar);
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline() {
        $friends = $this->follows()->pluck('id');
        return Tweet::whereIn('user_id', $friends)
                        ->withLikes()
                        ->orWhere('user_id', $this->id)
                        ->latest()->paginate(50);
    }

    /**
     * Return User tweets
     */
    public function tweets() {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = '') {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }

}
