<form method="POST" action="{{ route('laravel-contact.submit') }}" class="w-full max-w-lg">
    @csrf
    @if(config('contact.use_honeypot'))
    @honeypot
    @endif
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-sender-name">
                {{ __('Name') }}
            </label>
            @error('sender_name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input name="sender_name" id="grid-sender-name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" value="{{ old('sender_name') }}" required autofocus>
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-sender-email">
                {{ __('Email') }}
            </label>
            @error('sender_email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input name="sender_email" id="grid-sender-email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" value="{{ old('sender_email') }}" required>
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-subject">
                {{ __('Subject') }}
            </label>
            @error('subject')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input name="subject" id="grid-subject" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" value="{{ old('subject') }}" required>
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-message">
                {{ __('Message') }}
            </label>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <textarea name="message" id="grid-message" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>{{ old('message') }}</textarea>
        </div>
    </div>
    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('Save') }}</button>
    </div>
</form>
