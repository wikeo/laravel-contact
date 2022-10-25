<?php

namespace Wikeo\LaravelContact;

use Illuminate\Support\Facades\Mail;
use Wikeo\LaravelContact\Mail\Contact as ContactMail;
use Wikeo\LaravelContact\Models\Contact;

class LaravelContact
{
    private Contact $contact_model;

    /**
     * Create the package instance.
     *
     * @param  array  $contact_data
     * @return void
     */
    public function __construct($contact_data)
    {
        $this->contact_model = new Contact($contact_data);
    }

    /**
     * Record the message in DB.
     *
     * @return void
     */
    public function recordHistory()
    {
        if (config('contact.history')) {
            $this->contact_model->save();
        }
    }

    /**
     * Send email to recipient.
     *
     * @return void
     */
    public function sendEmail()
    {
        $recipient = config('contact.recipient', null);

        if (! empty($recipient)) {
            Mail::to($recipient)
                ->send(new ContactMail($this->contact_model));
        }
    }
}
