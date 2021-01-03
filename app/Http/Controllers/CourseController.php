<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
class CourseController extends Controller
{
    public function listAll()
    {
        $classes = Courses::All();
        return view('home', [
            'classes' => $classes
        ]);
    }
    public function create()
    {
        return view('admin.form-create-course');
    }

    public function edit(Courses $course)
    {
        return view('admin.form-edit-course', [
            'course' =>$course
        ]);
    }

    public function alter(Courses $course, Request $request)
    {
        $course->name = $request->name;
        $course->subject = $request->subject;
        $course->uri = $request->uri;
        $course->save();

        return \redirect()->route('list.course');
    }

    public function save(Request $request)
    {
        $course = new Courses();
        $course->name = $request->name;
        $course->subject = $request->subject;
        $course->uri = $request->uri;

        $course->save();

        return redirect()->route('list.course');
        
    }

    public function delete(Courses $course)
    {
        $course->delete();
        return \redirect()->route('list.course');
    }
}
