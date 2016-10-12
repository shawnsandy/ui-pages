<?php namespace ShawnSandy\PageKit\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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
        Mail::send(
            'page::emails.contact-info', ['data' => $request->all()], function (Message $message) use ($request) {
                $message->from($request->email, ': Contact request');
                $message->to('shawnsandy04@gmail.com', 'shawn sandy')->subject('Contact request');
            }
        );
        return back();
    }

    public function config()
    {
        return view('page::admin.config');
    }


}

