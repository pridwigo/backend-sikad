<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'student_id',
        'day',
        'start_time',
        'end_time',
        'room',
        'attendance_code',
        'academic_year',
        'semester',
        'created_by',
        'updated_by',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function student()
    {
        return $this->belongsTo(User::class);
    }
}
