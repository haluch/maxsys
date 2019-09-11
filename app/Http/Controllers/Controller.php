<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use app\MenuModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function is_admin($admin = null)
    {   
        if (is_null($admin)){
            $is_admin = Auth::user()->is_admin;
            $id       = Auth::user()->id;
            $name     = Auth::user()->name;
            $arrDados = ['id'=>$id, 'nome'=>$name,'is_admin'=>$is_admin];
            return $arrDados;
        }else{
            return Auth::user()->is_admin;
        }
    }
    
    public function logout() {
		
        Auth::logout();
        return back();
        
    }
}
