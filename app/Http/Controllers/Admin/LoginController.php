<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/admin/beranda');
        }elseif (Auth::guard('guru')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/admin/beranda');
        }
         return redirect ('jurnal/login');
    } 


    public function logout (){
       if (Auth::guard('user')->check()){
        Auth::guard('user')->logout();

       }elseif(Auth::guard('guru')->check()){
        Auth::guard('guru')->logout();
    } 
    return redirect ('jurnal/login');
}
    public function jurnal()
    {
     return View('jurnal/login');
    }

    
}
