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
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    /**
     * Show the form for editing the user profile.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

        
    /**
     * Show the form for updateing the user profile.
     *
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url'  => 'url',
            'image' => '',        
        ]);

        $user->profile->update($data);
        return redirect("/profile/{$user->id}");
    }

}

