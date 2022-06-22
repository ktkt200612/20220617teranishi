<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        $items = $request->all();
        return view('confirm',['items' => $items,]);
    }
    public function send(ContactRequest $request)
    {
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }
    public function return()
    {
        return redirect('/contact');
    }
    public function find()
    {
        return view('search', ['input' => '']);
        
    }
    public function search(Request $request)
    {
        $items = Contact::where('last_name', 'LIKE',"%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'items' => $items
        ];
        return view('search', $param);
    }
    public function delete(Request $request) 
    {
        Contact::find($request->id)->delete();
        return redirect('/contact/search');
    } 
}
