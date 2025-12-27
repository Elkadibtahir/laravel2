@php
    $showAll = $showAll ?? true;
@endphp
<nav class="bg-white dark:bg-gray-800 shadow-md">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-gray-900 dark:text-white">School Management</a>
            <div class="flex space-x-4">
                @if($showAll)
                    <a href="{{ route('classes.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Classes</a>
                    <a href="{{ route('students.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Students</a>
                    <a href="{{ route('teachers.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Teachers</a>
                    <a href="{{ route('modules.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Modules</a>
                    <a href="{{ route('sessions.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Sessions</a>
                    <a href="{{ route('exams.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Exams</a>
                    <a href="{{ route('notes.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Notes</a>
                    <a href="{{ route('users.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Users</a>
                @endif
                @auth
                    @if($showAll)
                        <a href="{{ route('dashboard') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Dashboard</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Login</a>
                    @if($showAll)
                        <a href="{{ route('register') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-500">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</nav>
