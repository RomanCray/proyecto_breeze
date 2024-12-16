<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\rules;
use function Livewire\Volt\state;

// Estado de la contraseña en función de google_id
state(['password' => '']);

rules(['password' => ['required', 'string', 'current_password']]);

$deleteUser = function (Logout $logout) {
    // Validamos los datos del formulario
    $this->validate();

    $user = Auth::user();

    // Desactiva el usuario cambiando el estado
    $user->status = 0; // Cambiar el estado a 0 (inactivo)
    $user->save();

    // Cierra sesión después de desactivar el usuario
    tap($user, $logout(...));

    // Redirige a la página de inicio
    $this->redirect('/', navigate: true);
};

$deleteUserG = function (Logout $logout) {
    // dd("gominala");
    // Validamos los datos del formulario
    // $this->validate();

    $user = Auth::user();

    // Desactiva el usuario cambiando el estado
    $user->status = 0; // Cambiar el estado a 0 (inactivo)
    $user->save();

    // Cierra sesión después de desactivar el usuario
    tap($user, $logout(...));

    // Redirige a la página de inicio
    $this->redirect('/', navigate: true);
};

?>

<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    @if (Auth::check() && Auth::user()->google_id === null)
        <x-danger-button x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button>

        <x-modal name="confirm-user-deletion" :show="$errors->isNotEmpty()" focusable>
            <form wire:submit.prevent="deleteUser" class="p-6">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>

                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                    <x-text-input wire:model="password" id="password" name="password" type="password"
                        class="mt-1 block w-3/4" placeholder="{{ __('Password') }}" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-danger-button class="ms-3">
                        {{ __('Delete Account') }}
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    @else
        <form wire:submit.prevent="deleteUserG" class="p-6">
            <div class="mt-6 flex justify-end">
                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    @endif
</section>
