<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session; // Importez la classe Session


use App\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom'); // Utilisez $request->input() pour obtenir les valeurs des champs du formulaire
        $etudiant->prenom = $request->input('prenom');
        $etudiant->classe = $request->input('classe');
        $etudiant->save();

        return redirect('/ajouter')->with('success', 'L\'étudiant a bien été ajouté avec succès.');

    }

    public function modifier_etudiant($id)
    {
        $etudiant = Etudiant::find($id);

        return view('etudiant.modifier', compact('etudiant'));
    }

    public function modifier_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required',
        ]);

        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->classe = $request->input('classe');
        $etudiant->save();

        return redirect('/etudiant')->with('success', 'L\'étudiant a bien été modifié avec succès.');
    }



  
public function supprimer_etudiant($id)
{
    $etudiant = Etudiant::find($id);
    $etudiant->supprimer();

    // Redirigez l'utilisateur vers la liste des étudiants avec un message de succès
    return redirect('/etudiant')->with('success', 'L\'étudiant a bien été supprimé avec succès.');
}

    
}


