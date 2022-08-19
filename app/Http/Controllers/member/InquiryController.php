<?php

namespace App\Http\Controllers\member;

use App\Advertise;
use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Inquiry_reply;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    protected $user_email;
    protected $subject;
    protected $mail_from_address;
    protected $mail_from_name;

    public function index($id = null)
    {
        $data['title'] = 'Message Center';
        $data['menu'] = 'inquiry';

        $inquiriesForUserToIds = Inquiry::where('user_to', Auth::user()->id)->select('id')->get();
        $userToIds = [];
        foreach ($inquiriesForUserToIds as $inquiriesForUserToId)
        {
            $userToIds[] = $inquiriesForUserToId->id;
        }
        $inquiriesForReplies = Inquiry::where('user_from', Auth::user()->id)->where('has_reply', 'yes')->select('id')->get();
        $idsForReply = [];

        foreach ($inquiriesForReplies as $inquiriesForReply)
        {
            $idsForReply[] = $inquiriesForReply->id;
        }

        $inquiriesIds = array_unique(Arr::collapse([$userToIds, $idsForReply]));
        $data['inquiries'] = Inquiry::whereIn('id', $inquiriesIds)->orderByDesc('id')->paginate(25);

        if ($id)
        {
            $data['inquiry'] = Inquiry::find($id);
        } else {
            $data['inquiry'] = Inquiry::whereIn('id', $inquiriesIds)->orderByDesc('id')->first();
        }

        if ($data['inquiry'] && ($data['inquiry']->unseen_user == Auth::user()->id))
        {
            $data['inquiry']->read_status =  'yes';
            $data['inquiry']->save();
        }

        return view( 'frontend.member.inquiry.index', $data);
    }

    public function store(Request $request)
    {
        if (Advertise::where('id', $request->advertise_id)->where('status', '1')->count() > 0)
        {
            $ad = Advertise::find($request->advertise_id);
            $inquiry = new Inquiry();
            $inquiry->user_from = Auth::user()->id;
            $inquiry->user_to = $ad->user_id;
            $inquiry->unseen_user = $ad->user_id;
            $inquiry->advertise_id = $request->advertise_id;
            $inquiry->subject = $request->subject;
            $inquiry->message = $request->message;
            $inquiry->save();

            if ($ad->user)
            {
               if (checkSMTPSetting())
               {
                   /** send mail to member */
                   $this->user_email = $ad->user->email;
                   $this->mail_from_address = $_ENV['MAIL_FROM_ADDRESS'];
                   $this->mail_from_name = $_ENV['MAIL_FROM_NAME'];
                   $this->subject = 'Inquiry on '.$ad->title.' from '.get_option('site_title');
                   $body = 'Hello '.$ad->user->full_name .'<br> <br>Subject: '.$request->subject.' <br /> <br> Message '. $request->message;
                   Mail::send('emails.send-mail', ['body' => $body], function ($message) {
                       $message->subject($this->subject);
                       $message->from($this->mail_from_address, $this->mail_from_name);
                       $message->to($this->user_email);
                   });
               }
            }


            $notification = array(
                'message' => 'Message has been send',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);


        } else {
            $notification = array(
                'message' => 'Something went wrong',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function replyStore(Request $request, $inquiry_id)
    {

        $inquiry = Inquiry::find($inquiry_id);

        $replyInquiry = new Inquiry_reply();
        $replyInquiry->inquiry_id = $inquiry_id;
        $replyInquiry->user_from = Auth::user()->id;
        $replyInquiry->user_to = $inquiry->user_to == Auth::user()->id ? $inquiry->user_from : $inquiry->user_to;
        $replyInquiry->message = $request->message;
        $replyInquiry->save();


        $inquiry->unseen_user = $inquiry->user_to == Auth::user()->id ? $inquiry->user_from : $inquiry->user_to;
        $inquiry->read_status = 'no';
        $inquiry->has_reply = 'yes';
        $inquiry->save();


        if (checkSMTPSetting())
        {
            /** send mail to member */
            $this->user_email = $inquiry->user_to == Auth::user()->id ? $inquiry->userFrom->email : $inquiry->userTo->email;

            $full_name  = $inquiry->user_to == Auth::user()->id ? $inquiry->userFrom->full_name : $inquiry->userTo->full_name;
            $this->mail_from_address = $_ENV['MAIL_FROM_ADDRESS'];
            $this->mail_from_name = $_ENV['MAIL_FROM_NAME'];
            $this->subject = 'Inquiry reply from '.get_option('site_title');
            $detail_url = route('memberInquiry', [$inquiry->id]);
            $body = 'Hello '.$full_name .' <br /> <br> Message '. $request->message . '<br /> <br /> <a href="'.$detail_url.'">Click here to reply</a>';
            Mail::send('emails.send-mail', ['body' => $body], function ($message) {
                $message->subject($this->subject);
                $message->from($this->mail_from_address, $this->mail_from_name);
                $message->to($this->user_email);
            });
        }


        $notification = array(
            'message' => 'Message has been send',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
}
