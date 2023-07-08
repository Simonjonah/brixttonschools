<?php

namespace App\Http\Controllers;

use App\Models\Classname;
use Illuminate\Http\Request;

class ClassnameController extends Controller
{
    public function addclass (){

        return view('dashboard.admin.addclass');
    }

    public function createclasses (Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            
        ]);
        $addclasses = new Classname();
        $addclasses->name = $request->name;
       
        $addclasses->save();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function viewclassestables(){
        $view_clesses = Classname::orderBy('created_at', 'DESC')->get();
        return view('dashboard.admin.viewclassestables', compact('view_clesses'));
    }

    public function editclasses($id){
        $edit_clesses = Classname::find($id);
        return view('dashboard.admin.editclasses', compact('edit_clesses'));
    }
    
    public function updateclass (Request $request, $id){
        $edit_clesses = Classname::find($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            
        ]);

        $edit_clesses->name = $request->name;
        $edit_clesses->update();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function classesdelete($id){
        $classdelted = Classname::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
}
