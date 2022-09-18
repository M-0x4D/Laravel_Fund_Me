<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundController extends Controller
{
    public function fund(Request $request)
    {
        $validator = validator()->make($request->all() , [

            'sender_id' => 'required' ,
             'receiver_id' => 'required', 
             'amount' => 'required' ,
             'currency_id' => 'required'
         ]);
         if ($validator->fails()) {
             # code...
              return json_return(0 , 'failed' , 'fund validation error ');
         }
    //! curl
    $Fields = array(
        'sender_id' => $request->sender_id,
        'receiver_id' => $request->receiver_id ,
        'amount' => $request->amount , 
        'currency_id' => $request->currency_id ,
    );
    $ch =  curl_init();
    curl_setopt($ch , CURLOPT_URL  ,'127.0.0.1:8000/api/v1/transfare-gateway'); 
    curl_setopt($ch , CURLOPT_POST , true); 
    curl_setopt($ch , CURLOPT_RETURNTRANSFER , true); 
    curl_setopt($ch , CURLOPT_POSTFIELDS , $Fields);    // changes the cURL session behavior with options
    $result = curl_exec($ch);      // executes the started cURL session
    curl_close($ch);   // closes the cURL session and deletes the variable made by curl_init();
    return json_decode($result);

    }
}
