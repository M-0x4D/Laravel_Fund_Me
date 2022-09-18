<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model 
{

    protected $table = 'charities';
    public $timestamps = true;
    protected $fillable = array('category_id', 'country_id', 'governrate_id', 'city_id');


    public function account_numbers()
    {
        return $this->hasMany('App\models\AccountNumber');
    }

}