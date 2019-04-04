<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/user', function (Request $request) {

// })->middleware('checkToken');


Route::group(['middleware'=>['allowOrigin','checkToken']],function() {
    Route::any('/user',function(Request $request) {
        echo "hello world";
    });
});

Route::any('/errors','Api\ErrorsController@errors')->middleware('allowOrigin');