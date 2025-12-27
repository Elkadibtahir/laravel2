@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Edit Exam</h2>
        </div>

        <form method="POST" action="{{ route('exams.update', $exam) }}" class="px-6 py-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="type_exam" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Exam Type</label>
                <input type="text" name="type_exam" id="type_exam" value="{{ old('type_exam', $exam->type_exam) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('type_exam')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="date_exam" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Exam Date</label>
                <input type="date" name="date_exam" id="date_exam" value="{{ old('date_exam', $exam->date_exam) }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                @error('date_exam')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="class_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Class</label>
                <select name="class_id" id="class_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                    <option value="">Select a class</option>
                    @foreach($classes as $class)
                        <option value="{{ $class->id }}" {{ old('class_id', $exam->class_id) == $class->id ? 'selected' : '' }}>{{ $class->nom_classe }}</option>
                    @endforeach
                </select>
                @error('class_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="module_id" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Module</label>
                <select name="module_id" id="module_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" required>
                    <option value="">Select a module</option>
                    @foreach($modules as $module)
                        <option value="{{ $module->id }}" {{ old('module_id', $exam->module_id) == $module->id ? 'selected' : '' }}>{{ $module->nom_module }}</option>
                    @endforeach
                </select>
                @error('module_id')
                    <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{ route('exams.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                    Cancel
                </a>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Exam
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
