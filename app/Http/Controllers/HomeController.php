<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
<<<<<<< HEAD
        switch (Auth::user()->is_admin) {
            case true:
                return redirect(route('admin.dashboard'));
                break;
            
=======
        switch(Auth::user()->is_admin)
        {
            case true:
                return redirect(route('admin.dashboard'));
                break;

>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
