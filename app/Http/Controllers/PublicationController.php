<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\PublicationCategories;
use App\Models\File;
use Auth;

// Requests

use App\Http\Requests\AddPublication;

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
        $role_id = Auth::user()->role_id;

        $publications = $this->publication->get_pub_data($role_id);

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
        
        $file = $this->file->store_file_data($request, $user_id, $role_id);

        if(!empty($file)) {
            $this->publication->store_pub_data($request, $user_id, $role_id, $file->id, $category_id);
        }

        return redirect()->back()->with('success', $pub_title . ' ' . 'Blog has been successfully published, Do you want to create new blog?');
    }

    /**
     * Edit Publication
     *
     * @return void
     */

    public function edit($slug_url)
    {
        $pub_details = $this->publication->get_details($slug_url);
        $pub_cats = $this->publication_category->get_pub_cat_data();

        return view('admin.publications.edit', compact('pub_details', 'pub_cats'));
    }

    /**
     * Update Publication
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        $id = decrypt($id);
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;
        $category_id = $request->category_id;
        $pub_title = $request->title;
        
        if(!empty($request->file) > 0) {
            $file = $this->file->store_file_data($request, $user_id, $role_id);
        } else {
            $file = Null;
        }

        if(!empty($file) > 0) {
            $this->publication->update_pub_data($request, $user_id, $role_id, $file->id, $category_id, $id);
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
}
