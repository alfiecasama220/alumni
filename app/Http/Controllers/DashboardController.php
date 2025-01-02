<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\Course;
use App\Models\User;
use App\Models\Job;
use App\Models\Forum;
use App\Models\Event;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = User::all()->where('role', 'client')->count();
        $jobs = Job::all()->count();
        $forum = Forum::all()->count();
        $events = Event::where(DB::raw("STR_TO_DATE(date, '%d-%b-%Y')"), '>=' , DB::raw('CURDATE()'))->orderBy(DB::raw("STR_TO_DATE(date, '%d-%b-%Y')"))->count();
        
        $datas = [
            ['name' => 'Alumni', 'value' => $alumni],
            ['name' => 'Jobs', 'value' => $jobs],
            ['name' => 'Forums', 'value' => $forum],
            ['name' => 'Upcoming Events', 'value' => $events],
        ];  
        return view('admin.pages.dashboard', compact('datas'));
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
        //
    }
}
