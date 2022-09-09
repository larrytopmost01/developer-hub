<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoint;
use App\Models\Time;
use App\Models\User;
use App\Models\Matchdeveloper;

use Illuminate\Support\Facades\Auth;
use Image;



class UserController extends Controller
{
    public function index(){

        return view('user.freestudent_tutorial');
    }

    public function students(){

        $book =  Appoint::latest()->paginate(5);

        return view('user.student' , compact('book'));
    }

    public function class(){
        $tst = Time::all();

        return view('user.class' , compact('tst'));
    }


    public function bookclass(Request $request){

        Appoint::insert([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'course' => $request->course,
            'developer' => $request->developer,
            'date' => $request->date,
            'date' => $request->time,
            'user_id' => Auth::user()->id,
        ]);

         

        return redirect()->back()->with('success', 'Congratulation you hav successfully book a class');

    }

    public function bookaclass(){

        $tst = Time::all();


        return view('user.class' , compact('tst'));
        
    }

    public function classtimetable(Request $request){

        Time::insert([

            'time' => $request->time,
        
        ]);


    }

    public function deve_forum(){

        $match =  Matchdeveloper::all();

        return view('user.matchdeveloper' , compact('match'));
    }

    public function book_dev(Request $request){

        // $image = $request->file('user_image');
        // $img_ext = 
    	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	// Image::make($image)->resize(300,300)->save('upload/'.$name_gen);
    	// $save_url = 'upload/'.$name_gen;
        $u_image = $request->file('user_image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($u_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/user/';
        $last_img = $up_location.$img_name;
        $u_image->move($up_location,$img_name);

        Matchdeveloper::insert([

            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'message' => $request->message,
            'languages' => $request->language,
            'field' => $request->field,
            'image' => $last_img,
             'status' => 'Available',
             'invite' => 'Invite',
             'saved' => 'Saved',

        ]);
        return redirect()->back()->with('success', 'Congratulation you hav successfully register has a developer');
}

public function match_programmer(){
    
    $matching =  Matchdeveloper::all();

    return view('user.matchdevecon', compact('matching'));

}

public function candidate_home(){
    $deve =  Matchdeveloper::all();

     return view('user.candidate', compact('deve'));
}
}