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
            'file_link' => $request->file_link,
            'title' => $request->title,
            'meta_link' => $request->meta_link,
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

    public function update_pub_data($request, $user_id, $role_id, $file_id, $category_id, $id)
    {
        return $this->find($id)->update([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'file_id' => $file_id,
            'file_link' => $request->file_link,
            'title' => $request->title,
            'meta_link' => $request->meta_link,
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
            'file_link' => $request->file_link,
            'title' => $request->title,
            'meta_link' => $request->meta_link,
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

    public function get_pub_data()
    {
        return $this->orderBy('updated_at', 'DESC')->get([
            'id',
            'file_id',
            'slug_url',
            'title',
            'category_id',
            'meta_link',
            'author',
            'published_on',
            'status',
            'created_at'
        ]);
    }

    public function get_paginated_pub_data() 
    {
        return $this->orderBy('updated_at', 'DESC')->paginate(10);
    }

    public function delete_data($request)
    {
        return $this->findOrFail(decrypt($request->id))->delete();
    }

    public function get_pub_archives_data()
    {
        return $this->onlyTrashed()->get([
            'id',
            'file_id',
            'title',
            'deleted_at'
        ]);
    }

    public function restore_pub_data($request)
    {
        return $this->where('id', decrypt($request->id))->withTrashed()->restore();
    }

    public function destroy_pub_data($request)
    {
        return $this->where('id', decrypt($request->id))->onlyTrashed()->forceDelete();
    }

    public function getDatePublishedAttribute()
    {
        return Str::of($this->created_at->format('Y d m s'))->studly();
    }

    public function getPermalinkAttribute()
    {
        return [Str::slug($this->category->category_name), Str::of($this->created_at->format('Y d m s'))->studly(), $this->slug_url];
    }
}
