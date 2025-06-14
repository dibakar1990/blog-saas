<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatRequest;
use App\Http\Requests\SubscribeRequest;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\User;
use App\Notifications\EmailSubscribe;
use App\Notifications\SendMessage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    
    public function index(): Response
    {
        return Inertia::render('Contact');
    }

    public function store(ContatRequest $request)
    {
       
        $contact = Contact::where('email',$request->input('email'))->first();
        if($contact){
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->subject = $request->input('subject');
            $contact->message = $request->input('message');
            $contact->save();
        }else{
            $contact = new Contact();
            $contact->name = $request->input('name');
            $contact->email = $request->input('email');
            $contact->subject = $request->input('subject');
            $contact->message = $request->input('message');
            $contact->save();
            
            $admin = User::whereIn('role', ['super-admin'])->first();
            $admin->notify(new SendMessage($contact));
        }
         return redirect()->back()->with('success', 'Message send successfully!');
    }

     public function subscribe(SubscribeRequest $request)
    {
        $data = Newsletter::where('email',$request->input('sub_email'))->first();
        if($data){
            $data->email = $request->input('sub_email');
            $data->save();
        }else{
            $data = new Newsletter();
            $data->email = $request->input('sub_email');
            $data->save();

            $admin = User::whereIn('role', ['super-admin'])->first();
            $admin->notify(new EmailSubscribe($data));
        }
        return redirect()->back()->with('success', 'Subcribe successfull!');

    }

}
