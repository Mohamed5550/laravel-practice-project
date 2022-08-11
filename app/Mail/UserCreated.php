<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $useremail)
    {
        $this->username = $username;
        $this->useremail = $useremail;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("User created with name: " . $this->username . ", and email: " . $this->useremail)
            ->view('emails.user-created')
            ->with([
                "username" => $this->username,
                "useremail" => $this->useremail
            ]);
    }
}
