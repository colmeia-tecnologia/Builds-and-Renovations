<?php

namespace App\Http\Controllers\Site;

use App\Mail\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Site\ContactRequest;
use App\Repositories\ContactLeadRepository;
use App\Models\ContactLead;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        try
        {
            $data = $request->all();
            
            ContactLead::insertIgnore($data);

            //Grava Log
            Activity::all()->last();

            Mail::to(env('MAIL_FORM_TO'))->send(new Contact($data));

            Session::flash('status_mail', true);
        }
        catch(\Exception $e)
        {
            Session::flash('status_mail', false);
        }

        return redirect()->back();
    }
}
