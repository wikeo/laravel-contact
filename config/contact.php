<?php

// config for Wikeo/LaravelContact
return [
    /*
     * This switch determines if the honeypot protection should be used.
     */
    'recipient' => env('CONTACT_RECIPIENT', null),

    /*
     * This switch determines if the honeypot protection should be used.
     */
    'use_honeypot' => env('CONTACT_HONEYPOT', true),

    /*
     * This switch determines if an history of emails should be kept in DB.
     */
    'history' => env('CONTACT_HISTORY', true),
];
