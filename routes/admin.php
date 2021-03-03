<?php
use Illuminate\Support\Facades\Route;

    Route::group(['middleware'=>'auth','namespace' => 'Admin', 'prefix' => 'admin'], function() {
        // ### AdminController ### 
        Route::get('/','AdminController@index');

        // // ### AnalyticsController ### 
        // Route::resource('analytics','AnalyticsController');

        ###SenseisController ###
        Route::resource('senseis', 'SenseisController');
        
         

  

       
 
});













