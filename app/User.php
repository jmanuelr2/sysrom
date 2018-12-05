<?php

namespace App;

use App\ActivationToken;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','acvtive',
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
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    } 

    public function activate()
    {
        $this->update(['activate' => 1]);

        Auth::login($this);

        $this->token->delete();         
    }   

    public function token()
    {
        return $this->hasOne(ActivationToken::class);
    }

    public function generateToken()
    {
        $this->token()->create([
            'token' => str_random(60)
        ]);

        return $this;
    }

    public function profiles()
    {
        return $this->hasMany(SocialProfile::class);
    }

    public function getAvatarAttribute()
    {
        return optional( $this->profile->last() )->avatar ?? url('images/default.jpg');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
