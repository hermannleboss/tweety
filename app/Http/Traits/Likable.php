<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Traits;

use App\Models\User;
use App\Models\Like;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

/**
 * Description of Likable
 *
 * @author hermann
 */
trait Likable {

    public function scopeWithLikes(Builder $query) {
        $query->leftJoinSub(
                'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
                'likes',
                'likes.tweet_id',
                'tweet_id');
    }

    public function isLikedBy(User $user) {
        return (bool) $user->likes->where('tweet_id', $this->id)->where('liked', true)->count();
    }

    public function isDisLikedBy(User $user) {
        return(bool) $user->likes->where('tweet_id', $this->id)->where('liked', false)->count();
    }

    public function like($user = null, $like = true) {
        if (Auth::check()) {
            //there is a user logged in, now to get the id
            $user = Auth::user();
        }
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : $user->id()
                ], [
            'liked' => $like
        ]);
    }

    public function dislike($user = null) {
        $this->like($user, false);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

}
