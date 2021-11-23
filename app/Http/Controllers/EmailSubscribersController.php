<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmailSubscriber;
class EmailSubscribersController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        $subscribe = EmailSubscriber::create($validated);

        if($subscribe)
            return response()->json(['success' => true, 'msg' => 'Email Subscribed Successfully']);
    }

    public function unsubscribe($email){
        $subscriber = EmailSubscriber::where('email', $email)->first();
        return view('contents.unsubscribe');
        if($subscriber){
            //$subscriber->delete();
            return view('contents.unsubscribe');
        }
            
    }
}
