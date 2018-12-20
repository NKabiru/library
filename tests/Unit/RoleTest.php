<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    protected $role;

    protected function setUp()
    {
        parent::setUp();

        $this->role = factory('App\Role')->create();
    }

    /** @test */
    public function a_role_has_multiple_users()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->role->users);
    }

}
