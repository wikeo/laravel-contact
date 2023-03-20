<?php

namespace Wikeo\LaravelContact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Wikeo\LaravelContact\Models\Contact as ContactModel;

class Contact extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
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
