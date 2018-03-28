<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
	{
	    $socialiteUser = Socialite::driver($provider)->user();

	    $user = $this->findOrCreateUser($provider, $socialiteUser);

	    auth()->login($user, true);

	    return redirect('/dashboard.html');
	}
}
