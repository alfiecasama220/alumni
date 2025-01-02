<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\Course;
use App\Models\User;

use App\Models\Forum;
use App\Models\ForumComment;

use Illuminate\Http\Request;


class AdminForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forum = Forum::paginate(7);
        return view('admin.pages.forum-list', compact('forum'));
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
        //
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
        $id = Forum::findOrFail($id);

        $id->delete();

        if($id) {
            return redirect()->back()->With('success', 'The data is deleted');
        } else {
            return redirect()->back()->With('error', 'The data is not deleted');
        }
    }
}
