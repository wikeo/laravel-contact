<?php

namespace Wikeo\LaravelContact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Wikeo\LaravelContact\Models\Contact as ContactModel;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @param  \Wikeo\LaravelContact\Models\Contact  $contact
     * @return void
     */
    public function __construct(ContactModel $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('laravel-contact::email');
    }
}
