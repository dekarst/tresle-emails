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
    Route::get('/activity-notification-option-a', function() {
        $mail = new App\Mail\ActivityNotificationOptionA();
        return $mail->render();
    });

    Route::get('/activity-notification-option-b1', function() {
        $mail = new App\Mail\ActivityNotificationOptionB1();
        return $mail->render();
    });

    Route::get('/activity-notification-option-b2', function() {
        $mail = new App\Mail\ActivityNotificationOptionB2();
        return $mail->render();
    });

    Route::get('/activity-notification-option-b3', function() {
        $mail = new App\Mail\ActivityNotificationOptionB3();
        return $mail->render();
    });

    Route::get('/billing', function() {
        $mail = new App\Mail\Billing();
        return $mail->render();
    });

    Route::get('/engagement-newsletter', function() {
        $mail = new App\Mail\EngagementNewsletter();
        return $mail->render();
    });

    Route::get('/generic-notification', function() {
        $mail = new App\Mail\GenericNotification();
        return $mail->render();
    });

    Route::get('/match-notification', function() {
        $mail = new App\Mail\MatchNotification();
        return $mail->render();
    });

    Route::get('/new-feature', function() {
        $mail = new App\Mail\NewFeature();
        return $mail->render();
    });

    Route::get('/payment-failed', function() {
        $mail = new App\Mail\PaymentFailed();
        return $mail->render();
    });

    Route::get('/process-update-notification', function() {
        $mail = new App\Mail\ProcessUpdateNotification();
        return $mail->render();
    });

    Route::get('/promo', function() {
        $mail = new App\Mail\Promo();
        return $mail->render();
    });

    Route::get('/steps-content', function() {
        $mail = new App\Mail\StepsContent();
        return $mail->render();
    });
});
