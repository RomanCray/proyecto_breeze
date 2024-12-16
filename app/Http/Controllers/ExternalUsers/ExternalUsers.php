<?php

namespace App\Http\Controllers\ExternalUsers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class ExternalUsers extends Controller
{
    public static function createExternalUser($externalUser, $isLogin = null)
    {
        try {
            $validated = Validator::make([
                'name' => ($externalUser->getName() != null && $externalUser->getName() != '')
                    ? $externalUser->getName()
                    : (($externalUser->getNickname() != null && $externalUser->getNickname() != '')
                        ? $externalUser->getNickname()
                        : 'Desconocido'),
                'email' => $externalUser->getEmail(),
            ], [
                'name' => ['required', 'string', 'max:255'],
                // 'email' => ['required', 'email', 'max:255', 'unique:users,email'],
                'email' => ['required', 'email', 'max:255'],
            ], [
                'name.required' => 'No pudimos recibir el campo nombre. Vuelve a intentar o Regístrate directamente desde nuestro formulario.',
                'email.required' => 'No pudimos recibir el campo correo electrónico. Vuelve a intentar o Regístrate directamente desde nuestro formulario.',
                'email.email' => 'El correo electrónico debe ser válido.',
                'email.unique' => 'Este correo electrónico ya está registrado.',

            ])->validate();

            $user = User::where('email', $externalUser->getEmail())->first();

            if (!$user) {
                $validated['name'] = ($externalUser->getName() != null || $externalUser->getName() != '') ? $externalUser->getName() : (($externalUser->getNickname() != null || $externalUser->getNickname() != '' ? $externalUser->getNickname() : 'Desconocido'));

                $validated['email'] = $externalUser->getEmail();
                $validated['password'] = Hash::make(Str::uuid()->toString());
                $validated['picture'] = $externalUser->getAvatar() ?? null;
                $validated['google_id'] = $externalUser->getId();

                $user = User::create($validated);

                event(new Registered($user));
            } else {
                if ($user->status == 0) {
                    if ($isLogin == null) {
                        # code...
                        $user->status = 1;
                        $user->save();
                    } else {
                        return [false];
                    }
                }
            }

            Auth::login($user);
            return [true];
        } catch (ValidationException $e) {
            return [false, $e];
        }
    }

}
