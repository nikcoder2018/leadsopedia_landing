<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Subscription as SubscriptionResource;
use Carbon\Carbon;
use App\Subscription;
use App\Setting;
class SubscriptionsController extends Controller
{
    public function index(){
        $subscription_expired = false;

        if(auth()->user()->subscription_id != null || auth()->user()->subscription_id != ''){
            $subscription_expired = Carbon::now()->toDateString() > auth()->user()->subscription_ends ? true : false;
        }
        
        $data['subscription_expired'] = $subscription_expired;

        if($data['subscription_expired']){
            $data['subscription_expired_message'] = 'Your subscription plan has expired. Continue your access by subscribing below.';
        }

        $data['subscription_plans'] = Subscription::with('priviledges')->get();
        $data['settings'] = (object) array(
            'currency_symbol' => Setting::GetValue('currency_symbol')
        );

        #return response()->json($data); exit;
        return view('contents.subscriptions', $data);
    }

    public function APIGetDetails(Request $request){
        // Get Subscriptions
        $subscriptions = Subscription::find($request->id);

        // Get subscriptions as resource 
        return new SubscriptionResource($subscriptions);
    }
}
