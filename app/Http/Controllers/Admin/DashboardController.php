<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $checkouts = Checkout::with('Camp')->get();
=======
        $checkouts = Checkout::with('Camp')->get(); // ini untuk ambil nama user yang checkout dari id user yang login
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
