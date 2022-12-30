<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
// use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_example()
=======
    public function test_the_application_returns_a_successful_response()
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
