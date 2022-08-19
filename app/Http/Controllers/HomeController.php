<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->user_type == 'user')
        {
            return redirect(route('memberDashboard'));

        } else {
            return redirect(route('dashboard'));
        }
    }
}
