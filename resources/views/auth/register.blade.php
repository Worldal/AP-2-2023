@include ('header')
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="/image/Logo Breizh's Cooks Round.png">
    <title>S'inscrire - Breizh Cooks</title>
</head>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img alt="Logo" class="logo" src="/image/Logo Breizh's Cooks.png">
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- login -->
            <div>
                <x-input-label for="login" :value="__('Login')" />
                <x-text-input id="login" class="block mt-1 w-full" type="text" name="name" :value="old('login')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- name -->
            <div>
                <x-input-label for="name" :value="__('Prénom')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- surname -->
            <div>
                <x-input-label for="surname" :value="__('Nom de famille')" />
                <x-text-input id="surname" class="block mt-1 w-full" type="text" name="name" :value="old('surname')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Déjà inscrit ?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
