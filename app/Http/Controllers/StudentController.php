<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentController extends Controller
{
    public function index(){
       return view('admin.student.index');
    }

    public function addData(Request $request)
    {

        $request->validate([
            'student_name' => 'required',
            'id_number' => 'required',
            'subject' => 'required'

        ]);

        $students = new students;
        $students->student_name = $request->student_name;
        $students->id_number = $request->id_number;
        $students->subject = $request->subject;
        $students->semister = $request->semister;
        $students->section = $request->section;
        $students->address = $request->address;

        $students->save();
        return back()->with('success','Data Saved Successfully');



    }
}
