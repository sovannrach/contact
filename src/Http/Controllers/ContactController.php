<?php

namespace Gdce\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gdce\Contact\Http\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        $contact=new Contact();
        $contact->name=$request['name'];
        $contact->email=$request['email'];
        $contact->comment=$request['comment'];
        $contact->save();
    }
}
