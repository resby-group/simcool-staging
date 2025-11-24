<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestBrevoMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Brevo Test Email')
                    ->html('<h1>Brevo is working!</h1><p>Your Laravel mail is now using Brevo API.</p>');
    }
}
