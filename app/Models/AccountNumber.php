<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountNumber extends Model
{
    use HasFactory;

    protected $table = 'account_numbers';
    public $timestamps = true;
    protected $fillable = array('organization_id', 'account_number');


    public function charity()
    {
        return $this->belongsTo('App\models\Charity');
    }


    public function hospital()
    {
        return $this->belongsTo('App\models\Hospital');
    }
}
