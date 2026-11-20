<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $primaryKey = 'patient_id';
    protected $fillable = [
        'user_id', 'family_code', 'emergency_contact_name',
        'emergency_contact_phone', 'emergency_contact_relation',
        'group', 'admission_date',
    ];
    protected $casts = ['admission_date' => 'date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id', 'patient_id');
    }

    public function dailyActivities()
    {
        return $this->hasMany(DailyActivity::class, 'patient_id', 'patient_id');
    }

    public function charges()
    {
        return $this->hasMany(Charge::class, 'patient_id', 'patient_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'patient_id', 'patient_id');
    }
}