<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $primaryKey = 'roster_id';
    protected $fillable = [
        'date', 'supervisor_id', 'doctor_id',
        'caregiver1_id', 'caregiver2_id', 'caregiver3_id', 'caregiver4_id',
    ];
    protected $casts = ['date' => 'date'];

    public function supervisor() { return $this->belongsTo(Employee::class, 'supervisor_id', 'emp_id'); }
    public function doctor()     { return $this->belongsTo(Employee::class, 'doctor_id', 'emp_id'); }
    public function caregiver1() { return $this->belongsTo(Employee::class, 'caregiver1_id', 'emp_id'); }
    public function caregiver2() { return $this->belongsTo(Employee::class, 'caregiver2_id', 'emp_id'); }
    public function caregiver3() { return $this->belongsTo(Employee::class, 'caregiver3_id', 'emp_id'); }
    public function caregiver4() { return $this->belongsTo(Employee::class, 'caregiver4_id', 'emp_id'); }
}