<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rosters', function (Blueprint $table) {
            $table->id('roster_id');
            $table->date('date')->unique();
            $table->foreignId('supervisor_id')->constrained('employees', 'emp_id');
            $table->foreignId('doctor_id')->constrained('employees', 'emp_id');
            $table->foreignId('caregiver1_id')->constrained('employees', 'emp_id');
            $table->foreignId('caregiver2_id')->constrained('employees', 'emp_id');
            $table->foreignId('caregiver3_id')->constrained('employees', 'emp_id');
            $table->foreignId('caregiver4_id')->constrained('employees', 'emp_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rosters');
    }
};
