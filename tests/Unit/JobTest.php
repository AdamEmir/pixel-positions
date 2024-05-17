<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    //Test Driven Development
    //Test Driven Development
    //Test Driven Development
    public function test_it_belongs_to_an_employer()
    {
//                $this->assertTrue(true);
        //Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        //Act
        $jobEmployer = $job->employer;

        //Assert
        $this->assertTrue($jobEmployer->is($employer));
    }

    public function test_can_have_tags(){
        //Arrange
        $job = Job::factory()->create();
        //Act
        $job->tags()->attach(Tag::create(['name' => 'Frontend']));
        //Assert
        $this->assertTrue($job->tags->count() === 1);
    }
}


