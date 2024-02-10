<?php
namespace App\Http\Controllers;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
 
        try {
            $user = Socialite::driver('google')->User();
      
            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){
      
                Auth::login($finduser);
                $cookie_name = "google_auth";
$cookie_value =Crypt::encrypt($user->id);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
session(['email' => $user->email]);
                return redirect('/');
      
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Crypt::encrypt($user->id),
                    'google_id'=> $user->id
                ]);
                Auth::login($newUser);
                $cookie_name = "google_auth";
$cookie_value = Crypt::encrypt($user->id);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
session(['email' => $user->email]);
                return redirect('/');
            }
        }
        catch (Exception $e) {
            dd($e->getMessage());
        }
     

    }
}