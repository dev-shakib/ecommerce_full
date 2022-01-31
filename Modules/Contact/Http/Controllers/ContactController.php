<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Modules\Admin\Entities\Support;
use Modules\Contact\Http\Requests\ContactRequest;

class ContactController
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $imgeNameArr = [];

        if($request->hasFile('attachment')){
            $files = $request->file('attachment');
            foreach($files as $file){
                $fileName = time().$file->getClientOriginalName();
                $file->move(public_path('storage/support/'), $fileName);
                $imgeNameArr[] = $fileName;
            }
        }
        $addSupport = new Support();
        $addSupport->f_name = $request->f_name;
        $addSupport->l_name = $request->l_name;
        $addSupport->email = $request->email;
        $addSupport->subject = $request->subject;
        $addSupport->phone = $request->phone;
        $addSupport->status = 'open';
        $addSupport->message = $request->message;
        $addSupport->attachment = json_encode($imgeNameArr);
        $addSupport->save();

        Mail::raw($request->message, function (Message $message) use ($request) {
            $message->subject($request->subject)
                ->replyTo($request->email)
                ->to(setting('store_email'));
        });

        return back()->with('success', trans('contact::messages.your_message_has_been_sent'));
    }
}
