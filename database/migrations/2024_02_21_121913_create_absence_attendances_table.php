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
        Schema::create('absence_attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->foreignId('student_id')->constrained('users');
            $table->string('attendance_code');
            $table->string('academic_year');
            $table->string('semester');
            $table->string('meeting');
            $table->string('status');
            $table->string('information')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('score')->nullable();
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absence_attendances');
    }
};
