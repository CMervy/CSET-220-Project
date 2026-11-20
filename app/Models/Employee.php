<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'emp_id';
    protected $fillable = ['user_id', 'salary'];
    protected $casts = ['salary' => 'decimal:2'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id', 'emp_id');
    }

    public function dailyActivities()
    {
        return $this->hasMany(DailyActivity::class, 'caregiver_id', 'emp_id');
    }
}