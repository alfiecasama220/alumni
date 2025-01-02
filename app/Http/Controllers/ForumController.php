<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Forum;
use App\Models\ForumComment;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forums = Forum::all();
        return view('users.pages.forum-list', compact('forums'));
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
            $forum = new Forum();

            $forum->title = $request->title;
            $forum->description = $request->description;
            $forum->save();

            return redirect()->back()->with('success', "Forum added");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $forumDetails = Forum::all()->where('id', $id);
        foreach($forumDetails as $details) {
            $details;
        }

        $forumComments = ForumComment::with('user')->where('forum_id', $id)->get();
        return view('users.pages.forum-details', compact('details', 'forumComments'));
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
