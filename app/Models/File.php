<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

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
        'file_name'
    ];

    /**
     * Save the file
     *
     * @var array
     */
    public function store_file_data($request, $user_id, $role_id)
    {
        $request->file->store('public/files');

        return $this->create([
            'user_id' => $user_id,
            'role_id' => $role_id,
            'original_file_name' => $request->file->getClientOriginalName(),
            'file_name' => $request->file->hashName()
        ]);
    }
}
