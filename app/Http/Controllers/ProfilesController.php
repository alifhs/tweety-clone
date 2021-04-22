<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ProfilesController extends Controller
{
    //
    public function show(User $user){
        // var_dump($user);
        
        return view('profiles.show', ['user' => $user, 
        ]);
    }
    public function edit(User $user){
        // var_dump($user);
        // if(auth()->user()->isNot($user))
        //     abort(404);
        $this->authorize('edit', $user);
        return view('profiles.edit', ['user' => $user]);
    }

    public function update(User $user) {
        // dd(request('avatar'));

        $this->authorize('edit', $user);

       $attributes =  request()->validate([
            'username' => ['string', 'required','alpha_dash' ,'max:255', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed']
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        if(request('avatar'))

        $attributes['avatar'] = request('avatar')->store('avatars'); //(request('avatar')) returns Uploadedfile object , store() returns path to the file

        $user->update($attributes);

        return redirect()->route('profile', $user);
    }
}
