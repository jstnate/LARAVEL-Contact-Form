<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailShipping;

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
//        ->send(new MailShipping());
////    return view('welcome');
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [MailController::class, 'showForm']);

Route::post('/contact', [MailController::class, 'sendMail']);

//Route::post('/contact', function (Request $request) {
//    $name = $request->input('name');
//    $email = $request->input('email');
//    $content = $request->input('message');
//
//    $user = ['name' => $name, 'email' => $email, "content" => $content];
//
//    Mail::send('mail.template', ['name' => $name, 'email' => $email, "content" => $content], function ($message) use ($name, $email) {
//        $message->from($email, $name);
//        $message->to('lefetey.nathan@gmail.com', 'Nathan LEFETEY');
//        $message->subject('Demande de contact');
//    });
//});
