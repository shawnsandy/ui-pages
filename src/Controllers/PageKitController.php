<?php namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Mail\Message;
use Mail;

class PageKitController extends Controller
{


    /**
     * Process the contact form name.
     *
     * @return Response
     */
    public function contactUs(Request $request)
    {
        $this->send_contact($request);
        return back();
    }

    public function config()
    {
        return view('page::admin.config');
    }

    /**
     * @param Request $request
     */
    public function send_contact(Request $request)
    {
        Mail::send('page::emails.contact-info', ['data' => $request->all()], function (Message $message) use ($request) {
            $message->from($request->email, ': Contact request');
            $message->to('shawnasndy04@gmail.com', 'shawn sandy')->subject('Your Reminder!');
        });
    }
}
