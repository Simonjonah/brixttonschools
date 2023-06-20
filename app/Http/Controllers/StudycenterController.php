<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studycenter;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
class StudycenterController extends Controller
{
    //

    public function studycenter(){

        return view('dashboard.admin.studycenter');
    }

   

    public function createstudycenter(Request $request){
        //create method
        $request->validate([
            'centername' => ['required', 'string', 'max:255'],

        ]);
        $reg_studycenter = new Studycenter();
        $reg_studycenter->centername = $request->centername;
        $reg_studycenter->save();
 
        if ($reg_studycenter) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    public function studycentertables(){
        $study_centertables = Studycenter::all();
        return view('dashboard.admin.studycentertables', compact('study_centertables'));
    }

    public function studycentapproved($id){
        $approve_syudycenters = Studycenter::where('id', $id)->first();
        $approve_syudycenters->status = 'approved';
        $approve_syudycenters->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function studycentsuspend($id){
        $approve_syudycenters = Studycenter::where('id', $id)->first();
        $approve_syudycenters->status = 'suspend';
        $approve_syudycenters->save();
        return redirect()->back()->with('success', 'you have suspended successfully');
    }

    public function studycentdelete($id){
        $approve_syudycenters = Studycenter::where('id', $id)->delete();
      
        return redirect()->back()->with('success', 'you have deleted successfully');
    }
    
}
