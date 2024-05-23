<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailContatto extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public function __construct($contact)
    {
      $this->contact =$contact;
    }

  
    public function build(){
        return view('mail');
    }
}
