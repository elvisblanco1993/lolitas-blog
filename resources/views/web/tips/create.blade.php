<x-guest-layout>
    @include('layouts.navbar')

    <div class="max-w-3xl mx-auto">
        <div class="my-12 px-4 sm:px-6 lg:px-8">
            <div class="text-4xl font-semibold">
                {{__("Get in touch")}}
            </div>
            <p class="mt-6">{{__("Have a question or just want to contribute to this blog?")}}</p>
            <p class="mt-2">{{__("Feel free to get in touch with me using the form below:")}}</p>

            <form action="{{route('tips.store')}}" method="post" class="mt-8">
                @csrf
                <div class="grid grid-cols-2 gap-8">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{__("Name (required)")}}</label>
                        <input type="text" name="name" class="mt-1">
                        @error('name')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{__("Email (if requiring a reply)")}}</label>
                        <input type="email" name="email" class="mt-1">
                        @error('email')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="message" class="block font-medium text-sm text-gray-700 dark:text-gray-300">{{__("Message (required)")}}</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="mt-1"></textarea>
                        @error('message')
                            <small class="text-red-600">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="col-span-2 flex justify-end">
                        <button type="submit" class="primary-button">{{__("Send message")}}</button>
                    </div>
                    <div class="col-span-2">
                        @if (session('status'))
                            <div class="bg-blue-100 text-blue-600 border border-blue-200 px-4 py-2 rounded-md">
                                {{ __(session('status')) }}
                            </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

