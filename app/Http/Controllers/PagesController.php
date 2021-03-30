<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Setting;
use App\Country;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        return view('contents.home');
    }

    public function services($name)
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
        return view('contents.terms-new');
    }

    public function privacy()
    {
        return view('contents.privacy-new');
    }

    public function ccpapolicy()
    {
        return view('contents.privacy-ccpa');
    }

    public function dontsell()
    {
        return view('contents.dont-sell');
    }

    public function requestdata()
    {
        return view('contents.request-data');
    }

    public function data(Request $request)
    {
        $data['plans'] = Subscription::with('priviledges')->get();
        $data['settings'] = (object) array(
            'currency_symbol' => Setting::GetValue('currency_symbol')
        );
        $data['countries'] = [
            ['name' => 'USA', 'code' => 'us'],
            ['name' => 'UK', 'code' => 'uk'],
            ['name' => 'AUSTRALIA', 'code' => 'au'],
            ['name' => 'NEW ZEALAND', 'code' => 'nz'],
            ['name' => 'CANADA', 'code' => 'ca'],
            ['name' => 'SINGAPORE', 'code' => 'sg'],
            ['name' => 'JAPAN', 'code' => 'jp'],
            ['name' => 'INDIA', 'code' => 'in'],
            ['name' => 'CHINA', 'code' => 'cn'],
            ['name' => 'HONG KONG', 'code' => 'hk'],
            ['name' => 'SOUTH AFRICA', 'code' => 'za'],
            ['name' => 'UAE', 'code' => 'ae'],
            ['name' => 'NETHERLANDS', 'code' => 'nl'],
            ['name' => 'DENMARK', 'code' => 'dk'],
            ['name' => 'SWITZERLAND', 'code' => 'ch'],
            ['name' => 'GERMANY', 'code' => 'de'],
            ['name' => 'POLAND', 'code' => 'pl'],
            ['name' => 'AUSTRIA', 'code' => 'at'],
            ['name' => 'ITALY', 'code' => 'it'],
            ['name' => 'SPAIN', 'code' => 'es'],
            ['name' => 'RUSSIA', 'code' => 'ru'],
            ['name' => 'FRANCE', 'code' => 'fr'],
            ['name' => 'BELARUS', 'code' => 'by'],
            ['name' => 'UKRAINE', 'code' => 'ua'],
            ['name' => 'KAZAKHSTAN', 'code' => 'kz'],
            ['name' => 'UZBEKISTAN', 'code' => 'uz'],
            ['name' => 'KYRGYZSTAN', 'code' => 'kg'],
            ['name' => 'TURKEY', 'code' => 'tr'],
            ['name' => 'THAILAND', 'code' => 'th'],
            ['name' => 'VIETNAM', 'code' => 'vn'],
            ['name' => 'ARGENTINA', 'code' => 'ar']
        ];
        return view('contents.data', $data);
    }

    public function platform()
    {
        return view('contents.platform');
    }

    public function contact()
    {
        return view('contents.contact');
    }

    public function marketing()
    {
        return view('contents.marketing');
    }

    public function customers()
    {
        return view('contents.customers');
    }

    public function b2b()
    {
        return view('contents.b2b');
    }

    public function email()
    {
        return view('contents.email');
    }

    public function bulk()
    {
        return view('contents.bulk');
    }

    public function api()
    {
        return view('contents.api');
    }

    public function cookies()
    {
        return view('contents.cookies');
    }

    public function refund()
    {
        return view('contents.refund-and-cancellation');
    }

    public function disclaimer()
    {
        return view('contents.disclaimer');
    }


}
