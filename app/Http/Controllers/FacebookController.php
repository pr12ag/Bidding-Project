<?php

namespace App\Http\Controllers;

use Socialite;

class FacebookController extends Controller
{
    
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

       echo $user->getName();
       echo"<br/>";
       echo $user->getEmail()
       echo "<img src='" . $user->getAvatar() . "'>";
    }

}
