<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller {

    public function show(User $user) {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user) {
        //abort_if($user->isNot(auth()->user()), '404');
        $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user) {

        $attributes = request()->validate([
            'username' => [
                'string',
                'required',
                'max:225',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
            ],
            'name' => [
                'string',
                'required',
                'max:225'
            ],
            'avatar' => ['file'],
            'email' => [
                'string',
                'required',
                'email',
                'max:225',
                Rule::unique('users')->ignore($user)
            ],
            'password' => [
                'string',
                'required',
                'min:8',
                'max:225',
                'confirmed'
            ]
        ]);
        $attributes['avatar'] = request('avatar')->store('avatars');
        $user->update($attributes);
        return redirect($user->path());
    }

}
