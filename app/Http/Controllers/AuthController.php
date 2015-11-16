<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->scopes(['user'])->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('github')->user();

        $request->session()->put('git_access_token', $user->token);

        //dd($user);

        $this->loginUser($user);

        return redirect('dashboard');
    }

    /**
     * @param $userData
     *
     * @return bool
     */
    protected function loginUser($userData)
    {
        $user = $this->checkIfUserExists($userData->email);

        if (is_null($user)) {
            $user = $this->createUser($userData);
        }

        return Auth::login($user);
    }

    /**
     * @param $email
     *
     * @return mixed
     */
    protected function checkIfUserExists($email)
    {
        return User::where('email', $email)->first();
    }

    /**
     * @param $user
     *
     * @return static
     *
     * @TODO Check email because, it can be null if this is a new user and the user hasn't confirmed the email
     */
    protected function createUser($user)
    {
        $name     = $user->getName();
        $email    = $user->getEmail();
        $nickname = $user->getNickname();
        $avatar   = $user->getAvatar();

        if (is_null($name)) {
            $name = $email;
        }

        return User::create(
            [
                'name'	   => $name,
                'email'    => $email,
                'nickname' => $nickname,
                'avatar'   => $avatar
            ]
        );
    }
}
