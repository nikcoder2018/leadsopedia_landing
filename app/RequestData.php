<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestData extends Model
{
    protected $connection = "mysql";
    protected $table = "request_data";
    protected $fillable = ['firstname', 'lastname', 'phone', 'email', 'dataset', 'target', 'status'];

    
}
