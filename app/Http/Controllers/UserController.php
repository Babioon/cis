<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

use Joomla\Github\Github;
use Joomla\Registry\Registry;


/**
 * Class UserController
 * @package  App\Http\Controllers
 * @since   1.0
 */
class UserController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        return view('user.profile');
    }

    public function repositories(Request $request)
    {
        $token = $request->session()->get('git_access_token', 'NO-TOKEN');

        $options = new Registry;
        $options->set('gh.token', $token);

        $github = new Github($options);

        $repos  = $github->repositories->getListOwn('owner');

        $pagination = $github->repositories->getPagination();

        return view('user.repositories', ['repos' => $repos, 'pagination' => $pagination]);
    }
}
