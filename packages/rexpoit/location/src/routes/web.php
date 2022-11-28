<?php 
use Rexpoit\Location\Controllers\UserController;

Route::group(['middleware' => ['web']], function () {
Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'loginUser'])->name('login');
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'registration'])->name('register');

Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard',[UserController::class,'userDashboard'])->name('dashboard');

Route::group(['middleware' => ['admin']], function () {
Route::get('/admin/dashboard',[UserController::class,'adminDashboard'])->name('admin.dashboard');
Route::get('/status',[UserController::class,'status'])->name('status');
Route::get('/user-info',[UserController::class,'userinfo'])->name('userinfo');
Route::get('/activity',[UserController::class,'activity'])->name('activity');
});

Route::post('/logout',[UserController::class,'signOut'])->name('logout');
});
});