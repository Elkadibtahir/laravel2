@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Edit Student</h2>
        </div>

        <form method="POST" action="{{ route('students.update', $student) }}" class="px-6 py-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Last Name</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom', $student->nom) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('nom')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="prenom" class="block text-sm font-medium text-gray-700 dark:text-gray-300">First Name</label>
                <input type="text" name="prenom" id="prenom" value="{{ old('prenom', $student->prenom) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('prenom')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $student->email) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('email')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>
          <div class="mb-4">
                   <label for="date_naissance">Date of Birth</label>
                    <input type="date" name="date_naissance" id="date_naissance" 
                 value="{{ old('date_naissance', $student->date_naissance) }}" required>
            </div>
            <div class="mb-4">
                 <label for="adresse">Address</label>
                  <input type="text" name="adresse" id="adresse" 
                 value="{{ old('adresse', $student->adresse) }}">
                </div>
                <div class="mb-4">
                  <label for="telephone">Phone</label>
                  <input type="text" name="telephone" id="telephone" 
                       value="{{ old('telephone', $student->telephone) }}">
                    </div>
                    
            <div class="mb-4">
                <label for="classe_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Class</label>
                <select name="classe_id" id="classe_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                    <option value="">Select a class</option>
                    @foreach($classes as $class)
                        <option value="{{ $class->id }}" {{ old('classe_id', $student->classe_id) == $class->id ? 'selected' : '' }}>{{ $class->nom_classe }}</option>
                    @endforeach
                </select>
                @error('classe_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('students.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Student
                </button>
            </div>
        </form>
    </div>
</div>
