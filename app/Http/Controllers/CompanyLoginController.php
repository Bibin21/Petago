<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Transport;
use Illuminate\Support\Facades\Redirect;
class CompanyLoginController extends Controller
{
    public function verify(Request $request){
        $error="";
        $findcompany = Company::where('email', $request->email)->first();
        if(isset($findcompany)!=null)
        {
            
            if($findcompany->password==$request->password)
            {
                session(['company_id' => $findcompany->id]);
                $entries = Transport::where('status', '0')->get();
                return view('/companydashboard',compact('entries'),compact('error'));
                

            }
            else
            return Redirect::back()->withErrors('Wrong Password');
        }
        else
        {
            return Redirect::back()->withErrors('Wrong Email or Password');
        }
       
    }
    public function confirm(Request $request){
        $error="";
        $findrow = Transport::where('id', $request->id)->first();
        if($findrow->status==0)
        {
        $findrow->status=1;
        $findrow->company_id=session('company_id');
        $findrow->save();
        }
    else
    {
$error="Error Cannot Confirm";
    }

        $entries = Transport::where('status', '0')->get();
        return view('/companydashboard',compact('entries'),compact('error'));

    }
       
}
