<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Setting;
class PagesController extends Controller
{
    public function index(){
        return view('contents.home');
    }

    public function products($name){
        return view('contents.products');
    }
    
    public function pricing(){
        $data['subscription_plans'] = Subscription::with('priviledges')->get();
        $data['settings'] = (object) array(
            'currency_symbol' => Setting::GetValue('currency_symbol')
        );
        #return response()->json($data);
        return view('contents.pricing', $data);
    }

    public function searches(){
        return view('contents.search');
    }

    public function faq(){
        return view('contents.faq');
    }

    public function about(){
        return view('contents.about');
    }
}
