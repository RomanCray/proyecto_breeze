<?php

use App\Http\Controllers\ExternalUsers\ExternalUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\ValidationException;


Route::view('/', 'welcome')->name('dashBoard.sin.liveWire');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// MIS RUTAS PERSONALIZADAS
Route::get('/google-auth/redirect', function (Request $request) {
    $isLogin = $request->query('isLogin');
    session(['isLogin' => $isLogin]);
    return Socialite::driver('google')->redirect();
})->name('google.auth');

Route::get('/google-auth/callback', function () {
    $googleUser = Socialite::driver('google')->user();
    $isLogin = session('isLogin');

    if (!$isLogin) {
        $verifyUser = ExternalUsers::createExternalUser($googleUser);
    } else {
        $verifyUser = ExternalUsers::createExternalUser($googleUser, $isLogin);
    }
    // dd (!$isLogin, $verifyUser);



    if ($verifyUser[0]) {
        return redirect(route('dashboard'));
    } else {
        if (isset($verifyUser[1])) {
            return redirect(route('dashBoard.sin.liveWire'))
            ->withErrors($verifyUser[1]->validator);
        } else {
            throw ValidationException::withMessages([
                'form.email' => 'Tu cuenta está desactivada.',
            ])->redirectTo(route('login'));
        }
    }
});

require __DIR__ . '/auth.php';
