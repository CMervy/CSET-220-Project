<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $primaryKey = 'appointment_id';
    protected $fillable = [
        'patient_id', 'doctor_id', 'appointment_date', 'comment',
        'morning_med', 'afternoon_med', 'night_med', 'is_completed',
    ];
    protected $casts = [
        'appointment_date' => 'date',
        'is_completed' => 'boolean',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Employee::class, 'doctor_id', 'emp_id');
    }
}