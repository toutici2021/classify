<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Newsletter;

class EmailSubscriptionController extends Controller
{

    public function addSubscriber(Request $request)
    {
        $email = $request->email;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['status' => 0, 'message' => 'Invalid email format. Please input valid email address']);
        }


        if (Newsletter::hasMember($email)) {
            return response()->json(['status' => 0, 'message' => 'You are already subscribed to our mailing list.']);
        }


        Newsletter::subscribe($email);
        return response()->json(['status' => 1, 'message' => 'You have been subscribed to our mailing list.']);
    }


}
