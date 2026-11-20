<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'user_id';
    protected $fillable = [
        'role_id', 'first_name', 'last_name', 'email',
        'phone', 'password', 'date_of_birth', 'is_approved',
    ];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [
        'date_of_birth' => 'date',
        'is_approved' => 'boolean',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function patient()
    {
        return $this->hasOne(Patient::class, 'user_id', 'user_id');
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'user_id', 'user_id');
    }
}