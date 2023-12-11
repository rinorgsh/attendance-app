<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\StudentSeeder;
use Tests\TestCase;
use App\Models\Student;

class StudentTest extends TestCase
{

    // Utile pour 'reset' la base de données après chaque tests (https://laravel.com/docs/8.x/database-testing)
    use RefreshDatabase;

    // Vérifier qu'un étudiant est bien ajouter dans la table 'Student'
    public function test_student_create()
    {
        // Insèrer un étudiant '1111, Juste, LeBlanc'
        Student::addStudent(1111, 'Juste', 'LeBlanc');
        // Vérifier que l'étudiant existe
        $this->assertDatabaseHas('students', [
            'id'=> 1111,
            'first_name' => 'Juste',
            'last_name' => 'LeBlanc',
        ]);
    }

    // Vérifier qu'il y'a bien 5 étudiants qui sont dans la table 'Student'
    public function test_student_read()
    {
        // Insèrer 5 étudiants aléatoires grâce au seed
        $this->seed(StudentSeeder::class);
        // Vérifier que les étudiants sont bien présents
        $this->assertDatabaseCount('students', 5);
    }

    // Vérifier qu'un étudiant est bien modifier de la table 'Student'
    public function test_student_update()
    {
        // Insèrer un étudiant '1111, Juste, LeBlanc'
        Student::addStudent(1111, 'Juste', 'LeBlanc');
        // Modifier l'étudiant
        Student::updateStudent(1111, 'Juste', 'LeVert');
        // Vérifier que l'étudiant est bien modifier de la table 'Student'
        $this->assertDatabaseHas('students', [
            'id' => 1111,
            'first_name' => 'Juste',
            'last_name' => 'LeVert',
        ]);
    }

    // Vérifier qu'un étudiant est bien supprimer de la table 'Student'
    public function test_student_delete()
    {
        // Insèrer un étudiant '1111, Juste, LeBlanc'
        Student::addStudent(1111, 'Juste', 'LeBlanc');
        // Supprimer l'étudiant
        Student::removeStudent(1111, 'Juste', 'LeBlanc');
        // Vérifier que l'étudiant est bien supprimer de la table 'Student'
        $this->assertDatabaseMissing('students', [
            'id' => 1111,
            'first_name' => 'Juste',
            'last_name' => 'LeBlanc',
        ]);
    }
}
