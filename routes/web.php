<?php

use App\Http\Controllers\LocaleController;
use App\Models\Works;
use App\Models\Orders;
use Illuminate\Http\Request; 

/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */


// страница конкретной работы
Route::get('works/{key}', function ($key) {
	$works = Works::where('id', '=', $key)->firstOrFail();
	$orders = Orders::where('worksId', '=', $key)->get();
	return view('worksdetail',[ 
	'works' => $works,
	'orders' => $orders,
	]);
});

// все работы
Route::get('works', function () {
	$works = Works::where('status', '=', 'on')->paginate();
	return view('works',[ 
	'works' => $works
	]);
});


// прием формы заявки на покупку 
Route::post('works/buy', function (Request $request) {
	$order = new Orders;
	$order->worksId = $request->worksId;
    $order->name = $request->name;
    $order->email = $request->email;
    $order->phone = $request->phone;
    $order->save();
    return back()->with('status', 'Ваша заявка была отправлена');
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
