<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\CompanyController::class, 'indexForAll'])->name('home');
Route::get('/company/{company}', [\App\Http\Controllers\CompanyController::class, 'showCompanyForAll'])->name('showCompany');
Route::get('/category/{category:eng}', [\App\Http\Controllers\CategoryController::class, 'showCategory'])->name('showCategory');
Route::get('/city/{city:eng}', [\App\Http\Controllers\CityController::class, 'showCity'])->name('showCity');

Route::get('/infoLink/{infoLink:slug}', [\App\Http\Controllers\infoLinkController::class, 'show'])->name('showLink');

Route::get('/test', function () {
    return view('forTest', ['title'=>'Тест']);
});//->middleware(['auth']);

Route::get('/navbar', function () {
    return view('test-navbar');
});//->middleware(['auth']);

Route::get('/cabinet', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin');
/*
Route::get('/cabinet/users', function () {
    return view('admin.user.users', ['title'=>'Личный кабинет - Пользователи']);
})->middleware(['auth'])->name('adminUsers');*/

/*Route::get('/cabinet/cities', function () {
    return view('admin.cities', ['title'=>'Личный кабинет - Пользователи']);
})->middleware(['auth'])->name('adminCities');*/

/*Route::get('/cabinet/categories', function () {
    return view('admin.category.categories', ['title'=>'Личный кабинет - Пользователи']);
})->middleware(['auth'])->name('adminCategories');*/

//Route::post('resizeImagePost', [ImageController::class, 'resizeImagePost'])->name('resizeImagePost');


Route::prefix('cabinet')->group(function () {
    Route::resource('city', \App\Http\Controllers\CityController::class)->middleware(['auth']);
    Route::resource('category', \App\Http\Controllers\CategoryController::class)->middleware(['auth']);
    Route::resource('user', \App\Http\Controllers\UserController::class)->middleware(['auth']);
    Route::resource('company', \App\Http\Controllers\CompanyController::class)->middleware(['auth']);
    Route::resource('comment', \App\Http\Controllers\CommentController::class)->middleware(['auth']);
    Route::resource('infoLink', \App\Http\Controllers\infoLinkController::class)->middleware(['auth']);
    Route::put('comment/{comment}/moderate', [\App\Http\Controllers\CommentController::class, 'togglePublish'])->name('togglePublish');
    Route::put('company/{company}/moderate', [\App\Http\Controllers\CompanyController::class, 'toggleActive'])->name('toggleActive');
});


require __DIR__.'/auth.php';
