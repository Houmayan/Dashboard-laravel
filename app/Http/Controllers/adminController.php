<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules;

use App\Models\User; //Here is the model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;


class adminController extends Controller

{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => "Successfully Logged out",
            'alert-type' => 'success'
        );

        return redirect('login')->with($notification);
    }

    public function Profile()
    {
        $id =  Auth::user()->id;
        $adminData = User::find($id); //This "User" is model name.

        return view('admin.admin_profile_view', compact('adminData'));
    }
    public function EditProfile()
    {
        $id = Auth::user()->id;
        $editData = User::find($id); //This "User" is model name.

        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function StoreProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id); //This "User" is model name.

        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;

        if ($request->file('profile_image')) //profile_image is db image field name
        {
            $file = $request->file('profile_image'); //here profile image is database image field name
            $filename = date('ymdHi') . $file->getClientOriginalName(); // renaming the image. video image update part 4
            $file->move(public_path('upload/admin_images'), $filename); // saving the image in public folder. under public/upload/admin_image folder.
            $data['profile_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => "Successfully Upadated",
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }
    public function ChangePassword()
    {

        return view('admin.changePassword');
    }

    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword',
        ]);


        $hashedPassword = Auth::user()->password;
        #Match The Old Password
        if (Hash::check($request->oldpassword,$hashedPassword))

        {   
            $users = User::find(Auth::id());
            $users ->password = bcrypt($request->newpassword);
            $users ->save();
            Session()->flash('message','Password updated Succesfully');
            return redirect()->back();
        }
        else
        {
            Session()->flash('message',"Password didn't match.");
            return redirect()->back();
        }


    }    
}   
