<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreeleveRequest;
use App\Http\Requests\UpdateeleveRequest;
use App\Models\eleve;
// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(eleve $eleves)
    {
        $eleves = eleve::all();
        return view('listeEleves')->with('eleves', $eleves); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('ajouterEleve');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreeleveRequest $request)
    {      
        // $request->validate([
        //     'nom' => 'required|string|min:5|max:50',
        //     'prenom' => 'required|string|min:5|max:50',
        //     'date_naissance' => 'required|string|regex:/^\d{4}-\d{2}-\d{2}$/',
        //     'classe' => 'required|string|in:6eme,5eme,4eme,3em,2nd,1ere,Tle',
        //     'sexe' => 'required|string|in:Masculin,Féminin',
            
        //     'messages' => [
        //         'nom.required' => 'Le champ nom est requis.',
        //         'nom.string' => 'Le champ nom doit être une chaîne de caractères.',
        //         'nom.min' => 'Le champ nom doit contenir au moins :min caractères.',
        //         'nom.max' => 'Le champ nom ne peut pas dépasser :max caractères.',
                
        //         'prenom.required' => 'Le champ prénom est requis.',
        //         'prenom.string' => 'Le champ prénom doit être une chaîne de caractères.',
        //         'prenom.min' => 'Le champ prénom doit contenir au moins :min caractères.',
        //         'prenom.max' => 'Le champ prénom ne peut pas dépasser :max caractères.',
                
        //         'date_naissance.required' => 'Le champ date de naissance est requis.',
        //         'date_naissance.string' => 'Le champ date de naissance doit être une chaîne de caractères.',
        //         'date_naissance.regex' => 'Le format de la date de naissance est incorrect. Utilisez le format YYYY-MM-DD.',
                
        //         'classe.required' => 'Le champ classe est requis.',
        //         'classe.string' => 'Le champ classe doit être une chaîne de caractères.',
        //         'classe.in' => 'La classe spécifiée n\'est pas valide.',
                
        //         'sexe.required' => 'Le champ sexe est requis.',
        //         'sexe.in' => 'La valeur du champ sexe n\'est pas valide.',
        //     ],
        // ]);


        // $request->validated($request->all());
        //   dd($request);
        $eleve = new Eleve();
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->date_naissance = $request->input('date_naissance');
        $eleve->classe = $request->input('classe');
        $eleve->sexe = $request->input('sexe');
        $eleve->save();
        return view('listeEleves')->with('success', 'L\'élève a été ajouté avec succès.');    }

    /**
     * Display the specified resource.
     */
    public function show(eleve $eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eleve $eleve, $id)
    {
        $eleve = eleve::find($id);

        return view('ajouterEleve', ['eleve' => $eleve]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateeleveRequest $request, eleve $eleve, $id)
    {
        $eleve = eleve::findOrFail($id);
        return  view('ajouterEleve');
        $eleve->update([
            'nom'=>$request->get('nom'),
            'prenom'=>$request->get('prenom'),
            'date_naissance'=>$request->get('date_naissance'),
            'classe'=>$request->get('classe'),
            'sexe'=>$request->get('sexe'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eleve $eleve)
    {
        //
    }
}
