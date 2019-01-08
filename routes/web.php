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
App::bind('App\Billing\Stripe',function()
{
    return new \App\Billing\Stripe(config('services.stripe.secret'));
});
$strip=App::make('App\Billing\Stripe');
dd($strip);

Route::get('/','PagesController@getIndex');
   
Route::get('about', 'PagesController@getAbout');

Route::get('contact','PagesController@getContact');


