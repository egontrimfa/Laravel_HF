<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function save_student(Request $request){
       $request->validate([
           'first_name'=>'required|min:2|max:255',
           'last_name'=>'required|min:2|max:255',
           'email'=>'required|email|',
       ]);
       $student = new Student();
       $student->first_name = $request->first_name;
       $student->last_name = $request->last_name;
       $student->email = $request->email;
       $student->save();
       return response()->json($student);

   }
   public function get_students(){
       $students = Student::orderBy('id','desc')->get();
       return response()->json($students);
   }
   public function del_student($id){
       $student = Student::find($id);
       $student->delete();
       return response()->json($student);
   }
   public function edit_student($id){
       $student = Student::where('id',$id)->first();
       return response()->json($student);
   }

   public function update_student(Request $request){
       $request->validate([
           'first_name'=>'required|min:2|max:255',
           'last_name'=>'required|min:2|max:255',
           'email'=>'required|email',
       ]);
       $student = Student::where('id',$request->id)->first();
       $student->first_name = $request->first_name;
       $student->last_name = $request->last_name;
       $student->email = $request->email;
       $student->save();
       return response()->json($student);

   }

}
