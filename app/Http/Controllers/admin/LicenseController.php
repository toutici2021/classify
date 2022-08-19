<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\DotEnvService;
use Illuminate\Http\Request;

class LicenseController extends Controller
{

    public function register()
    {
        $data = [
            'title' => 'Activate your application',
            'activeMenu' => 'register',
            'menu' => ''
        ];

        if (auth()->user()->user_type == 'user')
        {
            return view( 'frontend.member.license.register', $data);
        } else {
            return view('admin.license.register', $data);
        }



    }


    public function activate(Request $request)
    {

        \Artisan::call('config:clear');
        \Artisan::call("cache:clear");

        $purchase_code = $request->purchase_code;
        $user_name = $request->user_name;

        $accessToken = '9qi74oseTwEVH4NhVY5LuJ0DYTDKXJ3c';
        $buyer_purchase_code = trim($purchase_code);
        if (!preg_match("/^(\w{8})-((\w{4})-){3}(\w{12})$/", $buyer_purchase_code))
            return ['message' => 'Invalid purchase code'];
        $purchase = new EnvatoPurchaseCodeVerifier($accessToken);
        $verified = $purchase->verified($buyer_purchase_code);
        $dotEnvService = new DotEnvService();

        if (empty($purchase_code) && empty($user_name)) {
            $dotEnvService->setEnvironmentValue('PURCHASE_CODE', '');
            update_option('purchase_code', '');
            update_option('buyer_name', '');
            update_option('product_name', '');
        }

        if ($verified) {
            if (!empty($buyer_purchase_code) && $verified->buyer == $user_name) {
                $dotEnvService->setEnvironmentValue('PURCHASE_CODE', $buyer_purchase_code);
                update_option('purchase_code', $buyer_purchase_code);
                update_option('buyer_name', $verified->buyer);
                update_option('product_name', $verified->item->name);

                if ($request->ajax()) {
                    return ['success' => 1, 'message' => 'Product Activated'];
                }
            } else {
                $dotEnvService->setEnvironmentValue('PURCHASE_CODE', '');
                update_option('purchase_code', '');
                update_option('buyer_name', '');
                update_option('product_name', '');

                if ($request->ajax()) {
                    return ['error' => 1, 'message' => 'Invalid purchase code'];
                }
            }
        }
    }
}
