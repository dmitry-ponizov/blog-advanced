<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'permissions'
    ];

    protected $casts = [
        'permissions' => 'array'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'roles_users', 'role_id', 'user_id');
    }

    public function hasAccess(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            if ($this->hasPermission($permission)) {
                return true;
            }
            return false;
        }
    }

    public function hasPermission($permission): bool
    {
        return $this->permissions[$permission] ?? false;
    }
}
