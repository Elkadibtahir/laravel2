<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classe;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classe')->paginate(15);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $classes = Classe::all();
        return view('students.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'date_naissance' => 'required|date|before:today',
            'classe_id' => 'required|exists:classes,id',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        $student->load('classe');
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $classes = Classe::all();
        return view('students.edit', compact('student', 'classes'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'date_naissance' => 'required|date|before:today',
            'classe_id' => 'required|exists:classes,id',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }

    public function dashboard()
    {
        return view('dashboards.student-dashboard');
    }
}
