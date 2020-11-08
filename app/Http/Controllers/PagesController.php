<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('contents.home');
    }

    public function products($name){
        return view('contents.products');
    }
    
    public function pricing(){
        return view('contents.pricing');
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
