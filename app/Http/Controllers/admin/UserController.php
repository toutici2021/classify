<?php

namespace App\Http\Controllers\admin;

use App\Ad;
use App\Advertise;
use App\Country;
use App\Favorite;
use App\Favourite;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\StoreAdministratorRequest;
use App\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Arr;
use Illuminate\Routing\Redirector;
use Str;

class UserController extends Controller
{

    public function index()
    {
        $data = [
            'title' => 'Users',
            'activeMenu' => 'list-users',
            'users' => User::whereUserType('user')->get()
        ];

        return view('admin.users.users', $data);
    }

    public function changePassword()
    {
        $data = [
            'title' => 'Change Account Password',
            'activeMenu' => 'changePassword'
        ];
        return view('admin.users.change-password', $data);
    }

    public function updatePassword(ChangePasswordRequest $request)
    {

        $old_password = $request->old_password;
        $new_password = $request->new_password;

        if (Auth::check()) {
            $logged_in_user = Auth::user();

            if (Hash::check($old_password, $logged_in_user->password)) {
                $logged_in_user->password = Hash::make($new_password);
                $logged_in_user->save();
                return redirect()->route('change_password')->with(responseMessage(1, 'success', "Password updated"));
            }
            return redirect()->route('change_password')->with(responseMessage(0, 'error', "Unable to change password"));
        }
    }


    public function userDetails($id)
    {
        $data = [
            'title' => 'User Details',
            'activeMenu' => 'list-users',
            'user' => User::findOrFail($id),
        ];
        return view('admin.users.user-details', $data);
    }


    public function profile()
    {
        $data = [
            'title' => 'User Details',
            'activeMenu' => 'user-details',
            'user' => Auth::user(),
        ];
        return view('admin.users.profile', $data);
    }

    /**
     * @return Application|Factory|View
     */
    public function editProfile()
    {
        $data = [
            'title' => 'Edit Profile',
            'activeMenu' => 'edit-profile',
            'user' => Auth::user(),
            'countries' => Country::all()
        ];

        return view('admin.users.edit-profile', $data);
    }


    /**
     * @param ProfileUpdateRequest $request
     * @return RedirectResponse
     */

    public function updateProfile(ProfileUpdateRequest $request)
    {

        $inputs = Arr::except($request->input(), ['_token']);
        $user = Auth::user();
        $user->update($inputs);

        return redirect()->route('profile')->with(responseMessage(1, 'success', 'Profile has been updated'));
    }


    /**
     * @return Application|Factory|View
     */

    public function administrators()
    {
        $data = [
            'title' => 'Administrators',
            'activeMenu' => 'administrators',
            'users' => User::whereUserType('admin')->get()

        ];

        return view('admin.administrator.administrators', $data);

    }


    /**
     * @return Application|Factory|View
     */

    public function addAdministrator()
    {
        $data = [
            'title' => 'Add New Administrator',
            'activeMenu' => 'administrators',
            'countries' => Country::all()
        ];

        return view('admin.administrator.add_administrator', $data);


    }


    /**
     * @param StoreAdministratorRequest $request
     * @return Application|RedirectResponse|Redirector
     */

    public function storeAdministrator(StoreAdministratorRequest $request)
    {

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone' => $request->phone,
            'user_type' => 'admin',
            'active_status' => '1',
            'activation_code' => Str::random(30)
        ];

        User::create($data);
        return redirect(route('administrators'))->with(responseMessage(1, 'success', 'New administrator has been created'));


    }


    public function blockUnblockUser($user_id, $status)
    {
        $status = $status == 'unblock' ? '1' : '2';
        User::whereId($user_id)->update(['active_status' => $status]);

        if ($status == 1) {
            return responseMessage(1, 'success', 'User has been unblocked');
        }
        return responseMessage(1, 'error', 'User has been blocked');
    }


    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ExceptionAlias|Exception
     */

    public function removeAdminUser(Request $request)
    {
        $deleteUser = User::where('id', $request->user_id)->delete();
        if ($deleteUser) {
            return response()->json(responseMessage(1, 'success', "Admin user has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete category"));
    }





    /**
     * @param Request $request
     * @return array
     * @throws Exception
     */

    public function deleteUser($id)
    {
        User::find($id)->delete();
        return ['success' => 1, 'message' => 'User has been removed from system'];
    }


}
