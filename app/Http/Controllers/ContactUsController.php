<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view('admin.contactus.index', compact('contacts'));
    }

}
