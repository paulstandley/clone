<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the user profile.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function index(\App\User $user)
    {
        return view('profiles.index', compact('user'));
    }
    /**
     * Show the form for editing the user profile.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\User $user)
    {
        return view('profiles.edit', compact('user'));
    }

}

