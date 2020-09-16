<?php

use Illuminate\Support\Facades\Route;

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

/*** Email routes ***/
Route::group(['prefix' => 'emails'], function () {
	Route::view('/activity-notification-option-a', 'emails.activity-notification-option-a');

	Route::view('/activity-notification-option-b1', 'emails.activity-notification-option-b1');

	Route::view('/activity-notification-option-b2', 'emails.activity-notification-option-b2');

	Route::view('/activity-notification-option-b3', 'emails.activity-notification-option-b3');

	Route::view('/billing', 'emails.billing');

	Route::view('/engagement-newsletter', 'emails.engagement-newsletter');

	Route::view('/generic-notification', 'emails.generic-notification');

	Route::view('/match-notification', 'emails.match-notification');

	Route::view('/new-feature', 'emails.new-feature');

	Route::view('/payment-failed', 'emails.payment-failed');

	Route::view('/process-update-notification', 'emails.process-update-notification');

	Route::view('/promo', 'emails.promo');

	Route::view('/steps-content', 'emails.steps-content');
});
