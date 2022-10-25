<?php

namespace Wikeo\LaravelContact\Http\Controllers;

use Wikeo\LaravelContact\Http\Requests\StoreContactRequest;
use Wikeo\LaravelContact\LaravelContact;

class ContactController extends Controller
{
    public function index()
    {
        return view('laravel-contact::form');
    }

    public function store(StoreContactRequest $request)
    {
        $contact = new LaravelContact($request->all());
        $contact->recordHistory();
        $contact->sendEmail();

        return view('laravel-contact::confirmation');
    }
}
