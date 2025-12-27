@extends('layouts.app')

@section('title', 'Teacher Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Students -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 dark:bg-blue-900">
                    <i class="fas fa-users text-blue-600 dark:text-blue-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Students</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">156</p>
                </div>
            </div>
        </div>

        <!-- Classes -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 dark:bg-green-900">
                    <i class="fas fa-school text-green-600 dark:text-green-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Classes</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">5</p>
                </div>
            </div>
        </div>

        <!-- Pending Grades -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 dark:bg-purple-900">
                    <i class="fas fa-clipboard-list text-purple-600 dark:text-purple-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Pending Grades</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">23</p>
                </div>
            </div>
        </div>

        <!-- Upcoming Classes -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-orange-100 dark:bg-orange-900">
                    <i class="fas fa-calendar-alt text-orange-600 dark:text-orange-400 text-2xl"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Upcoming Classes</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-white">4</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Today's Classes -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Today's Classes</h3>
            <div class="space-y-3">
                <div class="flex items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <input type="checkbox" class="mr-3 h-4 w-4 text-blue-600" checked>
                    <div class="flex-1">
                        <p class="font-medium text-gray-900 dark:text-white">Mathematics - Class A</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">9:00 - 10:30 AM</p>
                    </div>
                    <span class="px-2 py-1 bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 rounded-full text-xs font-medium">Completed</span>
                </div>
                <div class="flex items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <input type="checkbox" class="mr-3 h-4 w-4 text-blue-600">
                    <div class="flex-1">
                        <p class="font-medium text-gray-900 dark:text-white">Physics - Class B</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">11:00 - 12:30 PM</p>
                    </div>
                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300 rounded-full text-xs font-medium">In Progress</span>
                </div>
                <div class="flex items-center p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <input type="checkbox" class="mr-3 h-4 w-4 text-blue-600">
                    <div class="flex-1">
                        <p class="font-medium text-gray-900 dark:text-white">Chemistry - Class C</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">2:00 - 3:30 PM</p>
                    </div>
                    <span class="px-2 py-1 bg-gray-100 text-gray-800 dark:bg-gray-600 dark:text-gray-300 rounded-full text-xs font-medium">Upcoming</span>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Recent Activities</h3>
            <div class="space-y-3">
                <div class="flex items-start p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <i class="fas fa-graduation-cap text-blue-600 dark:text-blue-400 mt-1 mr-3"></i>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Graded Mathematics exam for Class A</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <i class="fas fa-plus text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Created new Physics assignment</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">4 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                    <i class="fas fa-calendar-check text-purple-600 dark:text-purple-400 mt-1 mr-3"></i>
                    <div class="flex-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Updated class schedule for next week</p>
                        <p class="text-xs text-gray-600 dark:text-gray-400">1 day ago</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- My Classes -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">My Classes</h3>
            <div class="space-y-3">
                <div class="p-4 bg-blue-50 dark:bg-blue-900 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-900 dark:text-white">Mathematics - Class A</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">32 students</p>
                        </div>
                        <a href="{{ route('classes.show', 1) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">Manage</a>
                    </div>
                </div>
                <div class="p-4 bg-green-50 dark:bg-green-900 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-900 dark:text-white">Physics - Class B</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">28 students</p>
                        </div>
                        <a href="{{ route('classes.show', 2) }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm">Manage</a>
                    </div>
                </div>
                <div class="p-4 bg-purple-50 dark:bg-purple-900 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="font-medium text-gray-900 dark:text-white">Chemistry - Class C</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">30 students</p>
                        </div>
                        <a href="{{ route('classes.show', 3) }}" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 text-sm">Manage</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Quick Actions</h3>
            <div class="grid grid-cols-2 gap-3">
                <a href="{{ route('notes.create') }}" class="flex flex-col items-center p-4 bg-blue-50 dark:bg-blue-900 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-800 transition-colors">
                    <i class="fas fa-plus text-blue-600 dark:text-blue-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Add Grade</span>
                </a>
                <a href="{{ route('exams.create') }}" class="flex flex-col items-center p-4 bg-green-50 dark:bg-green-900 rounded-lg hover:bg-green-100 dark:hover:bg-green-800 transition-colors">
                    <i class="fas fa-file-alt text-green-600 dark:text-green-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">Create Exam</span>
                </a>
                <a href="{{ route('sessions.create') }}" class="flex flex-col items-center p-4 bg-purple-50 dark:bg-purple-900 rounded-lg hover:bg-purple-100 dark:hover:bg-purple-800 transition-colors">
                    <i class="fas fa-calendar-plus text-purple-600 dark:text-purple-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">New Session</span>
                </a>
                <a href="{{ route('students.index') }}" class="flex flex-col items-center p-4 bg-orange-50 dark:bg-orange-900 rounded-lg hover:bg-orange-100 dark:hover:bg-orange-800 transition-colors">
                    <i class="fas fa-users text-orange-600 dark:text-orange-400 text-2xl mb-2"></i>
                    <span class="text-sm font-medium text-gray-900 dark:text-white">View Students</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
