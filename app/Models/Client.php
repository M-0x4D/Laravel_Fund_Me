<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password', 'api_token', 'pin_code', 'city_id', 'governrate_id', 'country_id', 'date_of_birth');


    public function city()
    {
        return $this->belongsTo('App\models\City');
    }

    public function governrate()
    {
        return $this->belongsTo('App\models\Governrate');
    }

    public function country()
    {
        return $this->belongsTo('App\models\Country');
    }

    public function posts()
    {
        return $this->hasMany('App\models\Post');
    }

   

}