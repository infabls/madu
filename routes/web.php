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

// прием формы заявки на участие
Route::post('grant/order/', function (Request $request) {
	$order = new Orders;
	// save file
    $request->validate([
            'fileupload' => 'required|file|mimes:doc,docx,pdf|max:2048',
        ]);
    $imageName = time().'.'.$request->fileupload->extension();  
    $request->fileupload->move(public_path('works'), $imageName);
	$order->worksId = $request->grantsId;
	$order->name = '/works/' . $imageName;
    // $order->name = $request->name;
    $order->email = $request->email;
    $order->phone = $request->phone;
    $order->save();
    return back()->with('status', "Работа с id $order->id была создана" );
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
