<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    protected $review;

    protected function setUp()
    {
        parent::setUp();

        $this->review = factory('App\Review')->create();
    }

    /** @test */
    public function a_review_belongs_to_a_user()
    {
        $this->assertInstanceOf('App\User', $this->review->user);
    }

    /** @test */
    public function a_review_belongs_to_a_book()
    {
        $this->assertInstanceOf('App\Book', $this->review->book);
    }


}
