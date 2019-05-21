<?php

// Route::get('contact',function(){
//     return view('contact::contact');   //package :: view
// });

    Route::group(['namespace'=>'Bitfumes\Contact\Http\Controllers'],function(){
        Route::get('contact','COntactController@index')->name('contact');

    });

   
?>