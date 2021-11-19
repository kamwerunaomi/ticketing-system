<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminControlls extends Controller
{
    public function admin(){
        return view('pages.admin');
    }
    function addEvent(Request $request){
        //  return $request -> input();
        $request -> validate([
            'title'=>'required',
            'venue'=>'required',
            'start_time'=>'required',
            'description'=>'required',
            'price_VIP'=>'required',
            'price_regular'=>'required',
            'attendees'=> 'required'

        ]);
        $query = DB::table('events')-> insert([
            'title' => $request -> input('title'),
            'venue' => $request -> input('venue'),
            'start_time' => $request -> input('start_time'),
            'description' => $request -> input('description'),
            'price_VIP' => $request -> input('price_VIP'),
            'price_regular' => $request -> input('price_regular'),
            'attendees' => $request -> input('attendees'),


        ]);
        
        if($query){
            return back() -> with('success', 'Event has been successfully added');
        }
        else{
            return back() -> with('fail', 'Something went wrong');

        }
     }
    public function displayEvents(){
        $events = DB::select('select * from events');
        return view('pages.admin',['events'=>$events]);
        }
    
    function edit($id){
        $row= DB::table('events')
            -> where('id', $id)
            ->first();
        $data = [
            'Info' => $row
        ];

        return view('pages.edit', $data);
    }

    function update(Request $request){
        $request -> validate([
            'title'=>'required',
            'venue'=>'required',
            'start_time'=>'required',
            'description'=>'required',
            'price_VIP'=>'required',
            'price_regular'=>'required',
            'attendees'=> 'required'

        ]);

        $updating = DB::table('events')
            -> where('id',$request -> input('sid'))
            -> update([
                'title' => $request -> input('title'),
                'venue' => $request -> input('venue'),
                'start_time' => $request -> input('start_time'),
                'description' => $request -> input('description'),
                'price_VIP' => $request -> input('price_VIP'),
                'price_regular' => $request -> input('price_regular'),
                'attendees' => $request -> input('attendees'),

            ]);
            return redirect('pages.admin'); 
    }
    function delete($id){
        $delete = DB::table('events')
            -> where('id', $id)
            -> delete();
        return redirect('admin');
    }
    
}
