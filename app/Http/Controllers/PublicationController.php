<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\PublicationCategories;
use App\Models\File;
use Storage;
use Image;
use Auth;

// Requests

use App\Http\Requests\AddPublication;
use App\Http\Requests\UpdatePublication;

class PublicationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    function __construct()
    {
        $this->publication = new Publication;
        $this->publication_category = new PublicationCategories;
        $this->file = new File;
    }

    /**
     * Redirect to Publications Listing
     *
     * @return void
     */

    public function index()
    {
        $publications = $this->publication->get_paginated_pub_data();

        return view('admin.publications.index', compact('publications'));
    }

    /**
     * Create new Publication
     *
     * @return void
     */

    public function create()
    {
        $pub_cats = $this->publication_category->get_pub_cat_data();

        return view('admin.publications.create', compact('pub_cats'));
    }

    /**
     * Store new Publication
     *
     * @return void
     */

    public function store(AddPublication $request)
    {
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;
        $category_id = $request->category_id;
        $pub_title = $request->title;

        // create an image
        if(Storage::exists($request->file)) {
            Storage::delete('public/files/'. $request->file_name);
        } else {
            Storage::put('public/files', $request->file);
        }

        if(!is_null($request->file)) {
            $file = $this->file->store_file_data($request, $user_id, $role_id);
        } else {
            $file = NULL;
        }

        $this->publication->store_pub_data($request, $user_id, $role_id, $file->id, $category_id);
        
        return redirect()->back()->with('success', $pub_title . ' ' . 'Blog has been successfully published, Do you want to create new blog?');
    }

    /**
     * Edit Publication
     *
     * @return void
     */

    public function edit($category_id, $id, $slug_url)
    {
        $pub_details = $this->publication->get_details($id);
        $pub_cats = $this->publication_category->get_pub_cat_data();

        return view('admin.publications.edit', compact('pub_details', 'pub_cats'));
    }

    /**
     * Update Publication
     *
     * @return void
     */
    public function update(UpdatePublication $request, $id)
    {
        $id = decrypt($id);
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;
        $category_id = $request->category_id;
        $pub_title = $request->title;
        $file_id = $request->file_id;

        
        // Check the File if not empty
        if(!is_null($request->file)) {
            // Check the file if missing and delete
            if (!Storage::exists($request->file)) {
                $del = Storage::delete('public/files/'. $request->file_name);
            }
            // Save the file in local storage
            Storage::put('public/files', $request->file);
            // Save the file data into DB
            $file = $this->file->update_file_data($request, $user_id, $role_id, $file_id);
        } else {
            $file = NUll;
        }


        if(!is_null($file)) {
            $this->publication->update_pub_data($request, $user_id, $role_id, $file_id, $category_id, $id);
        } else {
            $this->publication->update_pub_data_without_file($request, $user_id, $role_id, $category_id, $id);
        }

        return redirect()->route('pub_index')->with('success', $pub_title . ' ' . 'Blog has been successfully updated.');
    }

    /**
     * Delete Publication
     *
     * @return void
     */

    public function delete(Request $request)
    {
        $this->publication->delete_data($request);

        return redirect()->back()->with('success', 'Blog has been successfully deleted.');
    }

    /**
     * Archive Publications
     *
     * @return void
     */

    public function archive()
    {
        $pub_archives = $this->publication->get_pub_archives_data();
        $pub_cat_archives = $this->publication_category->get_pub_cat_archive_data();

        return view('admin.publications.archive', compact('pub_archives', 'pub_cat_archives'));
    }

    /**
     * Restore Publications
     *
     * @return void
     */

    public function restore(Request $request)
    {
        $this->publication->restore_pub_data($request);
        return redirect()->back()->with('success', 'Blog has been successfully restored!');
    }

    /**
     * Destroy Publications or Delete Permanently
     *
     * @return void
     */

    public function destroy(Request $request)
    {
        Storage::delete('public/files/'. $request->file_name);
        $this->file->delete_file_data($request);
        $this->publication->destroy_pub_data($request);
        return redirect()->back()->with('success', 'Blog has been successfully deleted permanently!');
    }
}
