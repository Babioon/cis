<?php

namespace app\Cis\Vcs;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    /**
     * Get the user that belongs to the token
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}