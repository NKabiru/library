<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp()
    {
        parent::setUp();
        
        $this->user = factory('App\User')->create();
    }

    /** @test */
    public function a_user_can_have_many_books()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->books);
    }

    /** @test */
    public function a_user_can_have_many_reviews()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->reviews);
    }

    /** @test */
    public function a_user_belongs_to_a_role()
    {
        $this->assertInstanceOf('App\Role', $this->user->role);
    }


}
