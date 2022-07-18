<?php

declare(strict_types=1);

use Illuminate\Http\Request;

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

//public
Route::group(['prefix' => 'Api', 'middleware' => ['api', 'json.response']], function () {
    Route::get('cashes/', 'Api\V1\ApiController@getCashes')->name('cashes');
    Route::get('gearboxstatuses/', 'Api\V1\ApiController@getGearboxStatuses')->name('gearboxstatuses');
    Route::get('carstatuses/', 'Api\V1\ApiController@getCarStatuses')->name('carstatuses');
    Route::get('differentials/', 'Api\V1\ApiController@getDifferentials')->name('differentials');
    Route::get('chassitypes/', 'Api\V1\ApiController@getChassiTypes')->name('chassitype');
    Route::get('cities/', 'Api\V1\ApiController@getCities')->name('cities');
    Route::get('city/{id}', 'Api\V1\ApiController@getTownsById')->where('id', '[0-9]+')->name('cityid');
    Route::get('brands/', 'Api\V1\BrandController@getBrands')->name('brands');
    Route::get('brand/{id}', 'Api\V1\BrandController@getModelById')->where('id', '[0-9]+')->name('brandid');
    Route::get('colors/', 'Api\V1\ApiController@getColors')->name('colors');
    Route::get('interiorcolors/', 'Api\V1\ApiController@getInteriorColors')->name('interiorcolors');
    Route::get('productions/', 'Api\V1\ApiController@getProductions')->name('productions');
    Route::get('bodiesstatus/', 'Api\V1\ApiController@getBodiesStatus')->name('bodiesstatus');
    Route::get('towns/', 'Api\V1\ApiController@getTowns')->name('Towns');
    Route::get('locations/', 'Api\V1\LocationController@getLocations')->name('locations');
    Route::get('placestaines/', 'Api\V1\ApiController@getPlaceStaines')->name('placestaines');
    Route::get('search/', 'Filter\AdverFilterController@index')->name('search');
    Route::get('/reserve/location/{locationId}/{date?}', 'Api\V1\Reserve\ReserveController@getDatesById')->where(['id' => '[0-9]+', 'time' => '^\d{4}[\-\/\s]?((((0[13578])|(1[02]))[\-\/\s]?(([0-2][0-9])|(3[01])))|(((0[469])|(11))[\-\/\s]?(([0-2][0-9])|(30)))|(02[\-\/\s]?[0-2][0-9]))$'])->name('getDates');
    Route::get('/time/location/{id}/', 'Api\V1\Reserve\ReserveController@getTimesByLocationId')->where('id', '[0-9]+')->name('getTimes');
    Route::get('/package/{id}', 'Api\V1\PackageController@getPackageById')->where('id', '[0-9]+')->name('getpackages');
});

Route::group(['prefix' => 'Api', 'middleware' => ['auth:api', 'json.response']], function () {
    Route::post('/tracking', 'Api\V1\TrackingController@trackingExpert')->name('profile.trackingexpert.check');
    Route::get('/gateway/startPay', 'Api\V1\GatewayController@store')->name('startpay');
    Route::post('/gateway/verifyPay', 'Api\V1\GatewayController@verifyRequest')->name('verifyRequest');
    Route::get('/logout', 'Api\V1\LogoutController@logout')->name('logout');
    Route::post('/createADE', 'Api\V1\Adver\ExpertController@store')->name('createADE');
    Route::post('/createADS', 'Api\V1\Adver\SaleController@store')->name('createADS');
});

Route::group(['prefix' => 'Api/profile', 'middleware' => ['auth:api', 'json.response']], function () {
    Route::post('/update', 'Api\V1\Profile\ProfileController@update')->name('profile.update');
    Route::get('/userinfo', 'Api\V1\Profile\ProfileController@show')->name('profile.show');
    Route::get('/sales', 'Api\V1\Adver\SaleController@index')->name('profile.sales');
    Route::get('/sale/{id}/edit', 'Api\V1\Adver\SaleController@edit')->name('profile.sale.edit');
    Route::post('/sale/{id}/update', 'Api\V1\Adver\SaleController@update')->name('profile.sale.update');
    Route::delete('/sale/{id}/delete', 'Api\V1\Adver\SaleController@destroy')->name('profile.sale.destroy');
    Route::get('/experts', 'Api\V1\Adver\ExpertController@index')->name('profile.experts');
    Route::get('/expert/{id}/edit', 'Api\V1\Adver\ExpertController@edit')->name('profile.expert.edit');
    Route::get('/invoices', 'Api\V1\Profile\InvoiceController@index')->name('profile.invoices');
    Route::get('/invoice/{id}', 'Api\V1\Profile\InvoiceController@show')->name('profile.invoice.show');
});


Route::group(['prefix' => 'Api', 'middleware' => ['api', 'json.response']], function () {
    Route::get('/checkversion', 'Api\V1\ApiController@checkVersion')->middleware('throttle:2,10')->name('checkVersion');
    Route::post('/checkAuthUser', 'Api\V1\ApiController@checkAuthUser')->middleware('throttle:1,10')->name('checkAuthUser');
    Route::get('contact/{id}', 'Api\V1\ContactController@get')->middleware('throttle:9,10')->name('returnPhoneNumber');
    Route::post('/login', 'Api\V1\LoginController@login')->middleware('throttle:4,10')->name('loginapi');
    Route::post('/verifyphone', 'VerifyPhoneController@verify')->middleware('throttle:9,10')->name('verify');
    Route::post('/register', 'Api\V1\RegisterController@registerUser')->middleware('throttle:3,10')->name('registerapi');
});
