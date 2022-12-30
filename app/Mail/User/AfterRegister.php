<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
<<<<<<< HEAD
=======
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
use Illuminate\Queue\SerializesModels;

class AfterRegister extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
<<<<<<< HEAD

    /**
=======
    /*
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Registration on Laracamp')->markdown('emails.user.afterRegister', [
            'user' => $this->user
        ]);
    }
}
