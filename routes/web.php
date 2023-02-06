<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContact;

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

//Route::get('/', function () {
//    Mail::to('lefetey.nathan@gmail.com')
//        ->send(new MailContact());
////    return view('welcome');
//});

Route::get('/', function () {
    return view('contact');
});

Route::get('/contact', [MailController::class, 'showForm'])->name("contact");

Route::post('/contact', [MailController::class, 'sendMail']);
