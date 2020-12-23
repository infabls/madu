<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use Tabuna\Breadcrumbs\Trail;
use App\Models\Works;
use App\Models\Orders;
use Illuminate\Http\Request; 

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });

// вывод собственных работ
Route::get('my-works', function () {
    if (!Auth::user()) {
        return abort(404);
    }
	$id = Auth::id();
	$myworks = Works::where('ownerId', '=', $id)
    ->paginate(10);
    return view('frontend.pages.myworks',[ 'works' => $myworks]);
})->name('home.salons');


// форма добавление работы
Route::get('addwork', function () {
    if (!Auth::user()) {
        return abort(404);
    }
	$id = Auth::id();
    return view('frontend.pages.addwork');
})->name('home.addwork');



// добавление работы
Route::post('addwork', function (Request $request) {
    if (!Auth::user()) {
        return abort(404);
    }
    // dd($request->price);
    $user_id = Auth::id();

    // проверка фотографии
    $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    $imageName = time().'.'.$request->image->extension();  
    $request->image->move(public_path('img/works'), $imageName);
        /* Store $imageName name in DATABASE from HERE */
    $works = new Works;
    $works->name = $request->name;
    $works->ownerId = $user_id;
    $works->photo = '/img/works/' . $imageName;
    $works->price = $request->price;
    $works->status = 'mod';
    $works->save();
    return redirect("addwork")->with('status', "Работа с id $works->id была создана" );
});





Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });
