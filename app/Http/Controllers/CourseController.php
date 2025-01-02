<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::paginate(6);
        return view('admin.pages.course-list', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course' => 'required'
        ]);

        if($validator->passes()) {
            $course = new Course();
            $course->course = $request->course;
            $course->save();

            return redirect()->back()->with('success', Session::get('registerSuccess'));
        } else {
            return redirect()->back()->with('error', Session::get('registerFailed'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
        $id = Course::findOrFail($id);

        $id->delete();

        if($id) {
            return redirect()->back()->With('success', 'The data is deleted');
        } else {
            return redirect()->back()->With('error', 'The data is not deleted');
        }
    }
}
