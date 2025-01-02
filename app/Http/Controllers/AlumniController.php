<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        return view('users.pages.register', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $alumni = User::with('course')->where('role', 'client')->paginate(7);
        return view('admin.pages.alumni-list', compact('alumni'));
    }

    public function filter(Request $request) {

        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        $alumni = User::with('course')->where('is_working', $request->status)->where('role', 'client')->paginate(7);

        if($request->status == 1 || $request->status == 0) {
            if($validator->passes()) {
                return view('admin.pages.alumni-list', compact('alumni'));
            } 
        } else {
            return redirect()->intended(route('alumni.create'));
        }

        

        // $alumni = User::with('course')->where('role', 'client')->paginate(7);
        // return view('admin.pages.alumni-list', compact('alumni'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'middlename' => 'nullable',
            'lastname' => 'required',
            'gender' => 'required',
            'batch' => 'required',
            'occupation' => 'nullable',
            'course' => 'required',
            'currently' => 'required',
            'avatar' => 'required|file|max:7020',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);


        if($validator->passes()) {
            $alumni = new User();

            $path = $request->file('avatar')->store('avatar', 'public');

            if($request->occupation == null) {
                $isWorking = 0;
            } else {
                $isWorking = 1;
            }

            $alumni->firstname = $request->firstname;
            $alumni->middlename = $request->middlename;
            $alumni->lastname = $request->lastname;
            $alumni->gender = $request->gender;
            $alumni->batch = $request->batch;
            $alumni->occupation = $request->occupation;
            $alumni->course_id = $request->course;
            $alumni->connected_to = $request->currently;
            $alumni->is_working = $isWorking;
            $alumni->avatar = $path;
            $alumni->email = $request->email;
            $alumni->role = "client";
            $alumni->password = $request->password;

            $alumni->save();

            return redirect()->intended(route('alumniLogin'))->with('success', Session::get('registerSuccess'));
            
        } else {
            return redirect()->back()->with('error', "Failed, your data is not added");
        }
    }

    public function login() {
        return view('users.pages.login');
    }

    public function loginPost(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if($validator->passes()) {
                if(Auth::user()->status == 0) {
                    return redirect()->back()->with('error', 'Your account is not yet verified.');
                } else if(Auth::user()->status == 1) {
                    Session(['username'=>Auth::user()->firstname]);

                    return redirect()->intended(route('index'));
                } else {
                    return redirect()->back()->with('error', 'Your account is rejected.');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid Email or Password');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }
    }

    public function approve(Request $request , string $id) {
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if($validator->passes()) {
            $user = User::findOrFail($id);

            if($request->status == 1) {
                
                $user->status = $request->status;
                $user->save();

                return redirect()->back()->with('success', Session::get('approveSuccess'));
            } 

            else if($request->status == 2) {
                $user->status = $request->status;
                $user->save();

                return redirect()->back()->with('success', Session::get('rejectSuccess'));
            } else {
                return redirect()->back()->with('error', Session::get('approvalFailed'));
            }

        } else {

        }
    }

    public function showAlumnis() {
        $alumnis = User::with('course')->where('role', 'client')->where('status', '1')->paginate(7);
        return view('users.pages.alumnis', compact('alumnis'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $details = User::with('course')->where('id', $id)->get();
        foreach($details as $detail) {
            $detail;
        }
        return view('users.pages.alumni-details', compact('detail'));
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
        $id = User::findOrFail($id);

        $id->delete();

        if($id) {
            return redirect()->intended(route('alumni.create'))->with('success', 'User deleted Successfully');
        } else {
            return redirect()->intended(route('alumni.create'))->with('error', 'User not deleted');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->intended(route('alumniLogin'))->with('success', "You have been logged out");
    }
}
