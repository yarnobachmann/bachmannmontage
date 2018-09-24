<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Homepage;
use App\Service;
use App\Contact;
use App\Project;
use Mail;
use Session;

class PagesController extends Controller
{
  public function home() {
    $homepage = Homepage::firstorFail();
    $contact = Contact::firstorFail();
    return view('pages.welcome', compact('homepage', 'contact'));
  }

  public function diensten() {
    $service = Service::firstorFail();
    $contact = Contact::firstorFail();
    return view('pages.diensten', compact('service', 'contact'));
  }

  public function projecten() {
    $projects = Project::all();
    $contact = Contact::firstorFail();
    return view('pages.projecten', compact('projects', 'contact'));
  }

  public function contact() {
    $contact = Contact::firstorFail();
    return view('pages.contact', compact('contact'));
  }

  public function getcontact(Request $request) {
    $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'telephone' => 'required',
         'textmessage' => 'min:10']);

     $data = array(
         'email' => $request->email,
         'name' => $request->name,
         'telephone' => $request->telephone,
         'textmessage' => $request->textmessage
         );

     Mail::send('emails.contact', $data, function($message) use ($data){
         $message->from($data['email']);
         $message->to('merphoweb@gmail.com');
         $message->subject($data['name']);
     });

     Session::flash('success', 'Je email is gestuurd!');

     return redirect('/contact');
  }

}
