<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RequestData;

class RequestDataController extends Controller
{
    public function submit(Request $request){
        $rd = RequestData::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'dataset' => $request->dataset,
            'target' => $request->target,
            'status' => 'pending'
        ]);

        if($rd){
            return response()->json(['success' => true, 'msg' => "Your request was submitted, you will receive an email once the request is approved."]);
        }
    }
}
