<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicationCategories;
use Auth;

// Requests

use App\Http\Requests\AddPublicationCategories;

class PublicationCategoryController extends Controller
{
    function __construct()
    {
        $this->pub_category = new PublicationCategories;
    }

    public function index()
    {
        return view('admin.publications.category');
    }

    public function store(AddPublicationCategories $request)
    {
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;

        $this->pub_category->store_pub_category_data($request, $user_id, $role_id);

        return redirect()->back();
    }
}
