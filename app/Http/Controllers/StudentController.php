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

}
