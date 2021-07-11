<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;
use DB;

class feedbackController extends Controller
{
    
    public function feedbackadmin()
    {
        $feedback = feedback::all();
        return view('admin.feedback')->with('feedback',$feedback);
    }
    public function store(Request $request)
    {

        $feedback = new feedback;

        $feedback->email = $request->input('email');
        $feedback->feedback = $request->input('feedback');
        $feedback->message = $request->input('message');

        $feedback->save();
      
        return redirect('/')->with('mystatus', 'Thank you for your Feedback');

    }

public function delete($id)
    {
        DB::delete('delete from feedback where id = ?',[$id]);

        return redirect()->back()->with('status','data deleted for feedback');
    }
    public function display(){
        return view('inc.addtocard');
    }
}