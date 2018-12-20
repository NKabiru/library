<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    protected $book;

    protected function setUp()
    {
        parent::setUp();

        $this->book = factory('App\Book')->create();
    }

    /** @test */
    public function a_book_has_multiple_authors()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->book->authors);
    }

    /** @test */
    public function a_book_has_multiple_reviews()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->book->reviews);
    }



}
