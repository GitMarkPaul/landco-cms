<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Image;

class File extends Model
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
        'original_file_name',
        'file_name',
        'size',
        'type',
        'dimension'
    ];

    /**
     * Save the file
     *
     * @var array
     */
    public function store_file_data($request, $user_id, $role_id)
    {   
        // Get the dimension of the file
        $f_width = Image::make($request->file)->width();
        $f_height = Image::make($request->file)->height();

        // Concatenate the dimension of the given value
        $dimension = $f_width .' '.'x'.' '.$f_height;

        return  $this->create([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'original_file_name' => $request->file->getClientOriginalName(),
            'file_name' => $request->file->hashName(),
            'size' => $request->file->getSize(),
            'type' => $request->file->getClientOriginalExtension(),
            'dimension' => $dimension
        ]);
    }

    /**
     * Update the file
     *
     * @var array
     */
    public function update_file_data($request, $user_id, $role_id, $file_id)
    {
        // Get the dimension of the file
        $f_width = Image::make($request->file)->width();
        $f_height = Image::make($request->file)->height();

        // Concatenate the dimension of the given value
        $dimension = $f_width .' '.'x'.' '.$f_height;

        return $this->find($file_id)->update([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'original_file_name' => $request->file->getClientOriginalName(),
            'file_name' => $request->file->hashName(),
            'size' => $request->file->getSize(),
            'type' => $dimension
        ]);
    }

    /**
     * Fetch all the file list
     *
     * @var array
     */
    public function get_file_data()
    {
        return $this->orderBy('updated_at', 'DESC')->paginate(10);
    }

    /**
     * Rename the file
     *
     * @var array
     */
    public function rename_original_file_name($request, $user_id, $role_id)
    {
        return $this->find(decrypt($request->id))->update([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'original_file_name' => $request->original_file_name
        ]);
    }

    /**
     * Destroy the file
     *
     * @var array
     */
    public function delete_file_data($request)
    {
        return $this->findOrFail(decrypt($request->id))->forceDelete();
    }
}
