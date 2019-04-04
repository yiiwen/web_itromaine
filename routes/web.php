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

Route::get('/cases/7',function(){
    return view('cases7');
});

Route::get('/cases/8',function(){
    return view('cases8');
});

Route::get('/cases/9',function(){
    return view('cases9');
});

Route::get('/cases/10',function(){
    return view('cases10');
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

    Route::get('/cases/1',function(){
        return view('mobile/cases1');
    });

    Route::get('/cases/2',function(){
        return view('mobile/cases2');
    });

    Route::get('/cases/3',function(){
        return view('mobile/cases3');
    });

    Route::get('/cases/4',function(){
        return view('mobile/cases4');
    });

    Route::get('/cases/5',function(){
        return view('mobile/cases5');
    });

    Route::get('/cases/6',function(){
        return view('mobile/cases6');
    });

    Route::get('/cases/7',function(){
        return view('mobile/cases7');
    });

    Route::get('/cases/8',function(){
        return view('mobile/cases8');
    });

    Route::get('/cases/9',function(){
        return view('mobile/cases9');
    });

    Route::get('price',function(){
        return view('mobile/price');
    });

    Route::get('service',function(){
        return view('mobile/service');
    });

    Route::get('share',function(){
        return view('mobile/share');
    });

    Route::get('/share/{id}',function($id){
        if ($id == 1) {
          return view('mobile/share1');
        }
        if ($id == 2) {
          return view('mobile/share2');
        }
        if ($id == 3) {
          return view('mobile/share3');
        }
        if ($id == 4) {
          return view('mobile/share4');
        }
        if ($id == 5) {
          return view('mobile/share5');
        }
        if ($id == 6) {
          return view('mobile/share6');
        }
        if ($id == 7) {
          return view('mobile/share7');
        }
        if ($id == 8) {
          return view('mobile/share8');
        }
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
    Route::middleware("search")->prefix('news')->group(function(){
        Route::get('index','Admin\NewsController@index');
        Route::get('draftsList','Admin\NewsController@draftsList');
        Route::get('trash','Admin\NewsController@trash');
    });
    Route::prefix('news')->group(function(){
        Route::post('publish','Admin\NewsController@publish');
        Route::post('drafts','Admin\NewsController@drafts');
        Route::get('getOne','Admin\NewsController@getOne');
        Route::get('delete','Admin\NewsController@delete');
        Route::get('recovery','Admin\NewsController@recovery');
        Route::get('clear','Admin\NewsController@clear');
        Route::get('dropItem','Admin\NewsController@dropItem');
    });

    //案例模块
    Route::middleware("search")->prefix('cases')->group(function() {
        Route::get('index', 'Admin\CasesController@index');
        Route::get('trash', 'Admin\CasesController@trash');
        Route::get('draftsList', 'Admin\CasesController@draftsList');
    });
    Route::prefix('cases')->group(function(){
        Route::post('publish','Admin\CasesController@publish');
        Route::post('drafts','Admin\CasesController@drafts');
        Route::get('getOne','Admin\CasesController@getOne');
        Route::get('delete','Admin\CasesController@delete');
        Route::get('recovery','Admin\CasesController@recovery');
        Route::get('dropItem', 'Admin\CasesController@dropItem');
        Route::get('clear', 'Admin\CasesController@clear');
    });
});
