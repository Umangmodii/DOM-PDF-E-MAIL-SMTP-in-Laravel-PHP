<?php

use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   Mail::to('Umangmodi003@gmail.com')
         ->send(new HelloMail());
});

Route::get('/', function () {
    // Create a new instance of the HelloMail class
    $helloMail = new HelloMail();

    // Set the recipient of the email
    Mail::to('umangmodi003@gmail.com')

        // Send the email
        ->send($helloMail);
});

Route::get('/generate-pdf', [UserController::class, 'generatePdf'])->name('generate.pdf');


