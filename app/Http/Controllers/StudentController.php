<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\student;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function index()
    {   
        $students = student::get();

        return view ('student.index', compact('students'));
    }

    public function create()
    {
        return view ('student.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'stud_no' => 'required|integer',
            'stud_fname' => 'required|max:255|string',
            'stud_mname' => 'required|max:255|string',
            'stud_lname' => 'required|max:255|string',
            'stud_bday' => 'required|max:255|string',
            'zip' => 'required|integer',
        ]);

        student::create($request->all());
        return redirect ()->back()->with('status', 'Student created successfully!');
    }

    public function edit( int $id)
    {
        $students = student::find($id);
        return view ('student.edit',compact('students'));
    }

    public function update(Request $request, int $id) {
        {
            $request->validate([
                'stud_no' => 'required|integer',
                'stud_fname' => 'required|max:255|string',
                'stud_mname' => 'required|max:255|string',
                'stud_lname' => 'required|max:255|string',
                'stud_bday' => 'required|max:255|string',
                'zip' => 'required|integer',
            ]);
        
            student::findOrFail($id)->update($request->all());
            return redirect ()->back()->with('status','Student Updated Successfully!');
            }
    }

    public function destroy(int $id){
        $students = student::findOrFail($id);
        $students->delete();
        return redirect ()->back()->with('status','Student Deleted');
    }
}