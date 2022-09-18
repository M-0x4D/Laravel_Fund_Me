<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Governrate extends Model 
{

    protected $table = 'governrates';
    public $timestamps = true;
    protected $fillable = array('name' , 'country_id');

    public function cities()
    {
        return $this->hasMany('App\models\City');
    }


    public function clients()
    {
        return $this->hasMany('App\models\Client');
    }



    public function country()
    {
        return $this->belongsTo('App\models\Country');
    }

}