<?php

namespace App\Http\Controllers\admin;

use App\Advertise;
use App\ContactQuery;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function dashboard()
    {


        $data = [
            'title' => 'Dashboard',
            'activeMenu' => 'dashboard',
            'five_contact_messages' => ContactQuery::orderBy('id', 'desc')->paginate(5),
            'ads' => Advertise::whereStatus('1')->orderByDESC('view')->paginate(10),
            'users' => count(User::where('user_type', 'user')->get()),
            'active_ads' => Advertise::whereStatus('1')->orderBy('id', 'desc')->count(),
            'income_this_month' => Payment::select('amount')
                ->whereMonth('created_at', Carbon::now()->month)->where('status', 'success')
                ->sum('amount')
        ];

        $monthly_revenue = [];
        for ($m = 1; $m <= 12; $m++) {
            $monthly_revenue[$m]['month'] = date("F", mktime(0, 0, 0, $m, 10));
        }
        return view('admin.dashboard', $data);
    }

    public function getMonthlyRevenue()
    {
        $monthly_revenue = [];
        for ($m = 1; $m <= 12; $m++) {
            $monthly_revenue[$m]['month'] = date("F", mktime(0, 0, 0, $m, 10));
            $monthly_revenue[$m]['amount'] = Payment::whereYear('created_at', Carbon::now()->format('Y'))->whereMonth('created_at', $m)->where('status', 'success')->sum('amount');
        }

        return response($monthly_revenue);
    }
}
