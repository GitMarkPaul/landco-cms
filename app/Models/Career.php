<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Career extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'file_id',
        'slug',
        'title',
        'excerpt',
        'location',
        'content',
        'status'
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

    public function get_career_data()
    {
        return $this->get();
    }

    public function store_career_data($request, $user_id, $file_id)
    {
        return $this->create([
            'user_id' => $user_id,
            'file_id' => $file_id,
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'location' => $request->location,
            'content' => $request->content,
            'status' => $request->status
        ]);
    }

    public function get_career_details_by_slug($slug)
    {
        return $this->where('slug', $slug)->first();
    }

    public function update_career_data($request, $user_id, $file_id, $id)
    {
        return $this->find($id)->update([
            'user_id' => $user_id,
            'file_id' => $file_id,
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'location' => $request->location,
            'content' => $request->content,
            'status' => $request->status
        ]);
    }

    public function delete_career_data_by_id(int $id)
    {
        return $this->destroy($id);
    }

    public function getDatePostedAttribute()
    {
        return Str::of($this->created_at->format('Y d m s'))->studly();
    }
}
