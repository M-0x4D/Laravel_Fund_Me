<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('title', 'content', 'category_id', 'client_id');

    public function client()
    {
        $this->belongsTo('App\models\Client');
    }

}