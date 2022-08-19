<?php

namespace App\Http\Controllers\frontend;

use App\ContactQuery;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendContactUsInfoReuest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    protected $send_to_email;
    protected $mail_from_address;
    protected $mail_from_name;
    protected $subject;

    public function contactUs()
    {
        $data['meta'] = staticPageMeta(12);
        $data['title'] = 'Contact Us';
        return view('frontend.page.contact-us', $data);
    }

    public function dynamicPage($path1)
    {
        if (Post::where('slug', $path1)->count() > 0)
        {
            $data['post'] = Post::where('slug', $path1)->first();
            $data['meta'] =  array(
                        'meta_title' => $data['post']->title,
                        'meta_description' => $data['post']->title
                    );
            $data['title'] = $data['post']->title;
            return view('frontend.page.dynamic-page', $data);
        } else {
            return response()->view('errors.404', [], 404);
        }
    }

    public function sendContactUsInfo(SendContactUsInfoReuest $reuest)
    {

        $contactInquiry = new ContactQuery();
        $contactInquiry->name = $reuest->name;
        $contactInquiry->email = $reuest->email;
        $contactInquiry->message = $reuest->message;
        $contactInquiry->save();

        if (checkSMTPSetting())
        {
            /** send mail to member */
            $this->send_to_email = $_ENV['MAIL_FROM_ADDRESS'];
            $this->mail_from_address = $_ENV['MAIL_FROM_ADDRESS'];
            $this->mail_from_name = $_ENV['MAIL_FROM_NAME'];
            $this->subject = 'You received a message from '.$reuest->name. ' Email: '. $reuest->email;

            $body = $reuest->message;
            Mail::send('emails.send-mail', ['body' => $body], function ($message) {
                $message->subject($this->subject);
                $message->from($this->mail_from_address, $this->mail_from_name);
                $message->to($this->send_to_email);
            });
        }

        $notification = array(
            'message' => 'Message has been send',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
