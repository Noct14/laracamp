<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Mail;
use App\Mail\Checkout\Paid;
<<<<<<< HEAD
=======

>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
<<<<<<< HEAD
        
        // send email to user
=======

        //send email to user
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success', "Checkout with ID {$checkout->id} has been updated!");
        return redirect(route('admin.dashboard'));
    }
}
