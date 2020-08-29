<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Note;

class NotesController extends Controller
{
    public function create() {
        return view('notes.create');
    }

    public function insert(NoteRequest $request) {
            $data = $request->all();
            Note::create($data);
            return redirect(url('/notes'));
    }

    public function list() {
        $notes = Note::all();
        return view('notes.list')
        ->withNotes($notes)
        ;
    }
}
