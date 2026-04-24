<?php

namespace App\Models;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, HasUUID;
    
    protected $table = 'roles';
    protected $fillable = [
        'id',
        'name',
        'description',
        'is_active'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'user_roles');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }

    public function hasPermission($permission){
        return $this->permissions->contains('name', $permission);
    }

    public function scopeActive($query){
        return $query->where('is_active', 1);
    }
}
