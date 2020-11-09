<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $connection = "mysql";
    protected $table = "subscription_plans";

    function priviledges(){
        return $this->hasMany(SubscriptionPriviledge::class, 'subplan_id', 'id');
    }
}
