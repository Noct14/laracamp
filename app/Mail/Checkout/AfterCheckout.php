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

class AfterCheckout extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;
<<<<<<< HEAD

    /**
=======
    /*
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Register Camp: {$this->checkout->Camp->title}")->markdown('emails.checkout.afterCheckout', [
            'checkout' => $this->checkout
        ]);
    }
}
