<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\sendContactMail;
use App\Mail\SendRequestMail;
use App\Mail\SendAgreementMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function submitContactForm(Request $request) 
    {
        $email = 'info@smartcash.se';
   
        $maildata = [
            'title' => 'Meddelande från kontaktformulär',
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];


        Mail::to($email)->send(new sendContactMail($maildata));
   
        return response()->json([
            'message' => 'Email has been sent.'
        ]);
    }

    public function submitRequestForm(Request $request) 
    {
        $emailToSmartCash = 'info@smartcash.se';
        $emailToCustomer = $request->email;
   
        $maildata = [
            'title' => 'Förfrågan!',
            'name' => $request->name,
            'email' => $emailToCustomer,
            'phone' => $request->phone,
            'cart' => $request->cartItems,
        ];


        Mail::to($emailToSmartCash)->send(new SendRequestMail($maildata));
   
        return response()->json([
            'message' => 'Email has been sent.'
        ]);
    }

    public function submitAgreementForm(Request $request)
    {
        $email = 'info@smartcash.se';
   
        $maildata = [
            'title' => 'Inlösenavtal!',
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'organization' => $request->organization,
            'branch' => $request->branch,
            'adress' => $request->adress,
            'social-security-number' => $request->socialSecurityNumber,
            'account-number' => $request->accountNumber,
        ];


        Mail::to($email)->send(new SendAgreementMail($maildata));
   
        return response()->json([
            'message' => 'Email has been sent.'
        ]);
    }

}

