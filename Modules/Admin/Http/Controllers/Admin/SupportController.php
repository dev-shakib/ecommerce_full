<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Modules\Admin\Entities\Support;
use DataTables;
use Illuminate\Http\Request;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class SupportController
{

    /**
     * Display the support page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {

            $data = Support::select('*');

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="/admin/support/'.$row->id.'" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->orderColumn('id', '-id $1')
                ->make(true);
        }

        return view('admin::support.index');
    }

    /**
     * Show single support.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id) {
        $support = Support::find($id);
        return view('admin::support.show', compact('support'));
    }

    /**
     * Update single support.
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id) {
        $support = Support::find($id);
        $support->status = $request->status;
        $support->save();
        return response()->json(['success' => 'Status change successfully.']);
    }

    public function supportReplay(Request $request)
    {
        Mail::raw($request->replay, function (Message $message) use ($request) {
            $message->subject('GalaxTelecom Support')
                ->replyTo($request->email)
                ->to($request->email);
        });

        return back()->with('success', trans('contact::messages.your_message_has_been_sent'));
    }

}
