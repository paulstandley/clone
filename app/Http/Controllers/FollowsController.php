<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  $user
     * @return \Illuminate\Http\Response
     */
    public function store(User  $user)
    {
        return $user->username;
    }
}
