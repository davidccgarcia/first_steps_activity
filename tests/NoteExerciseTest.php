<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NoteExerciseTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_summary_and_details()
    {
        $text  = 'Repudiandae dolor voluptates omnis. Et enim tempore sit ad ';
        $text .= 'suscipit. Fugiat fuga magni reiciendis voluptas. Autem nihil ';
        $text .= 'est eius quam non ut perspiciatis deleniti';

        $note = Note::create(['note' => $text]);

        $this->visit('notes')
            ->see('Repudiandae dolor voluptates omnis')
            ->dontSee('est eius quam non ut perspiciatis deleniti')
            ->click('View note')
            ->seePageIs('notes/details/' . $note->id)
            ->seeInElement('h1', 'Notes details')
            ->see($text);
    }
}
