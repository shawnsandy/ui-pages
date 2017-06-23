<?php namespace ShawnSandy\PageKit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

use Mail;

/**
 * Class PageKitController
 * @package ShawnSandy\PageKit\Controllers
 */
class PageKitController extends Controller
{

    /**
     * Process the contact form name.
     *
     * @return Response
     */
    public function contactUs(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]
       );
        Mail::send(
            'page::emails.contact-info', ['data' => $request->all()], function (Message $message) use ($request) {
            $message->from(config("mail.username"), ': Contact request');
            $message->to($this->config("mail.username"), 'CTSFLA')
                ->subject('Contact request');
        }
        );
        return back()->with('success', config('pagekit.contact_us_response', 'Your message has been sent. Thank you!'));
    }

    public function config()
    {
        return view('page::admin.config');
    }

}
