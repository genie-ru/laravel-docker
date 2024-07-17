<?php

use Illuminate\Support\Facades\Route;
// 名前空間を呼び出し
use App\Models\Job;

Route::get('/', function () {
  return view('home', [
    'greeting' =>'Yo',
    'name' => 'Yayayumi robot'
  ]);
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => Job::all()
  ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
  return view('contact');
});
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

// 管理画面
Route::group(['prefix' => '/admin', 'as' => 'admin.'], function(){
  // 管理画面トップ
  Route::get('/', 'admin\AdminController@index')->name('index');
  // 商品登録画面
  Route::get('/product/add', 'admin\ProductController@add')->name('product.add');
});

