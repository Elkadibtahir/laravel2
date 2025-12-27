@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-b border-gray-200 dark:border-gray-600">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">User Details</h2>
        </div>

        <div class="px-6 py-4">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $user->name }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $user->email }}</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Role</label>
                <p class="mt-1 text-sm text-gray-900 dark:text-white">{{ $user->role }}</p>
            </div>

            @if($user->role === 'student' && $user->student)
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Student Details</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">Name: {{ $user->student->nom }} {{ $user->student->prenom }}</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">Email: {{ $user->student->email }}</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">Class: {{ $user->student->classe->nom_classe }}</p>
                </div>
            @endif

            @if($user->role === 'teacher' && $user->teacher)
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Teacher Details</label>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">Name: {{ $user->teacher->nom }} {{ $user->teacher->prenom }}</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">Email: {{ $user->teacher->email }}</p>
                    <p class="mt-1 text-sm text-gray-900 dark:text-white">Specialty: {{ $user->teacher->specialite }}</p>
                </div>
            @endif
        </div>

        <div class="px-6 py-4 bg-gray-50 dark:bg-gray-700 border-t border-gray-200 dark:border-gray-600 flex justify-between">
            <a href="{{ route('users.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                Back to Users
            </a>
            <a href="{{ route('users.edit', $user) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Edit User
            </a>
        </div>
    </div>
</div>
@endsection
