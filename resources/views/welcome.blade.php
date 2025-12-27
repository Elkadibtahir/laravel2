<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Manager - Simplify School Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900">
    @include('components.navbar')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Manage Your School Effortlessly</h1>
            <p class="text-xl md:text-2xl mb-8">Streamline student records, teacher assignments, and administrative tasks with our powerful school management app.</p>
            <a href="{{ route('login') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Key Features</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fas fa-users text-5xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Student Management</h3>
                    <p>Track student information, attendance, grades, and more with ease.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-chalkboard-teacher text-5xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Teacher Dashboard</h3>
                    <p>Assign classes, manage schedules, and communicate with parents.</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-chart-line text-5xl text-blue-600 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Analytics & Reports</h3>
                    <p>Generate insightful reports on performance and school metrics.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">About SchoolManager</h2>
            <p class="text-lg max-w-2xl mx-auto">Our app is designed to simplify school administration, allowing educators and administrators to focus on what matters most: educating students. Built with Laravel for reliability and security.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Contact Us</h2>
            <div class="max-w-md mx-auto">
                <form class="space-y-4">
                    <input type="text" placeholder="Your Name" class="w-full px-4 py-2 border rounded-lg">
                    <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded-lg">
                    <textarea placeholder="Message" class="w-full px-4 py-2 border rounded-lg h-32"></textarea>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 SchoolManager. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>