<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;

trait Likable{

    //timeline returns tweets of following+current user... 
    //needs to join the tweets + likes table where records are grouped by tweet_id , columns sum of(likes , dislikes)

    public function scopeWithLikes(Builder $query) {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) likes, sum(not liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }
    public function like($user = null,$liked = true)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user? $user->id: auth()->user()->id,

        ], ['liked' => $liked]);
    }
    public function dislike($user = null)
    {
        $this->like($user,false);
    }

    public function isLikedBy(User $user){
        // dd($user);
       return (bool) $this->likes()->where('user_id', $user->id)->where('liked', true)->count();
    }

    public function isDislikedBy(User $user){
        // dd($user);
        // dd((bool)$this->likes()->where('user_id', $user->id)->where('liked', false)->count());
      return (bool)  $this->likes()->where('user_id', $user->id)->where('liked', false)->count();
    }
    public function likes()
    {
        return $this->hasMany(Like::class);  // $tweet->likes returns records from like table where tweet.id = likes.tweets_id
    }
}