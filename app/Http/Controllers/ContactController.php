<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
    	return view('pages.contact.contact');
    }

    public function insert(Request $request){
       
        $this->validate($request,
        [
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
            'title' => 'required',
            'message' => 'required'
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'type.required' => 'Company type is required',
            'title.required' => 'Job title is required',
            'message.required' => 'Message is required'
        ]);

    	$contact = Contact::get();
    	
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->company_type = $request->type;
        $contact->job_title = $request->title;
        $contact->message = $request->message;


        $contact->save();
        return redirect('/contact')->with('message', 'Thank You! Message has been sent successfully.');
    }
}
