<?php
use Illuminate\Http\Request;
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

Route::get('/', 'Web\IndexController@index');
Route::get('/index', 'Web\IndexController@index');

Route::get('/about',function(){
    return view('about');
});


Route::get('service',function(){
    return view('service');
});

Route::get('/cases',function(){
    return view('cases');
});

Route::get('/news','Web\NewsController@index');
Route::get('/newsitem/{id}','Web\NewsController@newsItem');

Route::get('/link',function(Request $request){
    $message = $request->has('message') ? urldecode($request->message) : "";
    return view('link',['message'=>$message]);
});

Route::get('/cases/1',function(){
    return view('cases1');
});

Route::get('/cases/2',function(){
    return view('cases2');
});

Route::get('/cases/3',function(){
    return view('cases3');
});

Route::get('/cases/4',function(){
    return view('cases4');
});

Route::get('/cases/5',function(){
    return view('cases5');
});

Route::get('/cases/6',function(){
    return view('cases6');
});

Route::get('/sitemap',function(){
    return view('sitemap');
});

Route::prefix('site')->group(function(){
    //企业网站
    Route::get('company',function(){
        return view('webcompany');
    });
    //品牌网站
    Route::get('brand',function(){
        return view('webbrand');
    });
    //营销网站
    Route::get('sale',function(){
        return view('websale');
    });

    Route::get('ecommerce',function(){
        return view('ecommerc');
    });

    Route::get('responsive',function(){
        return view('webresponsive');
    });
});

Route::post('/demand/save','Web\DemandController@addOne');




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


//后台

//后台登陆
Route::get('admin/login','Admin\LoginController@login');
Route::post('admin/loginHandle','Admin\LoginController@loginHandle');

Route::prefix('admin')->middleware(['checkLogin'])->group(function(){

    Route::get('index','Admin\IndexController@index');  //网站首页配置
    Route::post('config','Admin\IndexController@config');//配置网站选项

    //文件上传
    Route::post('upload',function(Illuminate\Http\Request $request){
        $class = new App\Library\Upload;
        return $class->upload($request,'photo');
    });

    //系统设置
    Route::post('index/banner','Admin\IndexController@setBannser');

    //新闻模块
    Route::middleware("search")->group(function(){
        Route::get('news/index','Admin\NewsController@index');
        Route::get('news/draftsList','Admin\NewsController@draftsList');
        Route::get('news/trash','Admin\NewsController@trash');
    });
    Route::post('news/publish','Admin\NewsController@publish');
    Route::post('news/drafts','Admin\NewsController@drafts');
    Route::get('news/getOne','Admin\NewsController@getOne');
    Route::get('news/delete','Admin\NewsController@delete');
    Route::get('news/recovery','Admin\NewsController@recovery');
    Route::get('news/clear','Admin\NewsController@clear');
    Route::get('news/dropItem','Admin\NewsController@dropItem');

    //案例模块
    Route::middleware("search")->group(function() {
        Route::get('cases/index', 'Admin\CasesController@index');
    });
    Route::post('cases/publish','Admin\CasesController@publish');

});
