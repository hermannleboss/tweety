<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace App\Http\Traits;

use App\Models\User;

/**
 * Description of Followable
 *
 * @author hermann
 */
trait Followable {

    public function follow(User $user) {
        return $this->follows()->save($user);
    }

    public function unFollow(User $user) {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user) {

        $this->follows()->toggle($user);
    }

    public function following(User $user) {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows() {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

}
