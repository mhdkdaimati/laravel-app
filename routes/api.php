<?php

use Illuminate\Support\Facades\Route;

Route::get('post', function(){
    return response()->json([
        'pst'=>'one'
    ]);
});
