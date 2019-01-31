<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewBooksTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_users_can_view_all_books()
    {
        $books = factory('App\Book', 3)->create();

        $this->get(route('books.index'))
            ->assertSee($books[1]->title)
            ->assertViewIs('books.index');
    }

}
