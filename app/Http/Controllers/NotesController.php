<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Note;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::paginate(20);
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'note' => 'required|max:255'
        ]);

        $note = Note::create(['note' => request()->get('note')]);

        return redirect()->to('notes');
    }

    public function show($note)
    {
        $note = Note::findOrFail($note);

        return view('notes.details', compact('note'));
    }
}
