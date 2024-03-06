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
       return view("alllcontacts",compact("title","allContacts"));
    }

    public function sendData(Request $request){

     $validate =  $request->validate([ // Validacija
          "email"=>"required|string",
          "subject"=>"required|string",
          "message"=>"required|string|min:5"
      ]);
//Uzimanje podataka iz requesta se vrsi pomocu get metore $request->get("ime_vrednosti_koja_je_prosledjenja_preko_posta)
      $email = $request->get("email");
      $subject = $request->get("subject");
      $message = $request->get("message");
      ContactModel::create([
          "email"=>$email,
          "subject"=>$subject,
          "message"=>$message
      ]);

      return redirect("/admin/all-contacts");

}
public function deleteContact($contact)
{
    $singleContact = ContactModel::where(["id"=>$contact])->first();
    $singleContact->delete();

    return redirect("/admin/all-contacts");
}



}
