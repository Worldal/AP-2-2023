{{-- @include ('header') --}}
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="/image/Logo Breizh's CooksB.png">
    <title>Profil - Breizh Cooks</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenue sur votre compte") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- @include('footer') --}}
