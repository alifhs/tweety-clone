<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Followable;
use App\Models\Like;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'avatar'
    ];

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

    public function timeline()
    {

        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)->orWhere('user_id', $this->id)  //returns relation object and on that we can apply withlikes custom query
        ->withLikes()
        ->latest()
        ->paginate(50);
    }
   

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }
    public function getRouteKeyName()
    {
        return 'username';
    }

    public function likes(){
       return $this->hasMany(Like::class);
    }
}

// $user = new User();

// echo $user;