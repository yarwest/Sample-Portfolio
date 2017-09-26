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
Auth::routes();

Route::group(['middleware'  =>  ['auth']], function () {
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
        Route::resource('/', 'DashboardController');
        Route::resource('portfolio', 'PortfolioController');
        Route::resource('analytics', 'AnalyticsController');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function(){
    $portfolioItems = \App\PortfolioItem::get();
    return view('products')->with(compact('portfolioItems'));
});

Route::get('/contact', function(){
    return view('contact');
});
