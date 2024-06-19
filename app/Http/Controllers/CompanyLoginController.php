<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Transport;
use Illuminate\Support\Facades\Redirect;
class CompanyLoginController extends Controller
{
    public function verify(Request $request){
       
        $findcompany = Company::where('email', $request->email)->first();
        if(isset($findcompany)!=null)
        {
            
            if($findcompany->password==$request->password)
            {
                $error="";
                session(['company_id' => $findcompany->id]);
                return redirect('/companydashboard');
                

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
        if($findrow->status==1)
        {
        $findrow->status=2;
        $findrow->company_id=session('company_id');
        $findrow->save();
        }
    else
    {
$error="Error Cannot Confirm";
return Redirect::back()->withErrors('Error Cannot Confirm');
    }

    return redirect('/companydashboard');

    }

    public function next(Request $request){
        $error="";
      
    
          
            $findrow = Transport::where('id', $request->id)->first();
            if(session('company_id')==$findrow->company_id)
            {
        $findrow->status=$findrow->status+1;
        $findrow->company_id=session('company_id');
        $findrow->save();
            }
        
    else
    {
$error="Error Cannot Confirm";
return Redirect::back()->withErrors('Error Cannot Confirm');
    }

    return redirect('/companydashboard');
        
    }
       




}

