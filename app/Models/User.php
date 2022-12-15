<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'mobile', 'password', 'registration', 'account_status', 'mobile_status', 'character'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'author_id');
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($category) {
            $category->posts()->get()->each(function ($post) {
                $post->delete();
            });
        });
    }

}
