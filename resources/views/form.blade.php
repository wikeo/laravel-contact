<form method="POST" action="{{ route('laravel-contact.submit') }}" class="w-1/2 mx-auto px-6">
    @csrf
    @if(config('contact.use_honeypot'))
    @honeypot
    @endif
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-sender-name">
                {{ __('Name') }}
            </label>
            <input name="sender_name" id="grid-sender-name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full p-3 @error('title') border-red-500 @enderror" type="text" value="{{ old('sender_name') }}" required autofocus>
            @error('sender_name')
            <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-sender-email">
                {{ __('Email') }}
            </label>
            <input name="sender_email" id="grid-sender-email" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full p-3" type="text" value="{{ old('sender_email') }}" required>
            @error('sender_email')
            <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-subject">
                {{ __('Subject') }}
            </label>
            <input name="subject" id="grid-subject" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full p-3" type="text" value="{{ old('subject') }}" required>
            @error('subject')
            <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-message">
                {{ __('Message') }}
            </label>
            <textarea name="message" id="grid-message" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full h-64 p-3" required>{{ old('message') }}</textarea>
            @error('message')
            <div class="text-red-500 text-xs italic">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{ __('Send') }}</button>
    </div>
</form>