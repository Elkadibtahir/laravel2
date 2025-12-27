@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Courses -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900">
                    <i class="fas fa-book text-blue-600 dark:text-blue-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Courses</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">8</p>
                </div>
            </div>
        </div>

        <!-- Average Grade -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 dark:bg-green-900">
                    <i class="fas fa-chart-line text-green-600 dark:text-green-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Average Grade</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">85%</p>
                </div>
            </div>
        </div>

        <!-- Attendance -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900">
                    <i class="fas fa-calendar-check text-purple-600 dark:text-purple-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Attendance</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">92%</p>
                </div>
            </div>
        </div>

        <!-- Upcoming Exams -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-orange-100 dark:bg-orange-900">
                    <i class="fas fa-file-alt text-orange-600 dark:text-orange-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Upcoming Exams</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">3</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Grades -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Grades</h3>
                <a href="{{ route('notes.index') }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 text-sm">View All</a>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Mathematics</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Final Exam</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 rounded-full text-sm font-medium">18/20</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Physics</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Midterm</p>
                    </div>
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300 rounded-full text-sm font-medium">15/20</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Chemistry</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lab Report</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 rounded-full text-sm font-medium">17/20</span>
                </div>
            </div>
        </div>

        <!-- Upcoming Exams -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Upcoming Exams</h3>
                <a href="{{ route('exams.index') }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 text-sm">View All</a>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Biology Final</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Dec 15, 2023</p>
                    </div>
                    <span class="px-3 py-1 bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300 rounded-full text-sm font-medium">High Priority</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">History Midterm</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Dec 18, 2023</p>
                    </div>
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300 rounded-full text-sm font-medium">Medium</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">English Literature</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Dec 20, 2023</p>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 rounded-full text-sm font-medium">Low</span>
                </div>
            </div>
        </div>

        <!-- Today's Schedule -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Today's Schedule</h3>
                <a href="{{ route('sessions.index') }}" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 text-sm">View All</a>
            </div>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Mathematics</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Room 101</p>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">9:00 - 10:30</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Physics Lab</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lab 203</p>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">11:00 - 12:30</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-white">Chemistry</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Room 105</p>
                    </div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">14:00 - 15:30</span>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-3">
                <a href="{{ route('notes.index') }}" class="flex flex-col items-center p-4 bg-blue-50 dark:bg-blue-900 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-800 transition-colors">
                    <i class="fas fa-graduation-cap text-blue-600 dark:text-blue-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">View Grades</span>
                </a>
                <a href="{{ route('exams.index') }}" class="flex flex-col items-center p-4 bg-green-50 dark:bg-green-900 rounded-lg hover:bg-green-100 dark:hover:bg-green-800 transition-colors">
                    <i class="fas fa-file-alt text-green-600 dark:text-green-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Exams</span>
                </a>
                <a href="{{ route('sessions.index') }}" class="flex flex-col items-center p-4 bg-purple-50 dark:bg-purple-900 rounded-lg hover:bg-purple-100 dark:hover:bg-purple-800 transition-colors">
                    <i class="fas fa-calendar-alt text-purple-600 dark:text-purple-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Schedule</span>
                </a>
                <a href="{{ route('modules.index') }}" class="flex flex-col items-center p-4 bg-orange-50 dark:bg-orange-900 rounded-lg hover:bg-orange-100 dark:hover:bg-orange-800 transition-colors">
                    <i class="fas fa-book-open text-orange-600 dark:text-orange-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Modules</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
