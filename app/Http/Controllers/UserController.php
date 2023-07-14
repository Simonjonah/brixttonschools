<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Classname;
use App\Models\Studycenter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createadmission (Request $request){
       
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'middlename' => ['required', 'string'],
            'monthofentry' => ['required', 'string'],
            'centername' => ['required', 'string'],
            'placeofbirth' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'section' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'state' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'entrylevel' => ['required', 'string'],
            'password' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $add_adimission = new User();

        $add_adimission['images'] = $path;
        $add_adimission->surname = $request->surname;
        $add_adimission->centername = $request->centername;
        $add_adimission->slug = $request->slug;
        $add_adimission->fname = $request->fname;
        $add_adimission->middlename = $request->middlename;
        $add_adimission->email = $request->email;
        $add_adimission->phone = $request->phone;
        $add_adimission->dob = $request->dob;
        $add_adimission->placeofbirth = $request->placeofbirth;
        $add_adimission->monthofentry = $request->monthofentry;
        $add_adimission->gender = $request->gender;
        $add_adimission->section = $request->section;
        $add_adimission->religion = $request->religion;
        $add_adimission->state = $request->state;
        $add_adimission->entrylevel = $request->entrylevel;
        $add_adimission->classname = $request->classname;
        $add_adimission->password = \Hash::make($request->password);
        $add_adimission->ref_no = substr(rand(0,time()),0, 9);

        $add_adimission->save();
        return redirect()->route('secondregistration', ['ref_no' =>$add_adimission->ref_no]); 

    }

    public function secondregistration($ref_no){
        $addsec_registration = User::where('ref_no', $ref_no)->first();
        return view('pages.secondregistration', compact('addsec_registration'));
    }
    public function thirdregistration($ref_no){
        $addthird_registration = User::where('ref_no', $ref_no)->first();
        return view('pages.thirdregistration', compact('addthird_registration'));
    }

    


    public function addsecondadmmin(Request $request, $ref_no){
        $addsec_admission = User::where('ref_no', $ref_no)->first();

        $request->validate([
            'fathersurname' => ['required', 'string'],
            'fathername' => ['required', 'string'],
            'fathermiddlename' => ['required', 'string'],
            'title' => ['required', 'string'],
            'fatherphone' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'fatheremployer' => ['required', 'string'],
            'fatheremail' => ['required', 'string'],
            'fatheraddress' => ['required', 'string'],
            'mothersurname' => ['required', 'string'],
            'mothername' => ['required', 'string'],
            'mothermiddlename' => ['required', 'string'],
            'mothertitle' => ['required', 'string'],
            'motherphone' => ['required', 'string'],
            'mothernationality' => ['required', 'string'],
            'motheremployer' => ['required', 'string'],
            'motheremail' => ['required', 'string'],
            'motheraddress' => ['required', 'string'],
            
        ]);
      

        $addsec_admission->fathersurname = $request->fathersurname;
        $addsec_admission->fathername = $request->fathername;
        $addsec_admission->fathermiddlename = $request->fathermiddlename;
        $addsec_admission->title = $request->title;
        $addsec_admission->fatherphone = $request->fatherphone;
        $addsec_admission->nationality = $request->nationality;
        $addsec_admission->fatheremployer = $request->fatheremployer;
        $addsec_admission->fatheremail = $request->fatheremail;
        $addsec_admission->fatheraddress = $request->fatheraddress;
        $addsec_admission->mothersurname = $request->mothersurname;
        $addsec_admission->mothername = $request->mothername;
        $addsec_admission->mothermiddlename = $request->mothermiddlename;
        $addsec_admission->mothertitle = $request->mothertitle;
        $addsec_admission->motherphone = $request->motherphone;
        $addsec_admission->mothernationality = $request->mothernationality;
        $addsec_admission->motheremployer = $request->motheremployer;
        $addsec_admission->motheremail = $request->motheremail;
        $addsec_admission->motheraddress = $request->motheraddress;
        $addsec_admission->update();

        return redirect()->route('thirdregistration', ['ref_no' =>$addsec_admission->ref_no]); 

    }


    public function updateaddthirdondadmmin(Request $request, $ref_no){
        $addthid_admission = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'lastschool' => ['required', 'string'],
            'landmark' => ['required', 'string'],
            'relationship' => ['required', 'string'],
            'brixtonsiblings' => ['required', 'string'],
            'schooladdress' => ['required', 'string'],
            'aboutus' => ['required', 'string'],
            'birthcert' => 'nullable|mimes:jpg,png,jpeg',
          
            
        ]);
        if ($request->hasFile('birthcert')){

            $file = $request['birthcert'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('birthcert')->storeAs('resourceimages', $filename);
        }
        $addthid_admission['birthcert'] = $path;
        $addthid_admission->lastschool = $request->lastschool;
        $addthid_admission->aboutus = $request->aboutus;
        $addthid_admission->schooladdress = $request->schooladdress;
        $addthid_admission->brixtonsiblings = $request->brixtonsiblings;
        $addthid_admission->landmark = $request->landmark;
        $addthid_admission->lastschool = $request->lastschool;
        $addthid_admission->relationship = $request->relationship;
        
        
        $addthid_admission->update();

        return redirect()->route('medicalreports', ['ref_no' =>$addthid_admission->ref_no]); 

    }

  
    public function medicalreports($ref_no){
        $addthid_admission = User::where('ref_no', $ref_no)->first();
        return view('pages.medicalreports', compact('addthid_admission'));
    }
    
    public function addmedicalsdadmmin(Request $request, $ref_no){
        $addthid_admission = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'genotype1' => ['nullable', 'string'],
            'genotype2' => ['nullable', 'string'],
            'asthmatic1' => ['nullable', 'string'],
            'asthmatic2' => ['nullable', 'string'],
            'symtoms1' => ['nullable', 'string'],
            'symtoms2' => ['nullable', 'string'],
            'symtoms3' => ['nullable', 'string'],
            'symtoms4' => ['nullable', 'string'],
            'medicalcondition1' => ['nullable', 'string'],
            'medicalcondition2' => ['nullable', 'string'],
            'diagnose1' => ['nullable', 'string'],
            'diagnose2' => ['nullable', 'string'],
            'diagnose3' => ['nullable', 'string'],
            'schoolclinic1' => ['nullable', 'string'],
            'schoolclinic2' => ['nullable', 'string'],
            'smallpox1' => ['nullable', 'string'],
            'smallpox2' => ['nullable', 'string'],
            'chickenpox1' => ['nullable', 'string'],
            'chickenpox2' => ['nullable', 'string'],
            'polio1' => ['nullable', 'string'],
            'polio2' => ['nullable', 'string'],
            'tetanus1' => ['nullable', 'string'],
            'tetanus2' => ['nullable', 'string'],
            'tuber1' => ['nullable', 'string'],
            'tuber1' => ['nullable', 'string'],
            'tuber2' => ['nullable', 'string'],
            'mumps1' => ['nullable', 'string'],
            'mumps2' => ['nullable', 'string'],
            'rebelia1' => ['nullable', 'string'],
            'rebelia2' => ['nullable', 'string'],
            'hepatitis1' => ['nullable', 'string'],
            'hepatitis2' => ['nullable', 'string'],
            'meningitis1' => ['nullable', 'string'],
            'meningitis2' => ['nullable', 'string'],
            'whoopingcough1' => ['nullable', 'string'],
            'whoopingcough2' => ['nullable', 'string'],
            'Diphtheria1' => ['nullable', 'string'],
            'Diphtheria2' => ['nullable', 'string'],
            'doctorname' => ['nullable', 'string'],
            'doctoraddress' => ['nullable', 'string'],
            'doctorphone' => ['nullable', 'string'],
            'immune' => 'nullable|mimes:jpg,png,jpeg',
        ]);
        if ($request->hasFile('immune')){

            $file = $request['immune'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('immune')->storeAs('resourceimages', $filename);
        }else{

            $path = 'noimage.jpg';
        }
        $addthid_admission['immune'] = $path;
        $addthid_admission->genotype1 = $request->genotype1;
        $addthid_admission->genotype2 = $request->genotype2;
        $addthid_admission->asthmatic1 = $request->asthmatic1;
        $addthid_admission->asthmatic2 = $request->asthmatic2;
        $addthid_admission->symtoms1 = $request->symtoms1;
        $addthid_admission->symtoms2 = $request->symtoms2;
        $addthid_admission->symtoms3 = $request->symtoms3;
        $addthid_admission->symtoms4 = $request->symtoms4;

        $addthid_admission->medicalcondition1 = $request->medicalcondition1;
        $addthid_admission->medicalcondition2 = $request->medicalcondition2;
        $addthid_admission->diagnose1 = $request->diagnose1;
        $addthid_admission->diagnose2 = $request->diagnose2;
        $addthid_admission->diagnose3 = $request->diagnose3;

        $addthid_admission->schoolclinic1 = $request->schoolclinic1;
        $addthid_admission->schoolclinic2 = $request->schoolclinic2;
        $addthid_admission->smallpox1 = $request->smallpox1;
        $addthid_admission->smallpox2 = $request->smallpox2;
        $addthid_admission->chickenpox1 = $request->chickenpox1;
        $addthid_admission->chickenpox2 = $request->chickenpox2;

        $addthid_admission->polio1 = $request->polio1;
        $addthid_admission->polio2 = $request->polio2;
        $addthid_admission->tetanus1 = $request->tetanus1;
        $addthid_admission->tetanus2 = $request->tetanus2;

        $addthid_admission->tuber1 = $request->tuber1;
        $addthid_admission->tuber2 = $request->tuber2;
        $addthid_admission->mumps1 = $request->mumps1;
        $addthid_admission->mumps2 = $request->mumps2;

        $addthid_admission->rebelia1 = $request->rebelia1;
        $addthid_admission->rebelia2 = $request->rebelia2;

        $addthid_admission->hepatitis1 = $request->hepatitis1;
        $addthid_admission->hepatitis2 = $request->hepatitis2;

        $addthid_admission->meningitis1 = $request->meningitis1;
        $addthid_admission->meningitis2 = $request->meningitis2;
        $addthid_admission->whoopingcough1 = $request->whoopingcough1;
        $addthid_admission->whoopingcough2 = $request->whoopingcough2;
        
        $addthid_admission->diphtheria1 = $request->diphtheria1;
        $addthid_admission->diphtheria2 = $request->diphtheria2;

        $addthid_admission->doctorname = $request->doctorname;
        $addthid_admission->doctoraddress = $request->doctoraddress;
        $addthid_admission->doctorphone = $request->doctorphone;
        
        $addthid_admission->update();

        return redirect()->route('printadmissionform', ['ref_no' =>$addthid_admission->ref_no]); 
    }

    public function printadmissionform($ref_no){
        $print_admissionform = User::where('ref_no', $ref_no)->first();
        return view('pages.printadmissionform', compact('print_admissionform'));
    }

   public function adminprogress(){
        $admin_progress = User::latest()->get();
    return view('dashboard.admin.adminprogress', compact('admin_progress'));
   }

   public function viewstudents($ref_no){
    $view_students = User::where('ref_no', $ref_no)->first();
    return view('dashboard.admin.viewstudents', compact('view_students'));
    }
    public function editstudent($ref_no){
        $edit_students = User::where('ref_no', $ref_no)->first();
        $add_class = Classname::all();
        return view('dashboard.admin.editstudent', compact('add_class', 'edit_students'));
    }

    public function updateadmission(Request $request, $ref_no){
        $edit_students = User::where('ref_no', $ref_no)->first();
       
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'centername' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'middlename' => ['required', 'string'],
            'monthofentry' => ['required', 'string'],
            'centername' => ['required', 'string'],
            'placeofbirth' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'section' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'state' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'entrylevel' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        

        $edit_students['images'] = $path;
        $edit_students->surname = $request->surname;
        $edit_students->centername = $request->centername;
        $edit_students->fname = $request->fname;
        $edit_students->middlename = $request->middlename;
        $edit_students->email = $request->email;
        $edit_students->phone = $request->phone;
        $edit_students->dob = $request->dob;
        $edit_students->placeofbirth = $request->placeofbirth;
        $edit_students->monthofentry = $request->monthofentry;
        $edit_students->gender = $request->gender;
        $edit_students->section = $request->section;
        $edit_students->religion = $request->religion;
        $edit_students->state = $request->state;
        $edit_students->entrylevel = $request->entrylevel;
        $edit_students->classname = $request->classname;

        $edit_students->update();
        return redirect()->route('secondregistration', ['ref_no' =>$edit_students->ref_no]); 

    }
    public function rejectstudent($ref_no){
        $reject_student = User::where('ref_no', $ref_no)->first();
        $reject_student->status = 'reject';
        $reject_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
    public function rejectedstudent(){
        $reject_students = User::where('status', 'reject')->get();
        return view('dashboard.admin.rejectedstudent', compact('reject_students'));
    }
    public function suspendstudent($ref_no){
        $suspend_student = User::where('ref_no', $ref_no)->first();
        $suspend_student->status = 'suspend';
        $suspend_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
    public function suspendstudents(){
        $suspend_students = User::where('status', 'suspend')->get();
        return view('dashboard.admin.suspendstudents', compact('suspend_students'));
    }

    public function studentsaddmit($ref_no){
        $admit_student = User::where('ref_no', $ref_no)->first();
        $admit_student->status = 'admitted';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
    public function admittedstudents(){
        $admit_students = User::where('status', 'admitted')->get();
        return view('dashboard.admin.admittedstudents', compact('admit_students'));
    }
    public function addregno($id){
        $student_regno = User::where('id', $id)->first();
        return view('dashboard.admin.addregno', compact('student_regno'));
    }

    public function addingregno(Request $request, $id){
        $student_regno = User::where('id', $id)->first();
        $request->validate([
            'regnumber' => ['required', 'string', 'max:255'],
        ]);
       
        $student_regno->regnumber = $request->regnumber;
        $student_regno->update();
        if ($student_regno) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }
    public function studentpdf($ref_no){
        $print_students = User::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.studentpdf', compact('print_students'));
    }

    public function medicalspdf($ref_no){
        $printmedi_students = User::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.medicalspdf', compact('printmedi_students'));
    }
    public function allstudents(){
        $all_students = User::latest()->get();
        return view('dashboard.admin.allstudents', compact('all_students'));
    }
    public function allstudentpdf(){
        $printall_students = User::latest()->get();
        return view('dashboard.admin.allstudentpdf', compact('printall_students'));
    }

    public function allcrechepdf(){
        $printallcreche_students = User::where('section', 'Creche')->latest()->get();
        return view('dashboard.admin.allcrechepdf', compact('printallcreche_students'));
    }

    public function allnurserypdf(){
        $printallnursery_students = User::where('section', 'Nursery')->latest()->get();
        return view('dashboard.admin.allnurserypdf', compact('printallnursery_students'));
    }
    public function allprimarypdf(){
        $printallPrimary_students = User::where('section', 'Primary')->latest()->get();
        return view('dashboard.admin.allprimarypdf', compact('printallPrimary_students'));
    }

    public function allhighschpdf(){
        $printallhigh_students = User::where('section', 'High School')->latest()->get();
        return view('dashboard.admin.allhighschpdf', compact('printallhigh_students'));
    }

    public function viewalluyo(){
        $viewalluyo_students = User::where('centername', 'Uyo')->latest()->get();
        return view('dashboard.admin.viewalluyo', compact('viewalluyo_students'));
    }

    public function alluyocrechepdf(){
        $printalluyo_creches = User::where('centername', 'Uyo')
        ->where('section', 'Creche')->latest()->get();
        return view('dashboard.admin.alluyocrechepdf', compact('printalluyo_creches'));
    }

    public function alluyopreperatorypdf(){
        $printalluyo_preparatories = User::where('section', 'Preparatory')
        ->where('centername', 'Uyo')
        ->latest()->get();
        return view('dashboard.admin.alluyopreperatorypdf', compact('printalluyo_preparatories'));
    }

    public function allpreschoolpdf(){
        $printalluyo_preschools = User::where('centername', 'Uyo')
        ->where('section', 'Pre-School')->latest()->get();
        return view('dashboard.admin.allpreschoolpdf', compact('printalluyo_preschools'));
    }
    public function alluyonurserypdf(){
        $printalluyo_nurserys = User::where('centername', 'Uyo')
        ->where('section', 'Nursery')->latest()->get();
        return view('dashboard.admin.alluyonurserypdf', compact('printalluyo_nurserys'));
    }
    public function alluyoprimarypdf(){
        $printalluyo_primaries = User::where('centername', 'Uyo')
        ->where('section', 'Primary')->latest()->get();
        return view('dashboard.admin.alluyoprimarypdf', compact('printalluyo_primaries'));
    }

    public function alluyohighschpdf(){
        $printalluyo_highschools = User::where('centername', 'Uyo')
        ->where('section', 'High School')->latest()->get();
        return view('dashboard.admin.alluyohighschpdf', compact('printalluyo_highschools'));
    }

    public function alluyocentpdf(){
        $printall_uyocenters = User::where('centername', 'Uyo')->latest()->get();
        return view('dashboard.admin.alluyocentpdf', compact('printall_uyocenters'));
    }
    public function allabujapdf(){
        $printall_abujacenters = User::where('centername', 'Abuja')->latest()->get();
        return view('dashboard.admin.allabujapdf', compact('printall_abujacenters'));
    }
    
    public function viewpreparatory(){
        $display_uyopreparatorys = User::where('centername', 'Uyo')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.viewpreparatory', compact('display_uyopreparatorys'));
    }
    public function viewpreschool(){
        $display_uyopreschools = User::where('centername', 'Uyo')
        ->where('section', 'Pre-School')
        ->latest()->get();
        return view('dashboard.admin.viewpreschool', compact('display_uyopreschools'));
    }
    public function viewnursery(){
        $display_uyonurserys = User::where('centername', 'Uyo')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.viewnursery', compact('display_uyonurserys'));
    }

    public function viewprimary(){
        $display_uyoprimarys = User::where('centername', 'Uyo')
        ->where('section', 'Primary')
        ->latest()->get();
        return view('dashboard.admin.viewprimary', compact('display_uyoprimarys'));
    }
    public function viewhighschool(){
        $display_uyohighschools = User::where('centername', 'Uyo')
        ->where('section', 'High School')
        ->latest()->get();
        return view('dashboard.admin.viewhighschool', compact('display_uyohighschools'));
    }

    public function viewallabuja(){
        $display_abujas = User::where('centername', 'Abuja')
        ->latest()->get();
        return view('dashboard.admin.viewallabuja', compact('display_abujas'));
    }

    public function allabujacrechepdf(){
        $display_abujacrechs = User::where('centername', 'Abuja')
        ->where('section', 'Creche')
        ->latest()->get();
        return view('dashboard.admin.allabujacrechepdf', compact('display_abujacrechs'));
    }

    public function allabujapreperatorypdf(){
        $print_allabujapreparatorys = User::where('centername', 'Abuja')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.allabujapreperatorypdf', compact('print_allabujapreparatorys'));
    }
    
    public function allabujapreschoolpdf(){
        $print_allabjpreschools = User::where('centername', 'Abuja')
        ->where('section', 'Pre-School')
        ->latest()->get();
        return view('dashboard.admin.allabujapreschoolpdf', compact('print_allabjpreschools'));
    }

    public function allabujanurserypdf(){
        $print_allabjnurserys = User::where('centername', 'Abuja')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.allabujanurserypdf', compact('print_allabjnurserys'));
    }

    public function allabujaprimarypdf(){
        $print_allabjprimarys = User::where('centername', 'Abuja')
        ->where('section', 'Primary')
        ->latest()->get();
        return view('dashboard.admin.allabujaprimarypdf', compact('print_allabjprimarys'));
    }
    public function allabujahighschpdf(){
        $print_allabjhighschools = User::where('centername', 'Abuja')
        ->where('section', 'Primary')
        ->latest()->get();
        return view('dashboard.admin.allabujahighschpdf', compact('print_allabjhighschools'));
    }

    public function viewabujapreparatory(){
        $view_abjpreparatorys = User::where('centername', 'Abuja')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.viewabujapreparatory', compact('view_abjpreparatorys'));
    }

    public function abujapreschool(){
        $view_abjpreschools = User::where('centername', 'Abuja')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.abujapreschool', compact('view_abjpreschools'));
    }
    public function viewabujanursery(){
        $view_abjnurserys = User::where('centername', 'Abuja')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.viewabujanursery', compact('view_abjnurserys'));
    }

    public function viewabujaprimary(){
        $view_abjprimarys = User::where('centername', 'Abuja')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.viewabujaprimary', compact('view_abjprimarys'));
    }

    
    public function viewabjhighschool(){
        $view_abjhighschools = User::where('centername', 'Abuja')
        ->where('section', 'High School')
        ->latest()->get();
        return view('dashboard.admin.viewabjhighschool', compact('view_abjhighschools'));
    }
    
    public function checkfirst (Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users'],
            'password' => ['required', 'string', 'min:8']
        ], [
            'email.exist'=>'This email does not exist in the admins table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            return redirect()->route('web.home')->with('success', 'You have successfully login');
        }else{
            return redirect()->route('login')->with('error', 'Failed to login');
        }

    }

    public function home(){

        return view('dashboard.home');
    }

    public function profile($ref_no){
        $view_profile = User::where('ref_no', $ref_no)->first();
        return view('dashboard.profile', compact('view_profile'));
    }

    public function admisionletter(){

        return view('dashboard.admisionletter');
    }

    public function registerteacher(){
       $dsplay_studycenters = Studycenter::all();
       $dsplay_classes = Classname::all();
        return view('dashboard.registerteacher', compact('dsplay_studycenters', 'dsplay_classes'));
    }

    public function createteacher (Request $request){
       
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'middlename' => ['required', 'string'],
            'centername' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'password' => ['required', 'string'],
            'images' => 'required|mimes:jpg,png,jpeg'
        ]);
//    dd($request->all());
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }

        $addteachers = new User();
        $addteachers['images'] = $path;
        $addteachers->surname = $request->surname;
        $addteachers->centername = $request->centername;
        $addteachers->fname = $request->fname;
        $addteachers->middlename = $request->middlename;
        $addteachers->email = $request->email;
        $addteachers->phone = $request->phone;
        $addteachers->role = 'teacher';
        $addteachers->classname = $request->classname;
        $addteachers->password = \Hash::make($request->password);
        $addteachers->ref_no = substr(rand(0,time()),0, 9);

        $addteachers->save();
        if ($addteachers) {
            return redirect()->route('web.home')->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }
   
    public function printclasses(Request $request){
        $request->validate([
            'classname' => ['required', 'string'],
            'centername' => ['required', 'string'],
        ]);
        if($getyour_classes = user::where('classname', $request->classname)
        ->where('centername', $request->centername)
        ->exists()) {
            $getyour_classes = User::orderby('created_at', 'DESC')
            ->where('centername', $request->centername)
            ->where('classname', $request->classname)
       
            ->get(); 
            }else{
                return redirect()->back()->with('fail', 'There is no students in these class!');
            }
            return view('dashboard.admin.printregclass', compact('getyour_classes'));

        }
    

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }


    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    

    
    
    
    
     

    
    
     
    
    
    
    
    
   
    
    
}
