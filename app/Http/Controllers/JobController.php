<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Job;
use App\Models\JobComment;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forums = Job::all();   
       return view('users.pages.job-list', compact('forums'));
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
            'title' => 'required',
            'description' => 'required'
        ]);

        if($validator->passes()) {
            $forum = new Job();

            $forum->title = $request->title;
            $forum->description = $request->description;
            $forum->save();

            return redirect()->back()->with('success', "Job added");
        } else {
            return redirect()->back()->with('error', "Job not added");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $forumDetails = Job::all()->where('id', $id);
        foreach($forumDetails as $details) {
            $details;
        }

        $forumComments = JobComment::with('user')->where('job_id', $id)->get();
        return view('users.pages.job-list-details', compact('details', 'forumComments'));
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
        // 
    }
}
