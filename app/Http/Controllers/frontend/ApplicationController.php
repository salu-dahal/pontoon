<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Model\Career;
use App\Model\Contact;
use Illuminate\Http\Request;
use File;

use Illuminate\Support\Facades\Mail;


class ApplicationController extends frontendController
{
    public function index(Request $request)
    {
        $this->data('title', $this->title('home'));
        return view($this->pagePath . 'home.home', $this->data);
    }
    public function AboutUs(Request $request)
    {
        $this->data('AboutUs', $this->title('AboutUs'));
        return view($this->pagePath . 'AboutUs.AboutUs', $this->data);
    }

    public function Career(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('Career', $this->title('careers'));
            return view($this->pagePath . 'Career.Career', $this->data);
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'Name' => 'required',
                'Email' => 'required',
                'Address' => 'required',
                'Phone' => 'required',
                // 'cv' => 'required|mimes:doc,docx,pdf,txt|max:2048'
            ]);


            $data = $request->all();
            $slide = new Career();

            // if ($request->cv) {
            //     $path = public_path() . '/documents';
            //     if (!File::exists($path)) {
            //         File::makeDirectory($path, 0777, true, true);
            //     }
            //     $file_name = "cv-" . time() . "." . $request->cv->getClientOriginalExtension();
            //     $request->cv->move($path, $file_name);
            //     $data['cv'] = $file_name;

                $slide->fill($data);

                $slide->save();

                return redirect()->back();
            
        }
    }

    public function Contact(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('Contact', $this->title('contacts'));
            return view($this->pagePath . 'Contact.Contact', $this->data);
        }
        if ($request->isMethod('post')) {
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['subject'] = $request->subject;
            $data['message'] = $request->message;
            Mail::to('abibhandari7@gmail.com')->send(new ContactMail($data));
            Contact::create($data);
            return redirect()->back();
        }
    }


    public function Services(Request $request)
    {
        $this->data('Services', $this->title('Services'));
        return view($this->pagePath . 'Services.Services', $this->data);
    }
    public function Graphicdesigner(Request $request)
    {
        $this->data('Graphicdesigner', $this->title('Graphicdesigner'));
        return view($this->pagePath . 'Graphicdesigner.Graphicdesigner', $this->data);
    }
    public function Motiondesigner(Request $request)
    {
        $this->data('Motiondesigner', $this->title('Motiondesigner'));
        return view($this->pagePath . 'Motiondesigner.Motiondesigner', $this->data);
    }
    public function Webdevelopment(Request $request)
    {
        $this->data('Webdevelopment', $this->title('Webdevelopment'));
        return view($this->pagePath . 'Webdevelopment.Webdevelopment', $this->data);
    }
}
