<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home', [
    'greeting' =>'Yo',
    'name' => 'Yayayumi robot'
  ]);
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => [
      [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50.000',
      ],
      [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => '$10.000'
      ],
      [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '$40.000'
      ]
    ]
  ]);
});

Route::get('/jobs/{id}', function ($id) {
  $jobs = [
    [
      'id' => 1,
      'title' => 'Director',
      'salary' => '$50.000',
    ],
    [
      'id' => 2,
      'title' => 'Programmer',
      'salary' => '$10.000'
    ],
    [
      'id' => 3,
      'title' => 'Teacher',
      'salary' => '$40.000'
    ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

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

