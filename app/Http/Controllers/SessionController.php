<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Classe;
use App\Models\Module;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::with(['classe', 'module', 'teacher'])
            ->paginate(15);
        return view('sessions.index', compact('sessions'));
    }

    public function create()
    {
        $classes = Classe::all();
        $modules = Module::all();
        $teachers = Teacher::all();
        return view('sessions.create', compact('classes', 'modules', 'teachers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'salle' => 'required|string|max:255',
            'date_session' => 'required|date',
            'heure_debut' => 'required',
            'heure_fin' => 'required|after:heure_debut',
            'class_id' => 'required|exists:classes,id',
            'module_id' => 'required|exists:modules,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        Session::create($validated);

        return redirect()->route('sessions.index')
            ->with('success', 'Session created successfully.');
    }

    public function show(Session $session)
    {
        $session->load(['classe', 'module', 'teacher']);
        return view('sessions.show', compact('session'));
    }

    public function edit(Session $session)
    {
        $classes = Classe::all();
        $modules = Module::all();
        $teachers = Teacher::all();
        return view('sessions.edit', compact('session', 'classes', 'modules', 'teachers'));
    }

    public function update(Request $request, Session $session)
    {
        $validated = $request->validate([
            'salle' => 'required|string|max:255',
            'date_session' => 'required|date',
            'heure_debut' => 'required',
            'heure_fin' => 'required|after:heure_debut',
            'class_id' => 'required|exists:classes,id',
            'module_id' => 'required|exists:modules,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $session->update($validated);

        return redirect()->route('sessions.index')
            ->with('success', 'Session updated successfully.');
    }

    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('sessions.index')
            ->with('success', 'Session deleted successfully.');
    }
}