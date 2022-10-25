<?php

namespace Wikeo\LaravelContact\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'sender_name' => 'required|max:255',
            'sender_email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ];
    }
}
