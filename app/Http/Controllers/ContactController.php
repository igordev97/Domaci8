<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        $title = "Contact";
        return view("contact",compact("title"));
    }

    public function getAllContacts(){
        $title = "All Contacts";
       $allContacts = ContactModel::all();
       return view("allContacts",compact("title","allContacts"));
    }
}
