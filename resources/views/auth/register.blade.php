<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - SchoolManager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex items-center justify-center py-8">
    <a href="{{ route('login') }}" class="absolute top-5 left-5 text-blue-600 hover:text-blue-800 flex items-center text-sm">
        <i class="fas fa-arrow-left mr-2"></i> Back to Home
    </a>

    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-md">
        <div class="text-center mb-8">
            <div class="text-4xl font-bold text-blue-600 mb-2">SchoolManager</div>
            <p class="text-gray-600">Create your account</p>
        </div>

        <form id="signup-form" method="POST" action="{{ route('register.post') }}">
            @csrf
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="relative">
                    <input type="text" id="firstname" name="firstname" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 peer">
                    <label for="firstname" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-focus:top-0 peer-focus:text-xs peer-focus:text-blue-600 peer-valid:top-0 peer-valid:text-xs peer-valid:text-blue-600">First Name</label>
                </div>
                <div class="relative">
                    <input type="text" id="lastname" name="lastname" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 peer">
                    <label for="lastname" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-focus:top-0 peer-focus:text-xs peer-focus:text-blue-600 peer-valid:top-0 peer-valid:text-xs peer-valid:text-blue-600">Last Name</label>
                </div>
            </div>

            <div class="relative mb-4">
                <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 peer">
                <label for="email" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-focus:top-0 peer-focus:text-xs peer-focus:text-blue-600 peer-valid:top-0 peer-valid:text-xs peer-valid:text-blue-600">Email</label>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="relative">
                    <input type="password" id="password" name="password" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 peer">
                    <label for="password" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-focus:top-0 peer-focus:text-xs peer-focus:text-blue-600 peer-valid:top-0 peer-valid:text-xs peer-valid:text-blue-600">Password</label>
                </div>
                <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 peer">
                    <label for="password_confirmation" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-focus:top-0 peer-focus:text-xs peer-focus:text-blue-600 peer-valid:top-0 peer-valid:text-xs peer-valid:text-blue-600">Confirm Password</label>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-semibold mb-2">Role</label>
                <select name="role" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="student">Student</option>
                    <option value="prof">Teacher</option>
                    <option value="admin">Administrator</option>
                </select>
            </div>

            <div class="flex items-start mb-6">
                <input type="checkbox" id="terms" name="terms" required class="mr-2 mt-1">
                <label for="terms" class="text-sm text-gray-600">I agree to the <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a></label>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-purple-600 text-white py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-purple-700 transition">Create Account</button>

            <div id="role-info" class="mt-6 text-center hidden">
                <p class="text-sm text-gray-600 mb-2">Based on your selected role, you'll have access to:</p>
                <div id="student-info" class="text-xs text-gray-500 space-y-1 hidden">
                    <p><strong>Student Dashboard:</strong> View your notes and absences</p>
                    <p><strong>Access:</strong> Personal academic information</p>
                    <p><a href="{{ route('student.dashboard') }}" class="text-blue-600 hover:underline">View Student Dashboard</a></p>
                </div>
                <div id="teacher-info" class="text-xs text-gray-500 space-y-1 hidden">
                    <p><strong>Teacher Dashboard:</strong> Manage student notes and absences</p>
                    <p><strong>Access:</strong> Class management and grading</p>
                    <p><a href="{{ route('teacher.dashboard') }}" class="text-blue-600 hover:underline">View Teacher Dashboard</a></p>
                </div>
                <div id="admin-info" class="text-xs text-gray-500 space-y-1 hidden">
                    <p><strong>Admin Dashboard:</strong> System-wide notes and absences overview</p>
                    <p><strong>Access:</strong> Full system administration</p>
                    <p><a href="{{ route('admin.dashboard') }}" class="text-blue-600 hover:underline">View Admin Dashboard</a></p>
                </div>
            </div>

            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Sign In</a></p>
            </div>
        </form>
    </div>

    <script>
        // Optional: Add client-side validation if needed
        document.getElementById('signup-form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('password_confirmation').value;
            const terms = document.getElementById('terms').checked;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert('Passwords do not match.');
            }

            if (!terms) {
                e.preventDefault();
                alert('You must agree to the Terms of Service and Privacy Policy.');
            }
        });
    </script>
</body>
</html>
