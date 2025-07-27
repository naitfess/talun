<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(route('admin.dashboard', absolute: false));
    // }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // $key = 'login_attempts_' . $request->ip();
        // if (RateLimiter::tooManyAttempts($key, 3)) {
        //     Session::put('show_captcha', true);
        // }
        // if (Session::get('show_captcha')) {
        //     $request->validate([
        //         'g-recaptcha-response' => 'required|captcha',
        //     ]);
        // }

        if (Auth::attempt($request->only('email', 'password'))) {
            // RateLimiter::clear($key);
            // Session::forget('show_captcha');
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }

        // RateLimiter::hit($key, 300);
        throw ValidationException::withMessages([
            'email' => [__('auth.failed')],
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
