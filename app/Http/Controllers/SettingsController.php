<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\File;
use Storage;
use Auth;

class SettingsController extends Controller
{
    function __construct()
    {
        $this->file = new File;
    }

    public function index()
    {
        return view('admin.settings.index');
    }

    /**
     * File Manager Index
     *
     * @return void
     */
    public function files()
    {
        $files = $this->file->get_file_data();

        return view('admin.settings.files', compact('files'));
    }

    public function rename(Request $request)
    {
        $user_id = Auth::user()->id;
        $role_id = Auth::user()->role_id;

        $this->file->rename_original_file_name($request, $user_id, $role_id);

        return redirect()->back()->with('success', 'File has been successfully renamed.');
    }

    /**
     * File Manager Delete Function
     *
     * @return void
     */
    public function delete_file(Request $request)
    {
        Storage::delete('public/files/'. $request->file_name);
        
        $this->file->delete_file_data($request);

        return redirect()->back()->with('success', 'File has been successfully deleted.');
    }

    /**
     * Password Index
     *
     * @return void
     */
    public function password()
    {
        return view('admin.settings.change-password');
    }

    /**
     * Update the user password.
     *
     * @return void
     */
    public function update_password(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new-password'));
        $user->save();
        
        return redirect()->back()->with('success', 'Password changed successfully!');
    }
}
