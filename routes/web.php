<?php
 const ASSET_URL = '';

 //const ASSET_PATH = 'public/';

 //CONST ASSET_URL = 'public/' ;


use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\SendVerificationEmail;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Actions\Fortify\UpdateUserProfileInformation;


Route::get('/' ,  [HomeController::class ,  'index'])->name('home') ;

Route::group(['as' => 'site.' ], function () {
    Route::get('/join_now' , [HomeController::class ,  'join_us'])->name('join_us') ;
    Route::get('/Twaezef_Model' , [HomeController::class ,  'Twaezef_Model'])->name('Twaezef_Model') ;
    Route::post('/save_tawzef_model' , [HomeController::class ,  'save_tawzef_model'])->name('save_tawzef_model') ;


    Route::get('/Consltant_Model' , [HomeController::class ,  'Consltant_Model'])->name('Consltant_Model') ;
    Route::post('/save_Consultant_model' , [HomeController::class ,  'save_Consultant_model'])->name('save_Consultant_model') ;



});

