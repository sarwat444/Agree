<?php

use App\Http\Controllers\BuyersController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SuppliersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('Slider/all', [SlidersController::class,'returnAllSliderImage']);
Route::get('Category/all', [MainCategoryController::class,'returnAllCategory']);

Route::post('getCategoryByRoots', [MainCategoryController::class,'returnAllSubCategoryByRoots']);
Route::post('getCategoryByMains', [MainCategoryController::class,'returnAllSubSubCategoryByMains']);

Route::post('getCategoryBySingleRootsID', [MainCategoryController::class,'getCategoryBySingleRootsID']);
Route::post('getCategoryBySingleRootsIDO', [MainCategoryController::class,'getCategoryBySingleRootsIDO']);
Route::post('getCategoryBySingleMainsID', [MainCategoryController::class,'getCategoryBySingleMainsID']);
Route::get('/run-clear-commands', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    Artisan::call('event:cache');
    Artisan::call('event:clear');
    Artisan::call('optimize:clear');
    Artisan::call('optimize');
    return 'Caches Is Ready';
});
Route::get('/run-db-commands', function () {
    Artisan::call('migrate:fresh', ["--force" => true ]);
    Artisan::call('db:seed', ["--force" => true ]);
    return 'Database Is Ready';
});
Route::get('/storageLink', function () {
    Artisan::call('storage:link', ["--force" => true ]);
    return 'storage Linked successfully';
});
Route::get('/generateKey', function () {
    Artisan::call('key:generate', ["--force" => true ]);
    return 'Key Generated Successfully Linked successfully';
});

Route::group(['prefix' => 'SignUp'], function () {
    Route::post('/emailSending', [SignUpController::class,'sendVerificationCode']);
    Route::post('/verifyTheEmail', [SignUpController::class,'verifyTheEmail']);
    Route::post('/Buyer', [SignUpController::class,'signUpAsBuyer']);
    Route::post('/Supplier', [SignUpController::class,'signUpAsSupplier']);
});
Route::group(['prefix' => 'ResetPassword'], function () {
    Route::post('/emailSending', [ResetPasswordController::class,'sendVerificationCode']);
    Route::post('/verifyTheResetCode', [ResetPasswordController::class,'verifyTheResetCode']);
    Route::post('/Reset', [ResetPasswordController::class,'ResetPassword']);

    Route::middleware([
        'auth:sanctum',
    ])->group(function () {
        Route::post('/checkCurrentPassword', [ResetPasswordController::class,'checkCurrentPassword']);
        Route::post('/changePassword', [ResetPasswordController::class,'changePassword']);
    });
});
Route::group(['prefix' => 'signIn'], function () {
    Route::post('/signIn', [SignInController::class,'signIn']);
    Route::apiResource('checkToken', SignInController::class)->middleware('auth:sanctum');
    Route::middleware([
        'auth:sanctum',
    ])->group(function () {
        Route::get('/checkToken', [SignInController::class,'checkToken']);
        Route::get('/logout', [SignInController::class,'Logout']);
    });

});
Route::group(['prefix' => 'buyer'], function () {
    Route::middleware([
        'auth:sanctum',
    ])->group(function () {
        Route::get('/getTheBuyerProfileData', [BuyersController::class,'getTheBuyerProfileData']);
        Route::post('/updateBuyerProfileData', [BuyersController::class,'updateBuyerProfileData']);
    });

});
Route::get('/getAllCountry', [CountryController::class,'getAllTheCountry']);
Route::get('/getAllStates/{country_id}', [CountryController::class,'getAllTheStates']);
Route::get('/getAllCities/{state_id}', [CountryController::class,'getAllTheCities']);
Route::get('/getAllTheSubCategories/{category_id}', [SubCategoryController::class,'returnAllTheSubByIDCategory']);
Route::get('/homePage', [Controller::class,'returnHomePage']);
Route::get('/productsBuCategory/{id}', [Controller::class,'returnCategoryProductsPage']);
Route::group(['prefix' => 'navbar'], function () {
    Route::post('/search', [Controller::class,'SearchResultInNavbarSection']);

});
Route::group(['prefix' => 'search'], function () {
    Route::post('/search', [Controller::class,'SearchResultInSearchPage']);

});
Route::get('/allProduct', [Controller::class,'returnAllProductsPage']);
Route::get('/product/{id}', [Controller::class,'returnProductsPage']);
Route::group(['prefix' => 'user'], function () {
    Route::get('/getProfileDataForGuest/{id}', [Controller::class,'getSupplierProfileDataForGuest']);
    Route::post('/rate', [Controller::class,'RateSupplier']);
});
Route::middleware([
    'auth:sanctum',
])->group(function () {
    Route::group(['prefix' => 'user'], function () {

        Route::get('/getProfileData', [SuppliersController::class,'getSupplierProfileDataForSupplier']);
        Route::post('/supplierAddProduct', [SuppliersController::class,'addProductForSupplier']);

        Route::post('/updateSupplierName', [SuppliersController::class,'updateSupplierName']);
        Route::post('/updateSupplierBusinessType', [SuppliersController::class,'updateSupplierBusinessType']);
        Route::post('/updateSupplierAboutUs', [SuppliersController::class,'updateSupplierAboutUs']);

        Route::post('/updateSupplierProfileImage', [SuppliersController::class,'updateSupplierProfileImage']);
        Route::post('/updateSupplierProfileCoverImage', [SuppliersController::class,'updateSupplierProfileCoverImage']);
        Route::post('/deleteSupplierProfileImage', [SuppliersController::class,'deleteSupplierProfileImage']);
        Route::post('/deleteSupplierProfileCoverImage', [SuppliersController::class,'deleteSupplierProfileCoverImage']);



        Route::post('/deleteSupplierCertificateImage', [SuppliersController::class,'deleteSupplierCertificate']);

        Route::post('/addSupplierCertificate', [SuppliersController::class,'addSupplierCertificate']);

        Route::post('/addSupplierAlbum', [SuppliersController::class,'addSupplierAlbum']);


        Route::post('/deleteAlbumImage', [SuppliersController::class,'deleteAlbumImage']);

        Route::post('/addAlbumImage', [SuppliersController::class,'addAlbumImage']);


        Route::post('/addSupplierMainActivity', [SuppliersController::class,'addSupplierMainActivity']);
        Route::post('/addSupplierSubActivity', [SuppliersController::class,'addSupplierSubActivity']);
        Route::post('/deleteSupplierMainActivity', [SuppliersController::class,'deleteSupplierMainActivity']);
        Route::post('/deleteSupplierSubActivity', [SuppliersController::class,'deleteSupplierSubActivity']);

        Route::post('/deleteSupplierProduct', [SuppliersController::class,'deleteSupplierProduct']);

        Route::get('/getAllSupplierProducts', [SuppliersController::class,'getAllSupplierProducts']);

        Route::post('/UpdateStockStateForProduct', [SuppliersController::class,'UpdateStockStateForProduct']);
        Route::post('/addFaqSectionForSupplier', [SuppliersController::class,'addFaqSectionForSupplier']);
        Route::post('/EditFaqSectionForSupplier', [SuppliersController::class,'EditFaqSectionForSupplier']);
        Route::post('/deleteFaqSectionForSupplier', [SuppliersController::class,'deleteFaqSectionForSupplier']);


        Route::post('/addFaqSectionQuestionForSupplier', [SuppliersController::class,'addFaqSectionQuestionForSupplier']);
        Route::post('/EditFaqSectionQuestionForSupplier', [SuppliersController::class,'EditFaqSectionQuestionForSupplier']);
        Route::post('/EditFaqSectionAnswerForSupplier', [SuppliersController::class,'EditFaqSectionAnswerForSupplier']);
        Route::post('/deleteFaqSectionQuestionForSupplier', [SuppliersController::class,'deleteFaqSectionQuestionForSupplier']);



        Route::post('/updateSupplierPhoneNumber', [SuppliersController::class,'updateSupplierPhoneNumber']);
        Route::post('/updateSupplierSecondPhoneNumber', [SuppliersController::class,'updateSupplierSecondPhoneNumber']);
        Route::post('/updateSupplierEmail', [SuppliersController::class,'updateSupplierEmail']);
        Route::post('/updateSupplierLocation', [SuppliersController::class,'updateSupplierLocation']);
        Route::post('/updateSupplierWebsite', [SuppliersController::class,'updateSupplierWebsite']);
        Route::post('/updateSupplierFirstQRImage', [SuppliersController::class,'updateSupplierFirstQRImage']);
        Route::post('/updateSupplierSecondQRImage', [SuppliersController::class,'updateSupplierSecondQRImage']);
        Route::post('/removeSupplierFirstQRImage', [SuppliersController::class,'removeSupplierFirstQRImage']);
        Route::post('/removeSupplierSecondQRImage', [SuppliersController::class,'removeSupplierSecondQRImage']);
        Route::post('/updateContactUsPersonImage', [SuppliersController::class,'updateContactUsPersonImage']);
        Route::post('/updateContactPersonFullName', [SuppliersController::class,'updateContactPersonFullName']);
        Route::post('/updateContactPersonPhoneNumber', [SuppliersController::class,'updateContactPersonPhoneNumber']);
        Route::post('/updateContactPersonEmail', [SuppliersController::class,'updateContactPersonEmail']);
        Route::post('/updateContactPersonWAPhoneNumber', [SuppliersController::class,'updateContactPersonWAPhoneNumber']);
        Route::post('/editProductForSupplier', [SuppliersController::class,'editProductForSupplier']);
        Route::post('/removeSupplierPhotoGallery', [SuppliersController::class,'removeSupplierPhotoGallery']);

    });
});
