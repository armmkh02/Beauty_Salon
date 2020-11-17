<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $request->validate([
            'first_name'     => 'required|max:255',
            'last_name'      => 'required|max:255',
            // 'email'          => 'required|max:255',
            'themplate'      => 'required|max:255',
            'phone'          => 'required|max:255',
            // 'message'        => 'required|max:255'
        ]);

        $templateNumber = $request['themplate'];
        $firstname      = $request['first_name'];
        $lastname       = $request['last_name'];
        $email          = $request['email'];
        $phone          = $request['phone'];
        $message        = $request['message'];
        $them_id        = $request['themplate'];
        $themplate      = DB::table('images')->find($them_id);
        $them_path      = $themplate->path;
        $status         =  Order::STATUS[0];
        $user_id        =  $request['user_id'];

        $details = [
            'title'         => "$firstname" . '  ' . "$lastname ",
            'body'          => "Templates №:".  "  " . "$templateNumber",
            'image_text'    => "Templates Image:",
            'path'          => "$them_path",
            'email'         => "$email",
            'phone'         => "$phone",
            'message'       => "$message"
        ];

        Mail::to('valodik@gmail.com')->send(new \App\Mail\SendEmail($details));
        Mail::to($request['email'])->send(new \App\Mail\SendEmail($details));

        Order::create([
            'templateNumber'  => $templateNumber,
            'firstName'       => $firstname     ,
            'lastName'        => $lastname      ,
            'email'           => $email         ,
            'phone'           => $phone         ,
            'message'         => $message       ,
            'status'          => $status        ,
            'user_id'         => $user_id       ,
        ]);

        return redirect()->back();


    }
}
