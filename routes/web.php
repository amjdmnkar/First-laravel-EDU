<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/welcome','welcome');

Route::view('/students','students',['name'=>'Amjad']);

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/MyCollageName/laravel',function()
{
    return "ASPU";
});

Route::get('/user/{id}',function($id)
{
    return 'the user id who have passed it within url is = '.$id;
});
Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {

    return 'Post IS : ' . $postId . ' The comment Is: ' . $commentId;

});
Route::get('/students/classes/{name?}', function (string $name = 'applications development') {

    return $name;

});
Route::get('/user/account/profile/personalinfo', function () {

    return "Personal Info For User";

})->name('profile');
Route::get('/user/account/profile/', function () {

    return redirect()->route('profile');

});

Route::prefix('admin')->group(function () {

    Route::get('dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('users', function () {
        return 'Admin Users';
    });

});
Route::middleware(['auth'])->group(function () {

    // Routes accessible to all authenticated users

    Route::get('/user/profile', [UserController::class, 'profile']);

    Route::get('/user/settings', [UserController::class, 'settings']);

});
Route::controller(OrderController::class)->group(function () {

    Route::get('/orders/{id}', 'show');

    Route::post('/orders', 'store');

});




