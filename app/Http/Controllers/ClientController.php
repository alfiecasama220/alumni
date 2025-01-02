<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Gallery;
use App\Models\User;
use App\Models\Event;
use App\Models\EventsComment;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();
        $alumni = User::with('course')->get()->where('role', 'client')->where('status', 1);
        $events = Event::where(DB::raw("STR_TO_DATE(date, '%d-%b-%Y')"), '>=' , DB::raw('CURDATE()'))->orderBy(DB::raw("STR_TO_DATE(date, '%d-%b-%Y')"))->paginate(7);
        $eventsComment = EventsComment::all();
        return view('users.index', compact('gallery' , 'alumni', 'events', 'eventsComment'));
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
        $events = Event::findOrFail($id);
        $eventsComment = EventsComment::with('user')->where('event_id', $id)->paginate(7);
        if($events) {
            return view('users.pages.event-details', compact('events', 'eventsComment'));
        }    
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
