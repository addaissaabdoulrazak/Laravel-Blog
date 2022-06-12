<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function showView()
    {
        $val = ['message' => ''];
        return View('contact', $val);
    }
    public function addContact(Request $request)
    {
        // la methodes validate est comme un pluggin offert par le framework
        /**** Rules ****/
        $this->validate($request, [
            'name' => 'required|alpha|max:255',
            'email' => 'required|string|email|max:191|unique:contacts',
            'message' => 'required|alpha|max:255',
            'subject' => 'required|alpha|max:255',

        ]);
        $val = ['message', 'Votre message a été envoyé correctement'];

   

        // insert
        DB::table('contacts')->insert(
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input("phone"),
                'message' => $request->message,
                'subject' => $request->input('subject'),
                'create_at' => now()
            ]
        );
        return view("contact", $val);
        // Session::put('message', "Votre message a été envoyé correctement");

    }

}
