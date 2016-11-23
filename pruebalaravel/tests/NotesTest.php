<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\notes;

class NotesTest extends TestCase
{
    public function test_notes_list()
    {
        // Having
        notes::create(['note' => 'My first note']);
        notes::create(['note' => 'second note']);
        // When
        $this->visit('note')
            // Then
            ->see('My first note')
            ->see('Second note');
    }
}
