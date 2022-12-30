<?php

namespace App\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
<<<<<<< HEAD
=======
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
use Illuminate\Queue\SerializesModels;

class Paid extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($checkout)
    {
<<<<<<< HEAD
        $this->checkout = $checkout;
=======
        $this->checkout = $checkout; //ini untuk mengambil data checkout
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
<<<<<<< HEAD
        return $this->subject('Your Transaction Has Been Confirmed')->markdown('emails.checkout.paid', [
            'checkout' => $this->checkout
=======
        return $this->subject("Your Transaction Has Been Confirmed")->markdown('emails.checkout.paid', [
            'checkout'=> $this->checkout
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        ]);
    }
}
