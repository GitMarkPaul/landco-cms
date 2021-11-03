<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PublicationCategories extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'role_id',
        'category_name',
        'slug_url',
        'status',
    ];

    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function get_pub_cat_data()
    {
        return $this->where('status', '=', 'Active')->get(['category_name', 'status', 'id']);
    }

    public function store_pub_category_data($request, $user_id, $role_id)
    {
        return $this->create([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'category_name' => $request->category_name,
            'slug_url' => Str::slug($request->category_name),
            'status' => $request->status
        ]);
    }
}
