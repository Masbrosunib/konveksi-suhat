<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string|max:255',
            'subdistrict' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'postcode' => 'nullable|string|max:10',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->subdistrict = $request->input('subdistrict');
        $user->city = $request->input('city');
        $user->province = $request->input('province');
        $user->postcode = $request->input('postcode');

        if ($request->hasFile('profile_image')) {
            if ($user->profile_image) {
                Storage::delete($user->profile_image);
            }
            $path = $request->file('profile_image')->store('profile_images');
            $user->profile_image = $path;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
