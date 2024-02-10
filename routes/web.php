<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportController;
use App\Models\User;
use App\Http\Controllers\CompanyLoginController;
use App\Http\Controllers\LoginWithGoogleController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/transport', function () {
    if( $finduser = User::where('email', session('email'))->first())
    {

    }
else if(isset($_COOKIE['google_auth'])!=null)
{

}
else
return redirect('/error');
    return view('transport');
});
Route::get('/sell', function () {
    return view('sell');
});
Route::post('/transportinfo', [TransportController::class,'store'] )->name('transport.info');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
  
Route::controller(LoginWithGoogleController::class)->group(function(){
    Route::get('authorized/google', 'redirectToGoogle')->name('auth.google');
    Route::get('authorized/google/callback', 'handleGoogleCallback');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/transportlogin', function () {
    return view('transportlogin');
});

Route::post('/companyloginverify', [CompanyLoginController::class,'verify'] );

Route::get('/companydashboard', function () {
    return view('companydashboard');
});

Route::post('/transportconfirm', [CompanyLoginController::class,'confirm'] );