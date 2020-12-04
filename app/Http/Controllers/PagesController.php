<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Setting;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PagesController extends Controller
{
    public function index()
    {
        return view('contents.home');
    }

    public function products($name)
    {
        try {
            return view('contents.products.' . $name);
        } catch (InvalidArgumentException $e) {
            throw new NotFoundHttpException();
        }
    }

    public function pricing()
    {
        $data['subscription_plans'] = Subscription::with('priviledges')->get();
        $data['settings'] = (object) array(
            'currency_symbol' => Setting::GetValue('currency_symbol')
        );
        #return response()->json($data);
        return view('contents.pricing', $data);
    }

    public function searches()
    {
        return view('contents.search');
    }

    public function faq()
    {
        return view('contents.faq');
    }

    public function about()
    {
        return view('contents.about');
    }

    public function terms()
    {
        return view('contents.terms');
    }

    public function privacy()
    {
        return view('contents.privacy');
    }

    public function data()
    {
        return view('contents.data');
    }

    public function platform()
    {
        return view('contents.platform');
    }

    public function contact()
    {
        return view('contents.contact');
    }
}
