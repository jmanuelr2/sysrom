<?php

namespace App\Http\Controllers;

use Auth;

use App\User;

use Socialite;

use App\SocialProfile;

use Illuminate\Http\Request;



class SocialLoginController extends Controller
{
    public function redirectToSocialNetwork($socialNetwork)
    {
    	if ( collect(SocialProfile::$allowed)->contains($socialNetwork)) {
    		return Socialite::driver($socialNetwork)->redirect();
    	}

    	return redirect()->route('login')->with('worning', 'Red social no soportada '. $socialNetwork);

    }

	public function handleSocialNetworkCallback($socialNetwork)
    {

    	try
    	{
    		$socialUser = Socialite::driver($socialNetwork)->user();
    	}
    	catch (\Exception $e)
    	{
    		//dd($e->getMessage());
    		return redirect()->route('login')->with('worning', 'Hubo un error en el login...');
    	}
    		
    	//dd($facebookUser);

    	//Verificar si existe un identificador del usuario de la red social

    	$socialProfile = SocialProfile::firstOrNew([
    		'social_network' => $socialNetwork,
    		'social_network_user_id' => $socialUser->getId()
    	]);

    	if ( ! $socialProfile->exists ) 
    	{
    		// Verificar si existe un usuario con el email de la red social
    		$user = User::firstOrNew(['email' => $socialUser->getEmail()]);

    		if ( ! $user->exists ) 
    		{
    			$user->name = $socialUser->getName();
    			$user->save();
    		}

    		$socialProfile->avatar = $socialUser->getAvatar();

    		$user->profiles()->save( $socialProfile );
    		
    	}


    	Auth::login( $socialProfile->user );
        
    	return redirect()->route('admin')->with('success', 'Bienvenido ' . $socialProfile->user->name);

    }    
}
