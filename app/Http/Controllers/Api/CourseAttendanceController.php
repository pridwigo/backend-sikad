<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CourseAttendance;
use Illuminate\Http\Request;

class CourseAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $courseAttendance = CourseAttendance::where('student_id', '=', $user->id)->paginate(10);
        return $courseAttendance;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'schedules_id' => 'required|exists:schedules,id',
            'attendance_code' => 'required',
            'academic_year' => 'required',
            'meeting' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $courseAttendance = CourseAttendance::create($request->all());
        return $courseAttendance;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
