@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Stats Cards with Gradients -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Users -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-100 text-sm font-medium">Total Users</p>
                    <p class="text-3xl font-bold">1,247</p>
                </div>
                <i class="fas fa-users text-blue-200 text-3xl"></i>
            </div>
        </div>

        <!-- Active Sessions -->
        <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-green-100 text-sm font-medium">Active Sessions</p>
                    <p class="text-3xl font-bold">89</p>
                </div>
                <i class="fas fa-clock text-green-200 text-3xl"></i>
            </div>
        </div>

        <!-- System Load -->
        <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-purple-100 text-sm font-medium">System Load</p>
                    <p class="text-3xl font-bold">23%</p>
                </div>
                <i class="fas fa-server text-purple-200 text-3xl"></i>
            </div>
        </div>

        <!-- Database Size -->
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-orange-100 text-sm font-medium">Database Size</p>
                    <p class="text-3xl font-bold">2.4GB</p>
                </div>
                <i class="fas fa-database text-orange-200 text-3xl"></i>
            </div>
        </div>
    </div>

    <!-- System Overview -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">System Overview</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-shield-alt text-blue-600 dark:text-blue-400 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Security Status</p>
                    <p class="text-lg font-bold text-gray-900 dark:text-white">Secure</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-chart-line text-green-600 dark:text-green-400 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Performance</p>
                    <p class="text-lg font-bold text-gray-900 dark:text-white">98.5%</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-hdd text-purple-600 dark:text-purple-400 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Storage Used</p>
                    <p class="text-lg font-bold text-gray-900 dark:text-white">67%</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-network-wired text-orange-600 dark:text-orange-400 text-2xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Network Status</p>
                    <p class="text-lg font-bold text-gray-900 dark:text-white">Online</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Recent Activities</h3>
        <div class="space-y-3">
            <div class="flex items-start p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-user-plus text-blue-600 dark:text-blue-400 mt-1 mr-3"></i>
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">New user registered: john.doe@example.com</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">5 minutes ago</p>
                </div>
            </div>
            <div class="flex items-start p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-graduation-cap text-green-600 dark:text-green-400 mt-1 mr-3"></i>
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Grade submitted for Mathematics exam</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">12 minutes ago</p>
                </div>
            </div>
            <div class="flex items-start p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-calendar-plus text-purple-600 dark:text-purple-400 mt-1 mr-3"></i>
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">New class session created for Physics</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">1 hour ago</p>
                </div>
            </div>
            <div class="flex items-start p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                <i class="fas fa-file-alt text-orange-600 dark:text-orange-400 mt-1 mr-3"></i>
                <div class="flex-1">
                    <p class="text-sm font-medium text-gray-900 dark:text-white">Exam results published for Chemistry</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">2 hours ago</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Management Grid -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Management</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('users.index') }}" class="p-4 bg-gradient-to-r from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-users text-blue-600 dark:text-blue-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Users</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Manage system users</p>
                <span class="text-xs bg-blue-200 dark:bg-blue-700 text-blue-800 dark:text-blue-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
            <a href="{{ route('students.index') }}" class="p-4 bg-gradient-to-r from-green-50 to-green-100 dark:from-green-900 dark:to-green-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-user-graduate text-green-600 dark:text-green-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Students</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Student management</p>
                <span class="text-xs bg-green-200 dark:bg-green-700 text-green-800 dark:text-green-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
            <a href="{{ route('teachers.index') }}" class="p-4 bg-gradient-to-r from-purple-50 to-purple-100 dark:from-purple-900 dark:to-purple-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-chalkboard-teacher text-purple-600 dark:text-purple-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Teachers</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Teacher management</p>
                <span class="text-xs bg-purple-200 dark:bg-purple-700 text-purple-800 dark:text-purple-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
            <a href="{{ route('classes.index') }}" class="p-4 bg-gradient-to-r from-orange-50 to-orange-100 dark:from-orange-900 dark:to-orange-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-school text-orange-600 dark:text-orange-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Classes</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Class management</p>
                <span class="text-xs bg-orange-200 dark:bg-orange-700 text-orange-800 dark:text-orange-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
            <a href="{{ route('modules.index') }}" class="p-4 bg-gradient-to-r from-red-50 to-red-100 dark:from-red-900 dark:to-red-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-book text-red-600 dark:text-red-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Modules</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Course modules</p>
                <span class="text-xs bg-red-200 dark:bg-red-700 text-red-800 dark:text-red-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
            <a href="{{ route('exams.index') }}" class="p-4 bg-gradient-to-r from-indigo-50 to-indigo-100 dark:from-indigo-900 dark:to-indigo-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-file-alt text-indigo-600 dark:text-indigo-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Exams</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Exam management</p>
                <span class="text-xs bg-indigo-200 dark:bg-indigo-700 text-indigo-800 dark:text-indigo-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
            <a href="{{ route('notes.index') }}" class="p-4 bg-gradient-to-r from-pink-50 to-pink-100 dark:from-pink-900 dark:to-pink-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-clipboard-list text-pink-600 dark:text-pink-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Notes</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Grade management</p>
                <span class="text-xs bg-pink-200 dark:bg-pink-700 text-pink-800 dark:text-pink-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
            <a href="{{ route('sessions.index') }}" class="p-4 bg-gradient-to-r from-teal-50 to-teal-100 dark:from-teal-900 dark:to-teal-800 rounded-lg hover:shadow-md transition-shadow">
                <i class="fas fa-calendar-alt text-teal-600 dark:text-teal-400 text-2xl mb-2"></i>
                <h4 class="font-semibold text-gray-900 dark:text-white">Sessions</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Class sessions</p>
                <span class="text-xs bg-teal-200 dark:bg-teal-700 text-teal-800 dark:text-teal-300 px-2 py-1 rounded mt-2 inline-block">Manage</span>
            </a>
        </div>
    </div>

    <!-- Performance Overview -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Performance Overview</h3>
        <div class="space-y-4">
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600 dark:text-gray-400">Server Uptime</span>
                    <span class="text-gray-900 dark:text-white">99.9%</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 99.9%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600 dark:text-gray-400">Database Performance</span>
                    <span class="text-gray-900 dark:text-white">95.2%</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-green-600 h-2 rounded-full" style="width: 95.2%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600 dark:text-gray-400">User Engagement</span>
                    <span class="text-gray-900 dark:text-white">87.5%</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-purple-600 h-2 rounded-full" style="width: 87.5%"></div>
                </div>
            </div>
            <div>
                <div class="flex justify-between text-sm mb-1">
                    <span class="text-gray-600 dark:text-gray-400">System Load</span>
                    <span class="text-gray-900 dark:text-white">23.1%</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                    <div class="bg-orange-600 h-2 rounded-full" style="width: 23.1%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
