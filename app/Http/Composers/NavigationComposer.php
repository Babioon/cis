<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;


class NavigationComposer
{
    public function usermenu(View $view)
    {
        $view->with('user', Auth::user());
    }
}
