<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendResetPasswordLink extends Mailable
{
    use Queueable, SerializesModels;

    public $userEmail;
    public $resetPassToken;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $currentResetPassToken)
    {
        $this->userEmail = $email;
        $this->resetPassToken = $currentResetPassToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.resetpassword');
    }
}
