<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Test extends Model
{
    //
    protected $fillable = [
    	'nombre',
    	'apellido', 
    	'cantidad',
    	'validate',
    	'date_pay',
    ];

    public $timestamps = "true";

     public function getDatePayAttribute($value)
    {   
        $value   = new Carbon($value, 'America/Guatemala');
        return $value->format('m/d/Y');
    } 
}
