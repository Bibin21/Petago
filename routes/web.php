<?php

use App\Models\Transport;
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

Route::post('/transportnext', [CompanyLoginController::class,'next'] );

Route::get('/companydashboard', function () {

    try{
    
        $error="";
        if(session('company_id'))
        {
        
        $cid=session('company_id');
    $pending = Transport::where('status', '1')->get();
    $confirmed=Transport::where('status', '2')->orWhere('status', '3')->where('company_id',$cid)->get();
    $inprogress=Transport::where('status', '>','3')->where('status', '<','6')->where('company_id',$cid)->get();

        }
        else throw new Exception("Not Signed in");
    }
    catch(Throwable $e)
    {
    $error=$e->getMessage();
    return view('transport_service',compact("error"));
    }
    return view('transport_service',compact('pending','confirmed','inprogress'),compact('error'));
});

Route::get('/order_details', function () {
    return view('user_order_details');
});

Route::get('/user_dashboard', function () {
    try{
        $orders="" ;
        $error="";
        if(session("email"))
        {
            $orders = Transport::where('email', session('email'))->get();

        }
        else throw new Exception("User Not Signed in");
   
    }
    catch(Throwable $e)
    {
    $error=$e->getMessage();
    return view('userdashboard',compact("error"));
    }
    return view('userdashboard',compact('orders'),compact('error'));
});

Route::get('/view_order/{oid}', function ($oid) {
    try{
        $orders="" ;
        $error="";
         $order=Transport::where('id', $oid)->first();
         if($order==null)
         throw new Exception("Order Not Found");
    }
    
    catch(Throwable $e)
    {
   $error=$e->getMessage();
   
    }
    return view('user_order_details',compact('order','error'));
}
);


Route::get('order_details', function () {
    return view('user_order_details');
});

Route::post('/transportconfirm', [CompanyLoginController::class,'confirm'] );

// Route::get('/transportdashboard', function () {
//     return view('transport_service');
// });

