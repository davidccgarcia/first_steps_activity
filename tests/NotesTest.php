<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        // Having 
        $note1 = Note::create(['note' => 'My first note']);
        $note2 = Note::create(['note' => 'Second note']);

        // When
        $this->visit('notes');

        // Then
        $this->see('My first note')
            ->see('Second note');
    }

    public function test_create_notes()
    {
        $this->visit('notes')
            ->click('Add a note')
            ->seePageIs('notes/create')
            ->see('Create a note')
            ->type('My first note', 'note')
            ->press('Create note')
            ->seePageIs('notes')
            ->see('My first note')
            ->seeInDatabase('notes', ['note' => 'My first note']);
    }
}
