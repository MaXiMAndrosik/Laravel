<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller {

    public function redirectToProvider() {

        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback() {
        echo '<pre>';

        try {

            $user = Socialite::driver('github')->user();

            Log::info('GitHub authentication for user: ' . $user->nickname);

        } catch (\Exception $exception) {
            Log::info('GitHub authentication exception: ' . $exception);
            return redirect('/');
        }

        // var_dump($user->id);
        // die;

        $existUser = User::updateOrCreate(
            ['email' => $user->email],
            [
                'github_id' => $user->id,
                'name' => $user->name,
            ]);

        Auth::login($existUser);



        return redirect('/dashboard');

    }
}
