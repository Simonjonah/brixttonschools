<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Publication;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function create(Request $request){
        //create method
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'studycenter' => ['required', 'string', 'max:255'],
            'agree' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:admins'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8'],
            'cpassword' => 'required|min:5|max:30|same:cpassword'
           
        ]);
        $registration = new Admin();
        $registration->name = $request->name;
       $registration->role = 1;
       $registration->agree = $request->agree;
        $registration->phone = $request->phone;
        $registration->studycenter = $request->studycenter;
        $registration->email = $request->email;
        $registration->password = \Hash::make($request->password);
        $registration->save();
 
        if ($registration) {
            return redirect()->route('admin.home')->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    public function addrole(){

        return view('dashboard.admin.addrole');
    }

    public function check(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:admins'],
            'password' => ['required', 'string', 'min:8']
        ], [
            'email.exist'=>'This email does not exist in the admins table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home')->with('success', 'You have successfully login');
        }else{
            return redirect()->route('admin.login')->with('error', 'Failed to login');
        }
    }

    public function home(){

        return view('dashboard.admin.home');
    }

    public function profile() {

        return view('dashboard.admin.profile');
    }

    public function settingsupdate(Request $request, $id){
        $edit_profiles = Admin::find($id);
        $edit_profiles = Admin::where('id', $id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'studycenter' => ['required', 'string'],
            'profileimage' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('profileimage')){

            $file = $request['profileimage'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('profileimage')->storeAs('resourceimages', $filename);

        }
        $edit_profiles['profileimage'] = $path;
        $edit_profiles->name = $request->name;
        $edit_profiles->lastname = $request->lastname;
        $edit_profiles->address = $request->address;
        $edit_profiles->phone = $request->phone;
        $edit_profiles->update();
        return redirect('admin/addcourse')->with('you have update successfully');

    }



    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin.login');
    }
    
    
}
