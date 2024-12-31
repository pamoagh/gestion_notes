<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupération des notes depuis la base de données
        // Code pour afficher les notes, par exemple
        $notes = Note::all();
        return view('notes.index', compact('notes'));
        

    return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation de la requête
        $request->validate([
            'etudiant' => 'required|string',
            'ue' => 'required|string',
            'note' => 'required|numeric|min:0|max:20',
            'session' => 'required|string',
        ]);

        // Enregistrement de la nouvelle note
        Note::create([
            'etudiant_id' => $request->etudiant,
            'ue_id' => $request->ue,
            'note' => $request->note,
            'session' => $request->session,
            'date_evaluation' => now(), // Date actuelle
        ]);

        // Redirection ou retour avec message
        return redirect()->route('notes.index')->with('success', 'Note enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
