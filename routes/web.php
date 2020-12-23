<?php

use App\Http\Controllers\LocaleController;
use App\Models\Works;
use App\Models\Grant;
use App\Models\Orders;
use Illuminate\Http\Request; 

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// страница всех грантов
Route::get('grants', function () {

	$grant = grant::where('status', '!=', 'ended')->paginate();
	return view('grants',[ 
	'grants' => $grant
	]);
});


// страница конкретного гранта
Route::get('grant/{key}', function ($key) {
	$grant = Grant::where('id', '=', $key)->firstOrFail();
	$orders = Orders::where('worksId', '=', $key)->get();
	return view('grantdetail',[ 
	'grants' => $grant,
	'orders' => $orders,
	]);
});

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 */
Route::group(['as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 *
 * These routes can only be accessed by users with type `admin`
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    includeRouteFiles(__DIR__.'/backend/');
});
