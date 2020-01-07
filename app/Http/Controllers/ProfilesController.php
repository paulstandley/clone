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
        $this->authorize('update', $user->profile);
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
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url'  => 'url',
            'image' => '',
        ]);

        auth()->user->profile->update($data);

        return redirect("/profile/{$user->id}");
    }

}

