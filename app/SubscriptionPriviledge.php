<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPriviledge extends Model
{
    protected $connection = "mysql";
    protected $table = "subscription_priviledges";

    function subscription(){
        return $this->belongsTo(Subscription::class, 'id', 'subplan_id');
    }
}
