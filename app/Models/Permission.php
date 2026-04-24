<?php

namespace App\Models;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory, HasUUID;
    
    protected $table = 'permissions';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'resource',
        'action',
        'description',
        'is_active'
    ];

    public function roles(){
        return $this->belongsToMany(Role::class, 'role_permissions');
    }
    
    public function scopeActive($query){
        return $query->where('is_active', 1);
    }
}
