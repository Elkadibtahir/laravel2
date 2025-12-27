<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::with('teacher')->paginate(15);
        return view('modules.index', compact('modules'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('modules.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'coefficient' => 'required|numeric|min:0',
            'volume_horaire' => 'required|integer|min:0',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        Module::create($validated);

        return redirect()->route('modules.index')
            ->with('success', 'Module created successfully.');
    }

    public function show(Module $module)
    {
        $module->load('teacher');
        return view('modules.show', compact('module'));
    }

    public function edit(Module $module)
    {
        $teachers = Teacher::all();
        return view('modules.edit', compact('module', 'teachers'));
    }

    public function update(Request $request, Module $module)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'coefficient' => 'required|numeric|min:0',
            'volume_horaire' => 'required|integer|min:0',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $module->update($validated);

        return redirect()->route('modules.index')
            ->with('success', 'Module updated successfully.');
    }

    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('modules.index')
            ->with('success', 'Module deleted successfully.');
    }
}