<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\File;
use Storage;
use Auth;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->career = new Career;
        $this->file = new File;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = $this->career->get_career_data();
        return view('admin.careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;

        // Check the File if not empty
        if(!is_null($request->file)) {
            // create an image
            if(Storage::exists($request->file)) {
                Storage::delete('public/files/'. $request->file_name);
            } else {
                Storage::put('public/files', $request->file);
            }
        } else {
            $file = NUll;
        }

        if(!is_null($request->file)) {
            $file = $this->file->store_file_data($request, $user_id, $role_id);
        } else {
            $file = NULL;
        }
        
        if(!is_null($file)) {
            $file_id = $file->id;
        } else {
            $file_id = Null;
        }

        $this->career->store_career_data($request, $user_id, $file_id);

        return redirect()->back()->with('success', $request->title . ' ' . 'Career has been saved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $career_details = $this->career->get_career_details_by_slug($slug);

        return view('admin.careers.edit', compact('career_details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;
        $file_id = $request->file_id;
        
        // Check the File if not empty
        if(!is_null($request->file)) {
            // Check the file if missing and delete
            if (!Storage::exists($request->file)) {
                $del = Storage::delete('public/files/'. $request->file_name);
            }
            // Save the file in local storage
            Storage::put('public/files', $request->file);
            
            // If file_id is null
            if (is_null($file_id)) {
                // Store the file data into DB
                $file = $this->file->store_file_data($request, $user_id, $role_id);
            } else {
                // Update the file data into DB
                $file = $this->file->update_file_data($request, $user_id, $role_id, $file_id);
            }
        } else {
            $file = NUll;
        }
        
        if(!is_null($file)) {
            $file_id = $file_id;
        } else {
            $file_id = Null;
        }

        $this->career->update_career_data($request, $user_id, $file_id, $id);

        return redirect()->route('careers.index')->with('success', $request->title . ' ' . 'Career has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = decrypt($id);
        $this->career->delete_career_data_by_id($id);
        return redirect()->back()->with('success', 'Career has been removed successfully.');
    }
}
