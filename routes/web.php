<?php

use App\Models\Listing;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;

Route::get('/hello', function (){
    return response('hello', 404);
});
//wild card
Route::get('/posts/{id}',function($id){
// debugging
    //dd($id);
    //ddd($id);
    return response('pst'.$id) ;

})->where('id','[0-9]+');

Route::get('/search',function(Request $request){

        //dd($request);
        return $request->name;
        // return 'rr';
    
});

Route::get('post', function(){
    return response()->json([
        'pst'=>'one'
    ]);
});
    
Route::get('/', function () {
    return view('listings',[
        'wer'=>'wer',
        'd'=>'d',
        'list'=>[
            ['id'=>'1','name'=>'name1'],
            ['id'=>'2']
        ],

    ]);
});
//sigle listing
Route::get('/listings/{id}',function($id){
    return view('listing');

});
