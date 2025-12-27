<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $teachers = Teacher::paginate(15); 
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:teachers,email',
        'telephone' => 'required|string',
        'specialite' => 'required|string|max:255',
        'date_embauche' => 'nullable|date',
    ]);

    Teacher::create($validated);

    return redirect()->route('teachers.index')
        ->with('success', 'Teacher created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Teacher $teacher)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:teachers,email,' . $teacher->id,
        'telephone' => 'required|string',
        'specialite' => 'required|string|max:255',
        'date_embauche' => 'nullable|date',
    ]);

    $teacher->update($validated);

    return redirect()->route('teachers.index')
        ->with('success', 'Teacher updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teachers.index')
                         ->with('success', 'Teacher deleted successfully.');
    }

    /**
     * Display the teacher dashboard.
     */
    public function dashboard()
    {
        $user = auth()->user();
        // You can add logic to fetch teacher-specific data here
        return view('dashboards.teacher-dashboard', compact('user'));
    }
}
