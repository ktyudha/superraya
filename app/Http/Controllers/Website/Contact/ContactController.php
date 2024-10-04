<?php

namespace App\Http\Controllers\Website\Contact;

use App\Models\Inbox;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @var Inbox $inbox
     */
    protected $inbox;

    public function __construct()
    {
        View()->share('menu', 'Contact');
    }


    public function index()
    {
        return view('website.contact.index');
    }

    public function store(Request $request)
    {

        $request->validate([
            // 'g-recaptcha-response' => ['required', new ReCaptcha],
            'email' => 'required|email',
            'name_first' => 'required|string',
            'name_last' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string|max:500',
        ]);

        $inbox = new Inbox();

        $inbox['email'] = $request->email;
        $inbox['name'] = $request->name_first . ' ' .  $request->name_last;
        $inbox['subject'] = $request->subject;
        $inbox['description'] = $request->message;

        if ($inbox->save()) {
            return redirect()->route('contact.index')->with(['status' => 'success', 'message' => 'Pesan Anda Sudah Terkirim']);
        }
        return redirect()->route('contact.index')->with(['status' => 'danger', 'message' => 'Gagal, Coba lagi nanti']);
    }

    // public function subscribe(Request $request)
    // {

    //     $this->subscribe = new Subscribe();
    //     $request->validate([
    //         // 'g-recaptcha-response' => ['required', new ReCaptcha],
    //         'email' => 'required|email'
    //     ]);

    //     if ($this->subscribe->create($request->all())) {
    //         return redirect()->route('landing.index')->with(['status' => 'success', 'message' => 'Email Anda Sudah Terkirim']);
    //     }
    //     return redirect()->route('landing.index')->with(['status' => 'danger', 'message' => 'Gagal, Coba lagi nanti']);
    // }
}
