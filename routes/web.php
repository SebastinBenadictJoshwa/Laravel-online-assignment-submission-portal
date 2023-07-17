<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\assignment;
use App\Models\assign;

Route::get('/', function () {
    return view('index');
});

Route::get('adminlogin', function(){
    return view('AdminLogin');
});

Route::post('adminlog',[assignment::class,'adminlogin']);

Route::get('adminhome', function(){
    return view('AdminHome');
});

Route::get('adminstudentinfo',[assignment::class,'adminstudentinfo']);

Route::post('addstudent', [assignment::class,'addstudent']);

Route::get('adminassign',function(){
    return view('AdminAssign');
});

Route::post('newassign',[assignment::class,'newassign']);

Route::get('adminassigninfo',[assignment::class,'adminassigninfo']);

Route::get('download/{id}',[assignment::class,'download']);

Route::get('delete/{id}',[assignment::class,'delete']);

Route::get('editor/{id}',[assignment::class,'editor']);

Route::post('edit',[assignment::class,'edit']);

Route::get('deleteassignment',[assignment::class,'deleteassignment']);

Route::post('deleteassign',[assignment::class,'deleteassign']);

Route::get('studentloginpage', function(){
    return view('StudentLogin');
});

Route::post('studentlogin',[assignment::class,'studentlogin']);

Route::get('student',[assignment::class,'student']);

Route::get('studentassignmentinfo',[assignment::class,'studentassignment']);

Route::post('uploadassignment',[assignment::class,'uploadassignment']);

Route::get('studentuploadinfo', [assignment::class,'studentuploadinfo']);

Route::get('changepassword',[assignment::class,'changepassword']);

Route::post('change',[assignment::class,'change']);

