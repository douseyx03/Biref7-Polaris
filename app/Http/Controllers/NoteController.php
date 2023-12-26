<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorenoteRequest;
use App\Http\Requests\UpdatenoteRequest;
use App\Models\eleve;
use App\Models\note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajouterNote');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenoteRequest $request,eleve $eleve)
    {
        $note = new note();
        $note->matiere = $request->input('matiere');
        $note->note = $request->input('note');
        $note->save();
        return view('afficherEleve', ['eleve' => $eleve]);
    }

    /**
     * Display the specified resource.
     */
    public function show(note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenoteRequest $request, note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(note $note)
    {
        //
    }
}
