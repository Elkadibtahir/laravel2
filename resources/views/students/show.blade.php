@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Student Details</h1>
                <div class="flex space-x-2">
                    <a href="{{ route('students.edit', $student) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <a href="{{ route('students.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                        Back to Students
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Personal Information</h2>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Full Name</label>
                            <p class="text-gray-900 dark:text-white">{{ $student->nom }} {{ $student->prenom }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                            <p class="text-gray-900 dark:text-white">{{ $student->email }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date of Birth</label>
                            <p class="text-gray-900 dark:text-white">{{ $student->date_naissance ? \Carbon\Carbon::parse($student->date_naissance)->format('M d, Y') : 'N/A' }}</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Academic Information</h2>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Class</label>
                            <p class="text-gray-900 dark:text-white">{{ $student->classe ? $student->classe->nom_classe . ' - ' . $student->classe->niveau : 'N/A' }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Student ID</label>
                            <p class="text-gray-900 dark:text-white">#{{ $student->id }}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Registration Date</label>
                            <p class="text-gray-900 dark:text-white">{{ $student->created_at ? $student->created_at->format('M d, Y') : 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @if($student->notes && $student->notes->count() > 0)
            <div class="mt-8">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Recent Grades</h2>
                <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        @foreach($student->notes->take(3) as $note)
                        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg">
                            <h3 class="font-medium text-gray-900 dark:text-white">{{ $note->module->nom_module ?? 'N/A' }}</h3>
                            <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">{{ $note->note }}/20</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $note->date_note ? \Carbon\Carbon::parse($note->date_note)->format('M d, Y') : 'N/A' }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
