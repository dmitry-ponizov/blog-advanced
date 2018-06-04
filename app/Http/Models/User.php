<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'roles_users', 'user_id','role_id');
    }

    public function hasAccess(array $permissions): bool
    {
        foreach ($this->roles as $role){
            if($role->hasAccess($permissions)){
                return true;
            }
        }

        return false;
    }

    public function hasRole($slug): bool
    {
        return $this->roles()->where('slug', $slug)->count() === 1;


    }


}
