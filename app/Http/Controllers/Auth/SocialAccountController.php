<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAccountController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try{
            $user = Socialite::driver($provider)->user();
            $authUser = $this->findOrCreateUser($user, $provider);
            Auth::login($authUser, true);
            return redirect('/');
        }catch(\Exception $e){

            return redirect()->route('login');
        }


    }

    private function findOrCreateUser($user, $provider)
    {
//        get social account
        $account = SocialAccount::where('provider_name', $provider)->where('provider_id', $user->id)->first();
        $authUser = $account->user;
        if($authUser){
            return $authUser;
        }
//        get user
        $current = User::where('email', $user->email)->first();
//        create user
        if(! $current){
            $current = User::create([
                'name' => $user->name,
                'email' => $user->email,
            ]);
        }
//        create social account
        $current->accounts()->create([
            'provider_id' => $user->id,
            'provider_name' => $provider,
        ]);


        return $current;
    }
}
