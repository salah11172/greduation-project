<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function index()
    {
        
        $comment = Contact::paginate(2);

        //dd('hhhh');
        return view('contact-us/index',['commentCollection' =>$comment]);
    }



    public function show(Contact $comment)
    {
      return view('show',compact('comment'));
    }



    public function create()

    
    {
        //$users= User::all();
        return view('contact-us/create');
       
    }

    public function store(Request $requestObj)
    {
        $requestData=$requestObj->all();

        $requestObj->validate([
                'name' => 'required|min:3',
                'email' => 'required |email',
                'phone' => 'required',
                'comment' => 'required',
                
            ],[
                'name.required' => 'override this message',
                'name.min' => 'this is a new minimum message',
            ]);


       $comment= Contact::create([
            'name' =>$requestObj->name,
            'email' =>$requestObj->email,
            'phone'=>$requestObj->phone,
            'comment'=>$requestObj->comment,
            //'user_id'=> $requestObj->post_creator
        ]);
       // dd($requestData);

return redirect()->route('comment.index');
        

        
       
    }
}
