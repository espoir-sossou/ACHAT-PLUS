<?php

namespace App\Http\Controllers;

use App\Models\inscription;
use Illuminate\Http\Request;

class inscriptionController extends Controller
{
   public function creeCompt2(inscription $inscription,validate_inscription $request){

    $verif2 = $request;
        
    if($verif2){
        echo "oki";
        } else {
           return redirect()->back();
        }

    inscription::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'passwd' => $request->passwd
    ]);
    return redirect()->back()->with('success', 'Operation valide');
   }

}
