<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    protected $connection = "mysql";
    protected $table = 'seo_pages';

    function scopeGetValue($query, $path, $field){
        $seo = $query->where('path', $path)->first();
        if($seo){
            switch($field){
                case 'title':
                    return $seo->title;
                break;
                case 'description':
                    return $seo->description;
                break;
                case 'keywords':
                    return $seo->keywords;
                break;
    
                default: 
                    return '';
            }
        }

        return '';
    }
}
