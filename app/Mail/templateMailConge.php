<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class templateMailConge extends Mailable
{
    use Queueable, SerializesModels;
    public $mail_info = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($_mail_info)
    {
        $this->mail_info = $_mail_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.templateconge')
        ->subject("Reponse au demande de conge")
        ;
    }
}
