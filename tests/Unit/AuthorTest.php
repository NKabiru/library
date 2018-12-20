<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;

    protected $author;

    protected function setUp()
    {
        parent::setUp();

        $this->author = factory('App\Author')->create();
    }

    /** @test */
    public function an_author_has_multiple_books()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->author->books);
    }

}
