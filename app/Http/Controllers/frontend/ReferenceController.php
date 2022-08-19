<?php

namespace App\Http\Controllers\frontend;

use App\Advertise;
use App\Brand;
use App\Category;
use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ReferenceController extends Controller
{


    public function subcategoeyForCategory($category_id)
    {
       return Category::where('category_id', $category_id)->where('category_id', '!=', 0)->orderBy('category_name', 'asc')->get();
    }

    public function stateForCountry($country_id)
    {
        return State::where('country_id', $country_id)->orderBy('state_name', 'asc')->get();
    }

    public function cityForState($state_id)
    {
        return City::where('state_id', $state_id)->orderBy('city_name', 'asc')->get();
    }

    public function loginFromModal(Request $request)
    {
        if ($request->ajax()) {
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'active_status' => '1'])) {
                $user = User::where('email', $request->input('email'))->where('active_status', '1')->first();
                Auth::login($user);
                return $user;
            } else {
                return 0;
            }
        }
    }
}
