<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request)
    {
        Note::create([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
        ]);

        return redirect()->back();
    }
}
