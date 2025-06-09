<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Activity 1: Display data
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students',
        'age' => 'required|integer'
    ]);

    Student::create($request->only(['name', 'email', 'age']));
    return redirect('/students')->with('success', 'Student added!');
}
    public function edit($id)
{
    $students = Student::all();
    $student = Student::findOrFail($id);
    return view('students.index', compact('students', 'student'));
}

public function update(Request $request, $id)
{
    $student = Student::findOrFail($id);
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students,email,' . $id,
        'age' => 'required|integer'
    ]);
    $student->update($request->only(['name', 'email', 'age']));
    return redirect('/students')->with('success', 'Student updated!');
}

public function destroy($id)
{
    Student::findOrFail($id)->delete();
    return redirect('/students')->with('success', 'Student deleted!');
}


}
