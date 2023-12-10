<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class RequestTest extends TestCase{

   use RefreshDatabase;

    //Test the home page
    public function test_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }


    //Test the page of all students
    public function test_all_students()
    {
        $response = $this->get('/students');
        $response->assertStatus(200);
    }

    //Test the CRUD

    //Test to add a student with his key
    public function test_add_student_with_key(){
        $response = $this->post('/students/addStudent', [

            'id' => 50000,

            'first_name' => 'Luke',

            'last_name' => 'Downing',

        ]);

        $response->assertStatus(302);
    }

    //Test to remove a student with his key
    public function test_remove_student_with_key(){

         //Add a student
         $this->post('/students/addStudent', [
            'id' => 50001,

            'first_name' => 'Fred',

            'last_name' => 'Downing',
        ]);

        $response = $this->post('/students/removeStudent', ['id' => 50001]);

        $response->assertStatus(302);
    }

    //Test to consult a student with his key
    public function test_consult_student_with_key(){


        $response = $this->get('/students/ ',['id' => 50000]);
        $response->assertStatus(200);

    }


    //Test to update a student
    public function test_update_student_with_key(){


        //Add a student
        $this->post('/students/addStudent', [
            'id' => 50000,

            'first_name' => 'Luke',

            'last_name' => 'Downing',
        ]);


        //Update a student (first and last name)
        $response = $this->post('/students/updateStudent',
         ['id' => 50000 , 'first_name' => 'Bonjour','last_name' => 'Au revoir' ]);


        //Check if the page is correctly redirected
        $response->assertStatus(302);
    }
}
