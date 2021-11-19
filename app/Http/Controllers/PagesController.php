<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function book(){
        $events = DB::select('select * from events');
        return view('pages.book',['events'=>$events]);
    }

    function bookEvent($id){
        $row= DB::table('events')
            -> where('id', $id)
            ->first();
        $data = [
            'Info' => $row
        ];

        return view('pages.bookEvent', $data);
    }

    function updateTicket(Request $request){
        $request -> validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'title'=>'required',
            'ticket_type'=>'required',

        ]);

        $query = DB::table('userevents')-> insert([
            'firstname' => $request -> input('firstname'),
            'lastname' => $request -> input('lastname'),
            'email' => $request -> input('email'),
            'title' => $request -> input('title'),
            'ticket_type' => $request -> input('ticket_type'), 
        ]);

        if($query){
            return redirect() -> with('success', 'Event has been successfully added');
        }
        else{
            return back() -> with('fail', 'Something went wrong');

        }

        
    }
    
    function sendEmail(Request $request){
        $email_data = [
            'recipient' => $request->email,
            'fromEmail' => 'assetmvt@gmail.com',
            'fromName' => 'TICKETING SYSTEM',
            'subject' => 'TICKET BOOKING CONFIRMATION',
            'body' => $request->title,

        ];
        

        \Mail::send('pages.email-template', $email_data, function($message) use ($email_data){
            $message->to($email_data['recipient'])
                    ->from($email_data['fromEmail'], $email_data['fromName'])
                    ->subject($email_data['subject']);
        });
        return redirect()->back()->with('success','A confirmation email has been sent to you!');

        function emailTemplate($id){
            $row= DB::table('events')
                -> where('id', $id)
                ->first();
            $data = [
                'Info' => $row
            ];
    
            return view('pages.bookEvent', $data);
        }
    }
}





