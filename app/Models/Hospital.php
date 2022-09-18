<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model 
{

    protected $table = 'hospitals';
    public $timestamps = true;
    protected $fillable = array('category_id', 'country_id', 'governrate_id', 'city_id');


    public function account_numbers()
    {
        return $this->hasMany('App\models\AccountNumber');
    }

}