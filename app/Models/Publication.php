<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Publication extends Model
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
        'file_id',
        'file_link',
        'slug_url',
        'title',
        'meta_link',
        'author',
        'excerpt',
        'content',
        'category_id',
        'label',
        'published_on',
        'location',
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

    public function file()
    {
        return $this->hasOne('App\Models\File', 'id', 'file_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\PublicationCategories', 'id', 'category_id');
    }

    public function store_pub_data($request, $user_id, $role_id, $file_id, $category_id)
    {
        return $this->create([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'file_id' => $file_id,
            'title' => $request->title,
            'slug_url' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $category_id,
            'label' => $request->label,
            'author' => $request->author,
            'published_on' => $request->published_on,
            'location' => $request->location,
            'status' => $request->status
        ]);
    }

    public function update_pub_data($request, $user_id, $role_id, $category_id, $file_id, $id)
    {
        return $this->find($id)->update([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'file_id' => $file_id,
            'title' => $request->title,
            'slug_url' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $category_id,
            'label' => $request->label,
            'author' => $request->author,
            'published_on' => $request->published_on,
            'location' => $request->location,
            'status' => $request->status
        ]);
    }

    public function update_pub_data_without_file($request, $user_id, $role_id, $category_id, $id)
    {
        return $this->find($id)->update([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'title' => $request->title,
            'slug_url' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'category_id' => $category_id,
            'label' => $request->label,
            'author' => $request->author,
            'published_on' => $request->published_on,
            'location' => $request->location,
            'status' => $request->status
        ]);
    }

    public function get_details($slug_url)
    {
        return $this->where('slug_url', $slug_url)->first();
    }

    public function get_pub_data($role_id)
    {
        return $this->where('role_id',  $role_id)->get();
    }

    public function delete_data($request)
    {
        return $this->findOrFail(decrypt($request->id))->delete();
    }
}
