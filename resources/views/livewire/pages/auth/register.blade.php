<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'nombres' => '',
    'apellidos' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => '',
]);

rules([
    'nombres' => ['required', 'string', 'max:255'],
    'apellidos' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
    'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    // Combina los nombres y apellidos en un solo campo 'name' antes de guardar
    $validated['name'] = $validated['nombres'] . ' ' . $validated['apellidos'];

    // Hashea la contraseña antes de almacenarla
    $validated['password'] = Hash::make($validated['password']);

    // Crear el usuario
    event(new Registered(($user = User::create($validated))));

    // Loguear al usuario
    Auth::login($user);

    // Redirigir a la página de dashboard
    $this->redirect(route('dashboard', absolute: false), navigate: true);
};
?>

<div>
    <form wire:submit="register">
        <!-- Nombres -->
        <div>
            <x-input-label for="nombres" :value="__('Nombres')" />
            <x-text-input wire:model="nombres" id="nombres" class="block mt-1 w-full" type="text" name="nombres"
                required autofocus autocomplete="given-name" />
            <x-input-error :messages="$errors->get('nombres')" class="mt-2" />
        </div>

        <!-- Apellidos -->
        <div class="mt-4">
            <x-input-label for="apellidos" :value="__('Apellidos')" />
            <x-text-input wire:model="apellidos" id="apellidos" class="block mt-1 w-full" type="text"
                name="apellidos" required autocomplete="family-name" />
            <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input wire:model="password" id="password" class="block mt-1 w-full" type="password" name="password"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <div class="m-5 flex items-center">
        <hr style="width: 45%; display: inline-block;">
        <div class="mr-2 ml-2" style="color: grey">O</div>
        <hr style="width: 45%; display: inline-block;">
    </div>

    <a href="{{ route('google.auth') }} "
        class="flex items-center justify-center bg-white border border-gray-300 rounded-lg shadow-md hover:shadow-lg px-6 py-3 text-gray-700 font-semibold text-sm w-full sm:w-auto">
        <!-- Ícono de Google -->
        <svg width="24px" height="24" viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1"
            xmlns="http://www.w3.org/2000/svg" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0" />
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
            <g id="SVGRepo_iconCarrier">
                <path d="M23.75,16A7.7446,7.7446,0,0,1,8.7177,18.6259L4.2849,22.1721A13.244,13.244,0,0,0,29.25,16"
                    fill="#00ac47" />
                <path d="M23.75,16a7.7387,7.7387,0,0,1-3.2516,6.2987l4.3824,3.5059A13.2042,13.2042,0,0,0,29.25,16"
                    fill="#4285f4" />
                <path
                    d="M8.25,16a7.698,7.698,0,0,1,.4677-2.6259L4.2849,9.8279a13.177,13.177,0,0,0,0,12.3442l4.4328-3.5462A7.698,7.698,0,0,1,8.25,16Z"
                    fill="#ffba00" />
                <polygon fill="#2ab2db" points="8.718 13.374 8.718 13.374 8.718 13.374 8.718 13.374" />
                <path
                    d="M16,8.25a7.699,7.699,0,0,1,4.558,1.4958l4.06-3.7893A13.2152,13.2152,0,0,0,4.2849,9.8279l4.4328,3.5462A7.756,7.756,0,0,1,16,8.25Z"
                    fill="#ea4435" />
                <polygon fill="#2ab2db" points="8.718 18.626 8.718 18.626 8.718 18.626 8.718 18.626" />
                <path d="M29.25,15v1L27,19.5H16.5V14H28.25A1,1,0,0,1,29.25,15Z" fill="#4285f4" />
            </g>
        </svg>
        <!-- Texto del botón -->
        <span class="ml-3">Iniciar sesión con Google</span>
    </a>

</div>
