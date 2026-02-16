<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $all_contact = Contact::all();
        $opt = [];
        foreach ($all_contact as $item) {
            $opt[$item['name']] = $item['value'];
        }

        return view('contacts', ['contacts' => $opt]);
    }
}
