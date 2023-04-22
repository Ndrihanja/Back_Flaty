<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return response()->json($student);
    }

    public function show($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return response()->json($student);
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return response()->json(['message' => 'Student deleted']);
    }
}
