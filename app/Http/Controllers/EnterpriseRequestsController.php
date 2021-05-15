<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnterpriseRequest;
class EnterpriseRequestsController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string'
        ]);

        $er = EnterpriseRequest::create($validated);

        if($er)
            return response()->json(['success' => true, 'msg' => 'Request Submitted Successfully']);
    }
}
