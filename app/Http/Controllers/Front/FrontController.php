<?php

namespace App\Http\Controllers\Front;

use App\Models\About;
use App\Models\Slider;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index()
    {
        $sliders=Slider::get();
        $about=About::first();
        return view('front.pages.index',compact('sliders','about'));
    }

    public function about()
    {
        $about=About::first();
        return view('front.pages.about',compact('about'));
    }
    
    public function contact()
    {
        return view('front.pages.contact');
    }

    public function news()
    {
        return view('front.pages.news');
    }

    public function contact_post(Request $request)
    {
       
        $message = new Message;
        $message->name    = $request->name;
        $message->email   = $request->email;
        $message->title   = $request->title;
        $message->msj     = $request->msj;

        $email = "eliyevperviz466@gmail.com";
        $title= 'Aviasiya saytindan mesaj var';

        $data = [
            'email'  => $request->email,
            'title'  => $request->title,
            'name'  => $request->name,
            'msj'  => $request->msj,
        ];
        Mail::send('mail.sendmail', $data, function($m) use ($title,$email) {
            $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
        });
        
            $message->save();
            toastr()->success('Mesajınız uğurla göndərildi');
            return redirect()->back();

          
    }
}
