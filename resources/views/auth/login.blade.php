<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SchoolManager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login to SchoolManager</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Login</button>
        </form>
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600 mb-2">After login, you'll be redirected to your role dashboard:</p>
            <div class="text-xs text-gray-500 space-y-1">
                <p><strong>Students:</strong> {{ route('student.dashboard') }}</p>
                <p><strong>Teachers:</strong> {{ route('teacher.dashboard') }}</p>
                <p><strong>Administrators:</strong> {{ route('admin.dashboard') }}</p>
            </div>
        </div>
        <p class="text-center mt-4">
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Create Account</a> | <a href="/" class="text-blue-600 hover:underline">Back to Home</a>
        </p>
    </div>
</body>
</html>



