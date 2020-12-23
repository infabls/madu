<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use App\Models\Works;
use App\Models\Orders;
use Illuminate\Http\Request; 


// все работы
Route::get('allworks/', function () {
	$works = Works::paginate();
	return view('backend.allworks',[ 
	'works' => $works
	]);
});

// все работы
Route::get('orders/', function () {
	$orders = Orders::paginate();
	return view('backend.orders',[ 
	'orders' => $orders
	]);
});


// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });
