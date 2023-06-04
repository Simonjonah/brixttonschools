<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/team', function () {
    return view('pages.team');
});

Route::get('/clubs', function () {
    return view('pages.clubs');
});
Route::get('/clubform', function () {
    return view('pages.clubform');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/nurseryform', function () {
    return view('pages.nurseryform');
});
Route::get('/academics', function () {
    return view('pages.academics');
});

Route::get('/blog', function () {
    return view('pages.blog');
});


Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/gallery', function () {
    return view('pages.gallery');
});
Route::get('/facilities', function () {
    return view('pages.facilities');
});


Route::prefix('admin')->name('admin.')->group(function() {

    Route::middleware(['guest:admin'])->group(function() {

        Route::view('/login', 'dashboard.admin.login')->name('login');
        Route::view('/register','dashboard.admin.register')->name('register');
        Route::post('/create', [AdminController::class, 'create'])->name('create');
        Route::post('/check', [AdminController::class, 'check'])->name('check');

    });
    
    Route::middleware(['auth:admin'])->group(function() {
        Route::get('/addrole', [AdminController::class, 'addrole'])->name('addrole');
        Route::get('/addcources', [CourseController::class, 'addcources'])->name('addcources');
        Route::get('/addnidnetcoursesl1stsem', [RegistercourseController::class, 'addnidnetcoursesl1stsem'])->name('addnidnetcoursesl1stsem');
        Route::get('/viewnetworkcourses', [RegistercourseController::class, 'viewnetworkcourses'])->name('viewnetworkcourses');
        Route::get('/print1stinglepaymentspdf/{id}', [StudentController::class, 'print1stinglepaymentspdf'])->name('print1stinglepaymentspdf');
        Route::get('/viewallpaymentfirst', [StudentController::class, 'viewallpaymentfirst'])->name('viewallpaymentfirst');
        Route::get('/print1stinglepaymentspdfgf', [StudentController::class, 'print1stinglepaymentspdfgf'])->name('print1stinglepaymentspdfgf');
        Route::get('/nidhardwarelevel200course', [RegistercourseController::class, 'nidhardwarelevel200course'])->name('nidhardwarelevel200course');
        Route::get('/addnidhardcourses200', [RegistercourseController::class, 'addnidhardcourses200'])->name('addnidhardcourses200');
        Route::get('/addnidmanagecourses100', [RegistercourseController::class, 'addnidmanagecourses100'])->name('addnidmanagecourses100');
        Route::get('/viewnidmanagecourses', [RegistercourseController::class, 'viewnidmanagecourses'])->name('viewnidmanagecourses');
        Route::get('/addnidmanagecourses200', [RegistercourseController::class, 'addnidmanagecourses200'])->name('addnidmanagecourses200');
        Route::get('/nidmanagelevel200course', [RegistercourseController::class, 'nidmanagelevel200course'])->name('nidmanagelevel200course');
        
        Route::get('/addnidsoft2ndsem', [RegistercourseController::class, 'addnidsoft2ndsem'])->name('addnidsoft2ndsem');
        Route::get('/addnidsoftcourses2l', [RegistercourseController::class, 'addnidsoftcourses2l'])->name('addnidsoftcourses2l');
        Route::get('/addnidschoolfees', [AddnidfeeController::class, 'addnidschoolfees'])->name('addnidschoolfees');
        Route::post('/addfeesfornid', [AddnidfeeController::class, 'addfeesfornid'])->name('addfeesfornid');
        Route::get('/nidschfees', [AddnidfeeController::class, 'nidschfees'])->name('nidschfees');
        
        Route::post('/createcourse', [CourseController::class, 'createcourse'])->name('createcourse');
        Route::post('/createtestimony', [TestimonyController::class, 'createtestimony'])->name('createtestimony');
        Route::get('/addtestimony', [TestimonyController::class, 'addtestimony'])->name('addtestimony');
        Route::get('/viewtestimony', [TestimonyController::class, 'viewtestimony'])->name('viewtestimony');
        Route::get('/testimonyview/{id}', [TestimonyController::class, 'testimonyview'])->name('testimonyview');
        Route::get('/testimonyedit/{id}', [TestimonyController::class, 'testimonyedit'])->name('testimonyedit');
        Route::put('/updatetestimony/{id}', [TestimonyController::class, 'updatetestimony'])->name('updatetestimony');
        Route::get('/testimonyeapproved/{id}', [TestimonyController::class, 'testimonyeapproved'])->name('testimonyeapproved');
        Route::get('/testimonyesuspend/{id}', [TestimonyController::class, 'testimonyesuspend'])->name('testimonyesuspend');
        Route::get('/testimonyedelete/{id}', [TestimonyController::class, 'testimonyedelete'])->name('testimonyedelete');
        Route::get('/addevent', [EventController::class, 'addevent'])->name('addevent');
        Route::post('/createteevent', [EventController::class, 'createteevent'])->name('createteevent');
        Route::get('/viewevents', [EventController::class, 'viewevents'])->name('viewevents');
        Route::get('/eventeapproved/{slug}', [EventController::class, 'eventeapproved'])->name('eventeapproved');
        Route::get('/eventesuspend/{slug}', [EventController::class, 'eventesuspend'])->name('eventesuspend');
        Route::get('/professionals', [CourseController::class, 'professionals'])->name('professionals');
        Route::get('/addcource', [CourseController::class, 'addcource'])->name('addcource');
        Route::get('/addnidcourses', [RegistercourseController::class, 'addnidcourses'])->name('addnidcourses');
        Route::get('/viewnidcources', [RegistercourseController::class, 'viewnidcources'])->name('viewnidcources');
        Route::get('/addnidsoftcourses', [RegistercourseController::class, 'addnidsoftcourses'])->name('addnidsoftcourses');
        Route::get('/nidsoftlevel200courses', [RegistercourseController::class, 'nidsoftlevel200courses'])->name('nidsoftlevel200courses');
        Route::get('/addnidsoft2ndsemleve200', [RegistercourseController::class, 'addnidsoft2ndsemleve200'])->name('addnidsoft2ndsemleve200');
        
        Route::get('/nsq', [CourseController::class, 'nsq'])->name('nsq');
        Route::get('/addnid', [CourseController::class, 'addnid'])->name('addnid');
        Route::get('/imficca', [CourseController::class, 'imficca'])->name('imficca');
        Route::get('/nidnetworklevel200course', [RegistercourseController::class, 'nidnetworklevel200course'])->name('nidnetworklevel200course');
        Route::get('/addnidnet2ndsem1leve200', [RegistercourseController::class, 'addnidnet2ndsem1leve200'])->name('addnidnet2ndsem1leve200');
        Route::get('/addnidnetsem2leve200l', [RegistercourseController::class, 'addnidnetsem2leve200l'])->name('addnidnetsem2leve200l');
        Route::get('/addnidhardcourses100', [RegistercourseController::class, 'addnidhardcourses100'])->name('addnidhardcourses100');
        Route::get('/viewardwarecourses', [RegistercourseController::class, 'viewardwarecourses'])->name('viewardwarecourses');
        
        Route::post('/creatprofessional', [ProfessionalController::class, 'creatprofessional'])->name('creatprofessional');
        Route::get('/viewprofessional', [ProfessionalController::class, 'viewprofessional'])->name('viewprofessional');
        Route::get('/courseviewprof/{slug}', [ProfessionalController::class, 'courseviewprof'])->name('courseviewprof');
        Route::get('/programedit/{slug}', [ProfessionalController::class, 'programedit'])->name('programedit');
        Route::put('/updateprofprograms/{slug}', [ProfessionalController::class, 'updateprofprograms'])->name('updateprofprograms');
        Route::get('/profpromapproved/{slug}', [ProfessionalController::class, 'profpromapproved']);
        Route::get('/profpromsuspend/{slug}', [ProfessionalController::class, 'profpromsuspend']);
        Route::get('/downloadprofprom', [ProfessionalController::class, 'downloadprofprom'])->name('downloadprofprom');
        Route::get('/profpromdelete/{slug}', [ProfessionalController::class, 'profpromdelete']);
        
        Route::view('/home','dashboard.admin.home')->name('home');
        
        Route::get('/addnidsoft2ndsem1leve100', [RegistercourseController::class, 'addnidsoft2ndsem1leve100'])->name('addnidsoft2ndsem1leve100');
        Route::post('/createsinglecourse', [RegistercourseController::class, 'createsinglecourse'])->name('createsinglecourse');
        Route::get('/home', [AdminController::class, 'home'])->name('home');
        Route::get('/coursesuspend/{slug}', [CourseController::class, 'coursesuspend']);
        Route::get('/courseapproved/{slug}', [CourseController::class, 'courseapproved']);
        Route::get('/addmt1courses', [RegistercourseController::class, 'addmt1courses'])->name('addmt1courses');
        Route::get('/viewmtcourses', [RegistercourseController::class, 'viewmtcourses'])->name('viewmtcourses');
        Route::get('/editprogramcoursemt/{id}', [RegistercourseController::class, 'editprogramcoursemt'])->name('editprogramcoursemt');
        Route::put('/updatecourse/{id}', [CourseController::class, 'updatecourse'])->name('updatecourse');
        Route::get('/viewcourses',[CourseController::class, 'viewcourses'])->name('viewcourses');
        Route::get('/courseview/{slug}', [CourseController::class, 'courseview'])->name('courseview');
        Route::get('/coursedit/{slug}', [CourseController::class, 'coursedit'])->name('coursedit');
        Route::get('/coursedelete/{slug}', [CourseController::class, 'coursedelete'])->name('coursedelete');
        Route::get('viewsfees/{ref_no}', [StudentController::class, 'viewsfees'])->name('viewsfees');
        Route::get('/addregno/{id}', [StudentController::class, 'addregno'])->name('addregno');
        Route::put('/addingregno/{id}', [StudentController::class, 'addingregno'])->name('addingregno');
        Route::get('/viewallpayment', [ProgramregistrationController::class, 'viewallpayment'])->name('viewallpayment');
        Route::get('/viewsinglepayment/{id}', [ProgramregistrationController::class, 'viewsinglepayment'])->name('viewsinglepayment');
        Route::get('/confirmpayment/{id}', [ProgramregistrationController::class, 'confirmpayment']);
        Route::get('/printpdf', [ProgramregistrationController::class, 'printpdf'])->name('printpdf');
        Route::get('/deletepayment/{slug}', [ProgramregistrationController::class, 'deletepayment'])->name('deletepayment');
        Route::get('/printsinglepaymentspdf/{slug}', [ProgramregistrationController::class, 'printsinglepaymentspdf'])->name('printsinglepaymentspdf');
        Route::get('adminprogress', [StudentController::class, 'adminprogress'])->name('adminprogress');
        Route::get('/editstudent/{id}', [StudentController::class, 'editstudent'])->name('editstudent');
        Route::get('/studentit/{ref_no}', [StudentController::class, 'studentit'])->name('studentit');
        Route::get('/viewstudents/{surname}', [StudentController::class, 'viewstudents'])->name('viewstudents');
        Route::get('rejectedstudent', [StudentController::class, 'rejectedstudent'])->name('rejectedstudent');
        Route::get('studentsapprove/{surname}', [StudentController::class, 'studentsapprove'])->name('studentsapprove');
        Route::get('suspendstudent/{surname}', [StudentController::class, 'suspendstudent'])->name('suspendstudent');
        Route::get('suspendstudents', [StudentController::class, 'suspendstudents'])->name('suspendstudents');
        
        Route::get('studentsaddmit/{ref_no}', [StudentController::class, 'studentsaddmit'])->name('studentsaddmit');
        Route::get('/certregcourses',[RegistercoursebystudentController::class, 'certregcourses'])->name('certregcourses');
        Route::get('/view/{id}',[RegistercoursebystudentController::class, 'view'])->name('view');
        Route::get('/deleteprogcoursetud/{id}', [RegistercoursebystudentController::class, 'deleteprogcoursetud'])->name('deleteprogcoursetud');
        
        Route::get('admittedstudents', [StudentController::class, 'admittedstudents'])->name('admittedstudents');
        Route::get('allstudents', [StudentController::class, 'allstudents'])->name('allstudents');
        Route::get('deletestudent/{surname}', [StudentController::class, 'deletestudent'])->name('deletestudent');
        Route::get('approvedstudents', [StudentController::class, 'approvedstudents'])->name('approvedstudents');

        Route::get('/rejectstudent/{username}', [StudentController::class, 'rejectstudent'])->name('rejectstudent');
        Route::get('/contactdelete/{id}', [ContactController::class, 'contactdelete'])->name('contactdelete');

        Route::get('/legalcontact', [VisitController::class, 'legalcontact'])->name('legalcontact');
        Route::get('/editprogramcourse/{id}', [RegistercourseController::class, 'editprogramcourse'])->name('editprogramcourse');
        Route::get('certindataprocescourse', [RegistercourseController::class, 'certindataprocescourse'])->name('certindataprocescourse');
        Route::get('/printcoursestudentd1', [RegistercourseController::class, 'printcoursestudentd1'])->name('printcoursestudentd1');
        Route::get('/certregcourssd1', [RegistercoursebystudentController::class, 'certregcourssd1'])->name('certregcourssd1');

        Route::get('/editprogramcoursed1/{id}', [RegistercourseController::class, 'editprogramcoursed1'])->name('editprogramcoursed1');

        Route::get('/deleteprogramcourse/{id}', [RegistercourseController::class, 'deleteprogramcourse'])->name('deleteprogramcourse');
        Route::get('/printcoursestudent/{id}',[RegistercourseController::class, 'printcoursestudent'])->name('printcoursestudent');
       
        Route::get('/viewcertindataprocescourse', [RegistercourseController::class, 'viewcertindataprocescourse'])->name('viewcertindataprocescourse');
        Route::put('/updatecreatesinglecourse/{id}', [RegistercourseController::class, 'updatecreatesinglecourse'])->name('updatecreatesinglecourse');
        Route::get('/downloadcourses', [CourseController::class, 'downloadcourses'])->name('downloadcourses');
        
        Route::get('/editprogramcoursestu/{id}', [RegistercoursebystudentController::class, 'editprogramcoursestu'])->name('editprogramcoursestu');

        Route::get('/downloadcourse/{slug}', [CourseController::class, 'downloadcourse'])->name('downloadcourse');
        
        Route::post('/registerforresults',[ResultdataprocessingController::class, 'registerforresults'])->name('registerforresults');
        
        Route::get('/viewlecturers', [LecturerController::class, 'viewlecturers'])->name('viewlecturers');
        Route::get('/lecturerapprove/{ref_no}', [LecturerController::class, 'lecturerapprove'])->name('lecturerapprove');
        Route::get('/lecturersuspend/{ref_no}', [LecturerController::class, 'lecturersuspend'])->name('lecturersuspend');
        Route::get('/approvelecturers', [LecturerController::class, 'approvelecturers'])->name('approvelecturers');
        
        Route::get('/lecturerdelete/{ref_no}', [LecturerController::class, 'lecturerdelete'])->name('lecturerdelete');

        Route::get('/suspendedlecturers', [LecturerController::class, 'suspendedlecturers'])->name('suspendedlecturers');
        Route::get('/viewsinglelecturer/{ref_no}', [LecturerController::class, 'viewsinglelecturer'])->name('viewsinglelecturer');
        Route::get('/editlecturer/{ref_no}', [LecturerController::class, 'editlecturer'])->name('editlecturer');
        Route::get('/lecturersprint/{ref_no}', [LecturerController::class, 'lecturersprint'])->name('lecturersprint');
        Route::put('/lecturerupdated/{ref_no}', [LecturerController::class, 'lecturerupdated'])->name('lecturerupdated');
        Route::get('/lecturers', [LecturerController::class, 'lecturers'])->name('lecturers');
        Route::get('/add1courses', [RegistercourseController::class, 'add1courses'])->name('add1courses');
        Route::put('/settingsupdate/{id}', [AdminController::class, 'settingsupdate'])->name('settingsupdate');
        
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::get('/resultforcertindata', [ResultdataprocessingController::class, 'resultforcertindata'])->name('resultforcertindata');
        
        Route::get('/viewresultd1/{id}', [ResultdataprocessingController::class, 'viewresultd1'])->name('viewresultd1');
        Route::get('/viewresults/{id}', [ResultdataprocessingController::class, 'viewresults'])->name('viewresults');
        Route::get('/printsingleresults/{id}', [ResultdataprocessingController::class, 'printsingleresults'])->name('printsingleresults');
        Route::get('/viewd1courses', [RegistercourseController::class, 'viewd1courses'])->name('viewd1courses');
        
        Route::get('/resultford1', [ResultdataprocessingController::class, 'resultford1'])->name('resultford1');

        Route::get('/logout', [AdminController::class, 'logout'])->name('logout'); 
        
       
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
