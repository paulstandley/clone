<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * The function returns boot model.
    *
    * @var $user 
    * @return $user $user->email
    */
    protected static function boot()
    {
        parent::boot();

        static::created(function($user)
        {
            $user->profile()->create([
                'title' => $user->username,
            ]);

            Mail::to($user->email)->send(new NewUserWelcomeMail());
        });
    }
 
    /**
    * The function returns post model relaysionship.
    *
    * @return Post
    */
    public function posts() 
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    /**
    * The function that returns the model for the profile relaysionship.
    *
    * @return Profile
    */
    public function following() 
    {
        return $this->belongsToMany(Profile::class);
    }

    /**
    * The function returns profile model relaysionship.
    *
    * @return Profile
    */
    public function profile() 
    {
        return $this->hasOne(Profile::class);
    }
}
