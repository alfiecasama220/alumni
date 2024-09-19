<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\ForumComment;

use Illuminate\Http\Request;

class ForumCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $Validator = Validator::make($request->all(), [
            'forum_id' => 'required',
            'comments' => 'required',
            'user_id' => 'required',
        ]);

        if($Validator->passes()) {
            $forumComment = new ForumComment();

            $forumComment->forum_id = $request->forum_id;
            $forumComment->comments = $request->comments;
            $forumComment->user_id = $request->user_id;
            $forumComment->save();

            $commentID = ForumComment::all()->where('user_id', $request->user_id);
            foreach($commentID as $comID) {
                $comID->id;
            }
            $url = route('forums.show' , $request->forum_id);

            return redirect($url . "/#comment" . $comID->id)->with('success', "Comment added");
        } else {

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
        //
    }
}
