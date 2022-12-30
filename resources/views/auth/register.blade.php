<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

<<<<<<< HEAD
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

=======
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
<<<<<<< HEAD
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
=======
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            </div>

            <!-- Email Address -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
=======
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            </div>

            <!-- Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
=======
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
<<<<<<< HEAD
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
=======
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

<<<<<<< HEAD
                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
=======
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
