<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    public function index(){
        $etudiants = Etudiant::orderBy('nom','asc')->paginate(5);
        return view('etudiant', compact('etudiants'));
        
    }

    public function create(){
        $classes = Classe::all();
     
        return view('createEtudiant', compact('classes')); 
    }

    public function edit(Etudiant $etudiant){
        $classes = Classe::all();
     
        return view('editEtudiant', compact('etudiant','classes')); 
    }

    public function store(Request $request){
         
         $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe_id' => 'required',

         ]);
         
         Etudiant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'classe_id' => $request->classe_id
         ]);

         return back()->with('success','Etudiant ajoute avec success ');

    }

    public function delete(Etudiant $etudiant){
        $nomComplet = $etudiant->nom.' '.$etudiant->prenom;
       
        $etudiant->delete();
        return back()->with('successDelete' , 'l\'etudiant '. $nomComplet.' supprime ave succes');

    }



    public function update(Request $request , Etudiant $etudiant){
         
        $request->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'classe_id' => 'required',

        ]);
        
        $etudiant->update([
           'nom' => $request->nom,
           'prenom' => $request->prenom,
           'classe_id' => $request->classe_id
        ]);

        return back()->with('successUpdate','Etudiant mise a jour avec success ');

   }
    
    
}
