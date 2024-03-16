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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->bigInteger('lecturer_id')->unsigned();
            $table->string('semester');
            $table->string('academic_year');
            $table->string('sks');
            $table->string('course_code');
            $table->string('description');
            $table->timestamps();

            $table->foreign('lecturer_id', 'lecturerid_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
