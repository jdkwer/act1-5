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
}
