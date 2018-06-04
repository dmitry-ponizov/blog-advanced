<?php

namespace Tests\Feature;

use App\Mail\RegistrationMail;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        factory(User::class)->create([
            'name' => 'Abigail',
        ]);

        $this->assertDatabaseHas('users', [
            'name' => 'Abigail'
        ]);


    }
}
