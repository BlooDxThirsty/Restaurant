<x-guest-layout >
    <x-jet-authentication-card >
        <x-slot name="logo" >
            {{-- <x-jet-authentication-card-logo /> --}}
            {{-- <img style="width:120%; border-radius: 20%" src="https://o.remove.bg/downloads/958de972-3ac9-4804-ba3c-2e16d1d159e1/Delice_Food-removebg-preview.png" alt="" srcset=""> --}}
            <img style="width:120%; border-radius: 20%" src="assets/images/Delice Food.png" alt="" srcset="">
            {{-- <a href="https://ibb.co/PNJmJct"><img src="https://i.ibb.co/PNJmJct/image.png" alt="image" border="0"></a> --}}

        </x-slot>

        <x-jet-validation-errors  class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form  method="POST" action="{{ route('login') }}">
            @csrf

            <div >
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
            </div>
            <div class="flex items-center justify-end mt-4">

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="/register">
                       Don't Have Account?
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
