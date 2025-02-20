<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use \Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;
use Telegram\Bot\Laravel\Facades\Telegram;

class RegisteredUserController extends Controller {
    /**
     * Display the registration view.
     */
    public function create(): View {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $mailData = [
            'title' => 'Mail from Laravel',
            'body' => $user->name,
        ];

        Mail::to(env('MAIL_USERNAME_NOTIFICATION'))->send(new Welcome($mailData));
        // Mail::to($request->email)->send(new Welcome($mailData));

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANEL_ID'),
            'text' => 'New user ' . $user->name . ' registered',
            'parse_mode' => 'HTML',
            'disable_web_page_preview' => true,
        ]);

        return redirect(route('dashboard', absolute: false));
    }
}
