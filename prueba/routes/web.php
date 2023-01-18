<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::pattern('id', '\d+');
Route::pattern('hex', '[a-f0-9]+');


Route::get('user/profile/get/whatever', [
    'as' => 'profile',
    function ($id) {
        $url = route('profile',['id'=>$id])
    }
]);
Route::get('post/{id}', [
    'middleware' => 'auth',
    'uses' => 'PostController@show'
]);

Route::post('store', [
    'uses' => 'PostController@store'
]);


Route::post('post/update/{id}', [
    'middleware' => 'auth',
    'before' => 'csrf',
    'uses' => [PostController::class,'update']
    ]);

Route::get('/', [PostController::class, 'index']);
Route::get('post/{id}', [
    PostController::class,'show'
]);

Route::post('post/store', [
    'middleware' => 'auth',
    'before' => 'csrf',
    'uses' => [PostController::class, 'store']
]);
Route::get('post/delete/{id}', [
    'middleware' => 'auth',
    'uses' => [PostController::class, 'destoy'],
]);

Route::get('post/create',
    [
        'middleware' => 'auth',
        'uses' => [PostController::class, 'create']
    ]
);


Route::group(['prefix' => 'user'],function(){
    Route::get('profile',function(){
        return "profile";
    })
    Route::get('delete/now/{id}',function(){
        
    })
})
