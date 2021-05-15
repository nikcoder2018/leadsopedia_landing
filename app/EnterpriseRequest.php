<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterpriseRequest extends Model
{
    protected $fillable = ['name', 'email', 'company'];
}
