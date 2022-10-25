@component('mail::message')
{{ __('You have received a message through your contact form.') }}

{{ __('Here it is:') }}

- {{ __('Sender name') }} : {{ $contact->sender_name }}
- {{ __('Sender email') }} : {{ $contact->sender_email }}
- {{ __('Subject') }} : {{ $contact->subject }}
- {{ __('Message') }} : {{ $contact->message }}

{{ __('You can reply to this email directly to reply to that request.') }}
@endcomponent
