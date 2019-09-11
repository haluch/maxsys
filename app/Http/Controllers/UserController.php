<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{

	
	 public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx', \Maatwebsite\Excel\Excel::CSV);
    }


    public function verifyUser(){

        dd ();
        if (Auth::check()) {
           dd ($this->is_admin());
        }else{
            echo "not logged";
        }
    }
}
