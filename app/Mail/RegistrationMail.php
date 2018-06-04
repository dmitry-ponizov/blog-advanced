<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    protected  $user_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.registration')->with([
            'user_name' => $this->user_name
        ]);
    }
}
