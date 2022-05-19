<?php

namespace App\Http\Controllers;

use App\Models\Livres;
use App\Models\Auteurs;
use Illuminate\Http\Request;

class LivresController extends Controller
{
  

   public function getAll () {
        $livres = Livres::with('auteur')->get();
        $auteurs = Auteurs::all();

       return view('livres', [
           'titre' => "Liste des livres",
           'livres' => $livres,
           'auteurs' => $auteurs,
       ]);
   }

   public function add(Request $request){
    //    dd($request->input());
       $input = $request->input();


       $livre = new Livres();
       $livre->titre = $request['titre'];
       $livre->extrait = $request['extrait'];
       $livre->id_auteur = $request->auteurs;
       $livre->save();

       return redirect()->route('livres');
       
   }

   public function delete($id) {
       
    $livre = Livres::find($id);
    $livre->delete();

    return redirect()->route('livres');
    
    }


   public function show($id) {
       
    $livre = Livres::find($id);
    if (isset($livre)) {
        return view('livre', [
            'livre' => $livre,
        ]);
    } else {
        return redirect()->route('livres');
    }
        
   }
}
