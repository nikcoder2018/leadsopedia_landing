<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    public function saveMessage(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'message' => 'required'
        ]);

        Message::create($request->only(['name','email','message']));

        return redirect()->back()->with('message', 'Message successfull sent!');
    }
}
