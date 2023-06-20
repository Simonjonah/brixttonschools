<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createteacher(Request $request){
       
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],

            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'studycenter' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $edit_profiles['images'] = $path;
        $edit_profiles->name = $request->name;
        $edit_profiles->email = $request->email;
        $edit_profiles->address = $request->address;
        $edit_profiles->phone = $request->phone;
        $edit_profiles->studycenter = $request->studycenter;
        $edit_profiles->designation = $request->designation;


        $edit_profiles->save();

        return redirect()->back()->with('success', 'you have update successfully');

    }
}
