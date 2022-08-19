<?php

namespace App\Http\Controllers\admin;

use App\Exports\FilterPaymentExport;
use App\Exports\PaymentExport;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Session;

class ReportController extends Controller
{


    /**
     * @param null $month
     * @return Application|Factory|View
     */
    public function paymentReport($month = null)
    {

        $data = [
            'title' => 'Payment Report',
            'activeMenu' => 'payment-report',
            'payments' => Payment::whereStatus('success')->whereYear('created_at', Carbon::now()->format('Y'))->with('ads', 'user')->get(), // Only get the payment for successful transaction
            'currentYear' => Carbon::now()->format('Y'),
            'currentMonth' => Carbon::now()->format('m'),
            'totalIncome' => Payment::whereStatus('success')->sum('amount'),
            'totalAds' => Payment::whereStatus('success')->count(),
            'selectedMonth' => $month
        ];

        return view('admin.report.payment', $data);
    }


    public function getMonthlyPaymentReport()
    {
        $monthly_revenue = [];
        for ($m = 1; $m <= 12; $m++) {
            $monthly_revenue[$m]['amount'] = Payment::whereYear('created_at', Carbon::now()->format('Y'))->whereMonth('created_at', $m)->where('status', 'success')->sum('amount');
        }
        return response($monthly_revenue);
    }




    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function filterPaymentReport(Request $request)
    {
        session::put('selected_year', $request->year);
        $data = [
            'title' => 'Payment report for - ' . $request->year,
            'activeMenu' => 'payment-report',
            'currentYear' => Carbon::now()->format('Y'),
            'selectedYear' => $request->year,
            'totalIncome' => Payment::whereStatus('success')->whereYear('created_at', $request->year)->sum('amount'),
            'totalAds' => Payment::whereStatus('success')->whereYear('created_at', '=', $request->year)->count(),
            'payments' => Payment::whereYear('created_at', '=', $request->year)->whereStatus('success')->with('ads', 'user')->get(),
        ];
        return view('admin.report.payment-filter', $data);

    }

    public function getMonthlyPaymentReportForSelectedYear()
    {
        $monthly_revenue = [];
        for ($m = 1; $m <= 12; $m++) {
            $monthly_revenue[$m]['amount'] = Payment::whereYear('created_at', session::get('selected_year'))->whereMonth('created_at', $m)->where('status', 'success')->sum('amount');
        }

        return response($monthly_revenue);
    }


    /**
     * @param Request $request
     * @return BinaryFileResponse
     */

    public function paymentExport(Request $request)
    {
        if (!empty($request->year)) {
            return Excel::download(new FilterPaymentExport($request->year), 'payment.xlsx');
        }
        return Excel::download(new PaymentExport, 'payment.xlsx');
    }


    public function userRegisterReport()
    {

    }
}
