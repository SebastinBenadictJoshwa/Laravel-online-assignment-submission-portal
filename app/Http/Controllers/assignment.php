<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\assign;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;

class assignment extends Controller
{
    public function adminlogin(Request $request){
        $name=$request->uname;
        $password=$request->password;
        if($name=='admin' && $password=='admin'){
            return view('AdminHome');
        }
    }

    public function addstudent(Request $request){
        
        User::create([
            'regno'=>$request->regno,
            'name'=>$request->name,
            'gender'=>$request->gender,
            'age'=>$request->age,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'degree'=>$request->degree,
            'dept'=>$request->dept,
            'year'=>$request->year,
        ]);
        return redirect('adminhome')->with('message','Student added successfully');
    }

    public function adminstudentinfo(){
        $data=User::all();
        return view('AdminStudentInfo',compact('data'));
    }

    public function newassign(Request $request){
        $date=date('Y-m-d');
        $degree=$request->degree;
        $dept=$request->dept;
        $year=$request->year;
        $students=User::where('degree',$degree)
                        ->where('dept',$dept)
                        ->where('year',$year)
                        ->get();
        foreach($students as $student){
        assign::create([
            'assignmentname'=>$request->assignmentname,
            'subjectname'=>$request->subjectname,
            'lastdate'=>$request->lastdate,
            'degree'=>$request->degree,
            'dept'=>$request->dept,
            'year'=>$request->year,
            'date'=>$date,
            'regno'=>$student->regno,
            'assignfile'=>'-',
        ]);
    }
        return redirect('adminassign')->with('message','assignment added successfully !!!');
    }

    public function adminassigninfo(){
        $assignments=assign::all();
        return view('AdminAssignInfo',compact('assignments'));
    }

    public function download($id){
        $assignment=assign::find($id);
        $filepath=public_path($assignment->assignfile);
        if(file_exists($filepath)){
            return Response::download($filepath);
        }
        else {
            return back()->with('message','File Not found !!!');
        }
    }

    public function delete($id){
        $student=User::find($id);
        $student->delete();
        return back()->with('message','student deleted successfully');
    }

    public function deleteassignment(){
        return view('AdminDelete');
    }

    public function deleteassign(Request $request){
        $assignname=$request->assignmentname;
        $subname=$request->subjectname;
        $degree=$request->degree;
        $dept=$request->dept;
        $year=$request->year;
        $assignment=assign::get()->where('assignmentname',$assignname)
                                 ->where('subjectname',$subname)
                                 ->where('degree',$degree)
                                 ->where('dept',$dept)
                                 ->where('year',$year)->first();                                   ;
        $assignment->delete();
        return redirect('adminassigninfo')->with('message','Assignment deleted successfully !!');
    }

    public function editor($id){
        $student=User::find($id);
        return view('edit',compact('student'));
    }

    public function edit(Request $request){
        $user=User::find($request->id);
        $user->update([
            'regno'=>$request->regno,
            'name'=>$request->name,
            'gender'=>$request->gender,
            'age'=>$request->age,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'degree'=>$request->degree,
            'dept'=>$request->dept,
            'year'=>$request->year,
        ]);

        return redirect('adminstudentinfo')->with('message','student details modified successfully !!!');
    }

    public function studentlogin(Request $request){
        $regno=$request->regno;
        $password=$request->password;
        $data=DB::table('users')->where('regno',$regno)->first();
        if(Auth::attempt(['regno'=>$regno,'password'=>$password])){
            return view('StudentHome',compact('data'));
        }
        else {
            return back()->with('message','invalid register no or password');
        }
    }

    public function student(){
        $regno=Auth::user()->regno;
        $data=DB::table('users')->where('regno',$regno)->first();
        return view('StudentHome',compact('data'));
    }

    public function studentassignment(){
        $regno=Auth::user()->regno;
        $assignments=assign::all()->where('regno', $regno)->where('status','not uploaded');
        return view('StudentAssignmentInfo',compact('assignments'));
    }

    public function uploadassignment(Request $request){
        $id=$request->id;
        $file=$request->file('fileupload');
        $name=date('Y-m-d').time().".".$file->extension();
        $destination_path=public_path('uploads');
        $file->move($destination_path,$name);
        $assignment=assign::find($id);
        $assignment->assignfile="uploads/".$name;
        $assignment->status="Uploaded";
        $assignment->date=date('Y-m-d').time();
        $assignment->save();
        return back()->with('message','Assignment Uploaded Successfully !!!');
    }
    public function studentuploadinfo(){
        $user=Auth::user()->regno;
        $assignments=assign::all()->where('regno', $user);
        return view('StudentUploadInfo', compact('assignments'));
    }

    public function changepassword(){
        return view('changepassword');
    }

    public function change(Request $request){
        $validatedData=$request->validate([
            'newpassword'=>'required|same:password_confirmation',
        ]);
        $old=$request->oldpassword;
        $new=Hash::make($request->newpassword);
        $user=Auth::user();
        $id=Auth::user()->id;
        $userpass=$user->password;
        if(!Hash::check($old,$userpass)){
            return back()->with('message','Incorrect password !!!');
        }
        $student=User::find($id);
        $student->password=$new;
        $student->save();
        return redirect('student')->with('message','password changed successfully !!!');
    }
}
