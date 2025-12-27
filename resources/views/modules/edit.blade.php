@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Edit Module</h2>
        </div>

        <form method="POST" action="{{ route('modules.update', $module) }}" class="px-6 py-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Module Name</label>
                <input type="text" name="nom" id="nom" value="{{ old('nom', $module->nom) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('nom')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="coefficient" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Coefficient</label>
                <input type="number" step="0.01" name="coefficient" id="coefficient" value="{{ old('coefficient', $module->coefficient) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('coefficient')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="volume_horaire" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Volume Horaire</label>
                <input type="number" name="volume_horaire" id="volume_horaire" value="{{ old('volume_horaire', $module->volume_horaire) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('volume_horaire')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="teacher_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teacher</label>
                <select name="teacher_id" id="teacher_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                    <option value="">Select a teacher</option>
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}" {{ old('teacher_id', $module->teacher_id) == $teacher->id ? 'selected' : '' }}>{{ $teacher->nom }}</option>
                    @endforeach
                </select>
                @error('teacher_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('modules.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Module
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
