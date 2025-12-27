<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classe::all();
        return view('classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'nom_classe' => 'required|string|max:255',
        'niveau' => 'required|string|max:255',
    ]);

    Classe::create($validated);

    return redirect()->route('classes.index')
        ->with('success', 'Classe created successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(Classe $classe)
    {
        return view('classes.show', compact('classe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        
        return view('classes.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $classe)
{
    $validated = $request->validate([
        'nom_classe' => 'required|string|max:255',
        'niveau' => 'required|string|max:255',
    ]);

    $classe->update($validated);

    return redirect()->route('classes.index')
        ->with('success', 'Classe updated successfully.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()->route('classes.index')
                         ->with('success', 'Classe deleted successfully.');
    }
}
