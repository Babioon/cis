<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Illuminate\Routing\Controller;

/**
 * Class DashboardController
 *
 * @package  App\Http\Controllers
 * @since    1.0
 */
class DashboardController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.default');
    }
}
