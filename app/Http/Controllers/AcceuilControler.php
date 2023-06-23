<?php

namespace App\Http\Controllers;

use app;
use App\Models\connexion;
use App\Models\connections;
use App\Models\inscription;
use Illuminate\Http\Request;
use App\Http\Requests\validate_connectionPost;
use App\Http\Requests\validate_inscription;

class AcceuilControler extends Controller
{
    public function app(){
        return view('acceuil');
    }

    public function acceuil(){
        return view('index');
    }

    public function connection(){
        return view('acceuil_connection');
    }

    public function creeCompt(){
        return view('cree_compt');
    }

    public function motPassOublier(){
        return view('reinit_mot_pass');
    }

    public function pannierP(){
        return view('pannier');
    }

    public function connectionPost(connexion $connexions, validate_connectionPost $request){
        $verif1 = $request;
        
        if($verif1){
            echo "oki";
            } else {
               return redirect()->back();
            }
        connexion::create([
            'email' => $request->email,
            'passwords' => $request->passwd
        ]);

        
// $user->email =  $request->email;
// $user->passwords = Hash::make( $request->passwd);
return redirect()->back()->with('success', 'Operation valide');

    }

    public function connectionPost2(inscription $inscription,validate_inscription $request){
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

