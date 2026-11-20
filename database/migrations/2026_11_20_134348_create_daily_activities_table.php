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
        Schema::create('daily_activities', function (Blueprint $table) {
            $table->id('activity_id');
            $table->foreignId('patient_id')->constrained('patients', 'patient_id');
            $table->foreignId('caregiver_id')->constrained('employees', 'emp_id');
            $table->date('activity_date');
            $table->boolean('morning_med')->default(false);
            $table->boolean('afternoon_med')->default(false);
            $table->boolean('night_med')->default(false);
            $table->boolean('breakfast')->default(false);
            $table->boolean('lunch')->default(false);
            $table->boolean('dinner')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_activities');
    }
};
