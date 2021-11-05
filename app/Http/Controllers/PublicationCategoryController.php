<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationCategories;
use Auth;

// Requests

use App\Http\Requests\ValidatePublicationCategories;

class PublicationCategoryController extends Controller
{
    function __construct()
    {
        $this->pub_category = new PublicationCategories;
    }

    public function index()
    {
        $pub_cats = $this->pub_category->get_pub_cat_data();

        return view('admin.publications.category', compact('pub_cats'));
    }

    public function store(ValidatePublicationCategories $request)
    {
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;
        $cat_name = $request->category_name;

        $this->pub_category->store_pub_category_data($request, $user_id, $role_id);

        return redirect()->back()->with('success', $cat_name . ' ' . 'Category has been successfully created.');
    }

    public function update(ValidatePublicationCategories $request)
    {
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;
        $cat_name = $request->category_name;

        $this->pub_category->update_pub_category_data($request, $user_id, $role_id);

        return redirect()->back()->with('success', $cat_name . ' ' . 'Category has been successfully updated.');
    }

    public function delete(Request $request)
    {
        $this->pub_category->delete_pub_category_data($request);

        return redirect()->back()->with('success', 'Category has been successfully deleted.');
    }
}
