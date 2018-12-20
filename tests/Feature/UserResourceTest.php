<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserResourceTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp()
    {
        parent::setUp();

        $this->seed('RoleTableSeeder');
    }

    /** @test */
    public function when_a_user_registers_they_are_automatically_assigned_to_a_user_role()
    {
        $this->post('/register', [
            'name' => 'JohnDoe',
            'email' => 'john@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $this->assertDatabaseHas('users', ['name' => 'JohnDoe']);

        $user = User::where('name','JohnDoe')->first();

        $this->assertEquals('user', $user->role->name);
    }

}
