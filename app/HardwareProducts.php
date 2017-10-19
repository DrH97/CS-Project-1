<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HardwareProducts extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'productname', 'description', 'categoryid', 'image', 'quantity', 'sellerid',
    ];
}