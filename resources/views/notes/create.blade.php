@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Create Note</h2>
        </div>

        <form method="POST" action="{{ route('notes.store') }}" class="px-6 py-4">
            @csrf

            <div class="mb-4">
                <label for="student_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Student</label>
                <select name="student_id" id="student_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                    <option value="">Select a student</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->nom }} {{ $student->prenom }}</option>
                    @endforeach
                </select>
                @error('student_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="module_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Module</label>
                <select name="module_id" id="module_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                    <option value="">Select a module</option>
                    @foreach($modules as $module)
                        <option value="{{ $module->id }}">{{ $module->nom }}</option>
                    @endforeach
                </select>
                @error('module_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="note" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Note</label>
                <input type="number" step="0.01" name="note" id="note" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('note')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="date_note" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date</label>
                <input type="date" name="date_note" id="date_note" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('date_note')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('notes.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Note
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
