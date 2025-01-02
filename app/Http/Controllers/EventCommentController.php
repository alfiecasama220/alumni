<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\EventsComment;

use Illuminate\Http\Request;

class EventCommentController extends Controller
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
        $validator = Validator::make($request->all(), [
            'event_id' => 'required',
            'comments' => 'required',
            'user_id' => 'required',
        ]);

        if($validator->passes()) {
            $comments = new EventsComment();

            $comments->event_id = $request->event_id;
            $comments->comments = $request->comments;
            $comments->user_id = $request->user_id;
            $comments->save();

            $url = route('eventDetails', $request->event_id);

            $commentsID = EventsComment::all()->where('user_id', $request->user_id);
            foreach($commentsID as $commentID) {
                $commentID->id;
            }

            return redirect($url . '/#comment' . $commentID->id)->with('success', "Comment added");
        } else {
            return redirect()->back()->with('eroor', "Comment not added");
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
