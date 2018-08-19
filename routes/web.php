<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});


Route::get('service',function(){
    return view('service');
});

Route::get('/cases',function(){
    return view('cases');
});

Route::get('/news',function(){
    return view('news');
});

Route::get('/newsitem/{id}',function(){
    return view('newsItem');
});

Route::get('/link',function(){
    return view('link');
});


//手机版
Route::prefix('m')->group(function(){
    
    Route::get('index',function(){
        return view('mobile/index');
    });

    Route::get('teams',function(){
        return view('mobile/team');
    });

    Route::get('cases',function(){
        return view('mobile/cases');
    });

    Route::get('price',function(){
        return view('mobile/price');
    });

    Route::get('share',function(){
        return view('mobile/share');
    });

    Route::get('contact',function(){
        return view('mobile/contact');
    });
});


Route::prefix('admin')->middleware(['checkLogin'])->group(function(){
    Route::get('login',function(){
        return view('admin/login');
    });

    Route::get('index',function(){  
        return view('admin/index');
    });

    Route::get('news',function(){  
        return view('admin/news');
    });

    Route::post('upload',function(){
        
    });
});