<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(10);
        return view('pages.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('pages.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:courses,name',
            'description' => 'required',
            'lecturer_id' => 'required|exists:users,id',
        ]);

        Course::create($request->all());
        return redirect()->route('pages.courses.index')->with('success', 'Course was successfully created');
    }
}
