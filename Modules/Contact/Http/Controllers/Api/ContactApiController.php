<?php

namespace Modules\Contact\Http\Controllers\Api;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;
use Modules\Admin\Entities\Support;
use Modules\Contact\Http\Requests\ContactApiRequest;

class ContactApiController
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactApiRequest $request)
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

        $messageText = 'Thank you for contacting us. We will get back to you soon.';
        Mail::raw($messageText, function (Message $message) use ($request) {
            $message->subject('Thank you for reaching GalaxyTelecom Support')
                ->to($request->email);
        });

        Mail::raw($request->message, function (Message $message) use ($request) {
            $message->subject($request->subject)
                ->replyTo($request->email)
                ->to(setting('store_email'));
        });

        return response()->json(['success' => 'Nessage sent successfully.']);
    }
}
