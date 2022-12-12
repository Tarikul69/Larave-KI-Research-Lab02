<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class mailcontroller extends Controller
{
    //
    
     public function email(Request $req){
        /*  $this->validate($req, [
             'mail'=> 'required | email',
             'subject' => 'required',
             'message' => 'required',
         ]);

         Mail::send('email', [
             'mail' =>$req->get('mail'),
             'subject' => $req->get('subject'),
             'message' => $req->get('subject'),
         ],
         function ($message) {
            $message->from('kishoracademy.bd@gmail.com');
            $message->to('kishoracademy.bd@gmail.com', 'Your Name')
                    ->subject('Your Website Contact Form');
}
);
 echo $a = "Abir";
//return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
}
 */ //return echo $a;
$data =[
    'subject' => "Abcd",
    'message' => "message",
];
try {
    Mail::to('kishoracademy.bd@gmail.com')->send(new ContactMail($data));
    return response()->json(['Great check']);
} catch (Exception $th) {
    //throw $th;
}

}

}