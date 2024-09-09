<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderBy(DB::raw("ABS(DATEDIFF(STR_TO_DATE(date, '%d-%b-%Y'), CURDATE()))"))->paginate(7);
        return view('admin.pages.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add-event');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'banner' => 'required|file|max:7080',
            'description' => 'required',
        ]);

        if($validator->passes()) {
            $event = new Event();

            $path = $request->file('banner')->store('events', 'public');

            $event->title = $request->title;
            $event->date = $request->date;
            $event->time = $request->time;
            $event->banner = $path;
            $event->description = $request->description;
            $event->save();

            return redirect()->intended(route('event.index'))->with('success', Session::get('registerSuccess'));
            
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
