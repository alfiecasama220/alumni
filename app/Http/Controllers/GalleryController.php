<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::paginate(3);
        return view('admin.pages.gallery', compact('gallery'));
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
            'img' => 'required|file|max:7080',
            'description' => 'required',
        ]);

        if($validator->passes()) {
            $gallery = new Gallery();
            $path = $request->file('img')->store('gallery', 'public');
            $gallery->image = $path;
            $gallery->description = $request->description;
            $gallery->save();

            return redirect()->back()->with('success', Session::get('registerSuccess'));
        } else {
            return "False";
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
        $id = Gallery::findOrFail($id);

        $id->delete();

        if($id) {
            return redirect()->back()->With('success', 'The data is deleted');
        } else {
            return redirect()->back()->With('error', 'The data is not deleted');
        }
    }
}
