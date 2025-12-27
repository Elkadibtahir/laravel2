<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classe;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Exam;
use App\Models\Note;
use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);

        // Create classes
        $classes = Classe::factory(5)->create();

        // Create teachers
        $teachers = Teacher::factory(10)->create();

        // Create modules
        $modules = Module::factory(10)->create([
            'teacher_id' => $teachers->random()->id,
        ]);

        // Create students
        $students = Student::factory(50)->create([
            'classe_id' => $classes->random()->id,
        ]);

        // Create exams
        $exams = Exam::factory(20)->create([
            'classe_id' => $classes->random()->id,
            'module_id' => $modules->random()->id,
        ]);

        // Create notes
        Note::factory(100)->create([
            'student_id' => $students->random()->id,
            'module_id' => $modules->random()->id,
        ]);

        // Create sessions
        Session::factory(30)->create([
            'module_id' => $modules->random()->id,
            'teacher_id' => $teachers->random()->id,
        ]);
    }
}
