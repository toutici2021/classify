<?php

namespace App\Http\Controllers\member;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\MemberPersonalDetailsRequest;
use Image;
use Auth;
use Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $data['title'] = 'Profile';
        $data['menu'] = 'profile';
        return view('frontend.member.profile.index', $data);
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['menu'] = 'edit_profile';
        return view('frontend.member.profile.edit', $data);
    }

    public function update(MemberPersonalDetailsRequest $request)
    {
        $user = auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->description = $request->description;

        if ($request->photo)
        {
            $media_name = $request->photo;
            $imageName = $media_name->getClientOriginalName();
            $fileName = time() . '-' . $imageName;
            $imageUrl = 'public/uploads/profile/'.$fileName;
            Image::make($media_name)->resize(null, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($imageUrl);

            $user->photo = $imageUrl;
        }
        $user->save();

        $notification = array(
            'message' => 'Successfully saved',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['menu'] = 'change_password';
        return view('frontend.member.profile.change-password', $data);
    }

    public function savePassword(ChangePasswordRequest $request)
    {

        $old_password = $request->old_password;
        $new_password = $request->new_password;

        if (Auth::check()) {
            $logged_in_user = Auth::user();

            if (Hash::check($old_password, $logged_in_user->password)) {
                $logged_in_user->password = Hash::make($new_password);
                $logged_in_user->save();
                return redirect()->back()->with(responseMessage(1, 'success', "Password has been changed"));
            }
            return redirect()->back()->withInput()->with(responseMessage(0, 'error', "Unable to change password"));
        }
    }

}
