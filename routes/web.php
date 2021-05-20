<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

// address et URL qui vous allez accéder
/* Route::get('/hello',function(){
    return "Hello World";
}); */

/* 
    Route::get('/hello',function(){
        return view("pages.hello"); 


            return view("pages/hello",[
                "var1"=>"variable 1",
                "var2"=>"variable 2",
            ]); 

    });
 */

/* 
    Route::get('/hello',function(){
        return view("pages.hello")->with("var3","using input helper function"); 
    }); 
*/


/* 
    Route::get('/hello',function(){
        $var4 = "using compact function";
        return view("pages/hello",compact("var4"));
    }); 
*/

// contient logique d'application
Route::get('/hello',[TestController::class,"index"]);

