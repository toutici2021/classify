<?php

namespace App\Http\Controllers\admin;

use App\Contact_query;
use App\ContactQuery;
use App\Http\Controllers\Controller;
use App\Mail\ReplyEnquiry;
use Illuminate\Http\Request;
use Mail;

class EnquiryController extends Controller
{
    public function contactMessages()
    {
        $data = [
            'title' => 'Contact Messages',
            'activeMenu' => 'contact-messages',
            'messages' => ContactQuery::orderBy('id', 'desc')->paginate(20)
        ];

        return view('admin.enquiries.enquiry', $data);
    }


    public function sendEnquiryReply(Request $request)
    {
        if (checkSMTPSetting())
        {
            Mail::to($request->enquiryReplyTo)->send(new ReplyEnquiry($request));
        }

        return redirect()->back()->with(responseMessage(1, 'success', 'Reply sent'));
    }

}
