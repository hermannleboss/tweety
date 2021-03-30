<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;
/**
 * Description of Followable
 *
 * @author hermann
 */
class Followable {
    
    public function follow(User $user) {
        return $this->follows()->save($user);
    }

    public function isFollowing(User $user) {
        return $this->follows()->save($user);
    }

    public function follows() {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

}
