<?php
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\formController;
use App\Http\Controllers\PsformController;
use App\Http\Controllers\ProController;
use App\Http\Middleware\Entrance;
use Illuminate\Http\Request;

Route::get('/', function(){


    return view('emails.send');
  })->middleware(Entrance::class);

  Route::get('Send-mail',[MailController::class,'sendEmail'])->name('emails.send')->middleware(Entrance::class); 
