<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.index');
    }

    public function login()
    {
        return view('admin.index');
    }

    public function adminLogin(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]); 

        if($validator->passes()) {
            
            $admin = DB::table('users')->where('role', 'admin');

            if(Auth::attempt(['email' => $request->email , 'password' => $request->password])) {
                if(Auth::user()->role == 'admin') {
                    Session(['name'=>Auth::user()->name]);
                    return redirect()->intended(route('dashboard.index'));
                } else {
                    return redirect()->back()->with('error', 'You are not authorized');
                }
                
            } else {
                return redirect()->back()->with('error', 'Invalid Email or Password');
            }
          
            

        } else {
            return "false";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, AdminRequest $adminRequest)
    {
        $validator = Validator::make($request->all(), [$adminRequest]);

        if($validator->passes()) {
            $users = new User();

            $path = $request->file('avatar')->store('avatar', 'public');

            $users->firstname = $request->firstname;
            $users->middlename = $request->middlename;
            $users->lastname = $request->lastname;
            $users->gender = $request->gender;
            $users->email = $request->email;
            $users->avatar = $path;
            $users->password =  $request->password;
            $users->role = $request->role;
            $users->save();
            
            return redirect()->intended(route('login'))->with('success', Session::get('registerSuccess'));
            
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
        //
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->intended(route('login'))->with('success', Session::get('logoutSuccess'));
    }
}
