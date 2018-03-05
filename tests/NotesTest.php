<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        // Having - When - Then
        $this->visit('notes')
            ->see('My first note')
            ->see('Second note');
    }

    public function test_create_notes()
    {
        $this->post('notes')
            ->see('Creating a note');
    }
}
