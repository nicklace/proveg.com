<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Redirect;

class LeadController extends Controller
{
    public function contact(Request $request){
        $inputs = $request->all();
        $lead = new Lead();

        $lead->firstname = $request->firstname;
        $lead->lastname = $request->lastname;
        $lead->email = $request->emailu;
        $lead->organisation = $request->organisation;
        $lead->message = $request->message;

        $lead->save();
        return redirect()->back()->with('status', 'Message sent ;)');
        //dd($request);
    }
}
