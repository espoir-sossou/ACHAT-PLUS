<?php

namespace App\Http\Controllers;

use App\Models\Rein;
use App\Models\watch;
use App\Models\watchModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\watchRequest;

class authController extends Controller
{
    public function dashboars(){
    
        return view('user.authentifier');
       }

       public function dashboarsPanel(){
        return view('user.dashboards');
       }

       public function produits(){
        return view('user.produits');
       }

       public function acceuil(){
        return view('user.Dash_acceuil');

       }

       public function AjoutBannieres(){
        return view('user.Ajout_Bannieres');

       }

      

       public function AjoutWatch(){
        $achat = Rein::all();
        return view('user.Ajout_Watch',[
            'achat'=>$achat,
        ]);
       }

       public function AjoutWatchPOSTS(Request $request){
        $file=$request->File('imgs');
        $achat = new Rein();
        if($file!= NULL){
            $extention=  $file->getClientOriginalName();
            $filename= time().'.'.$extention;
            $file-> move('./images/', $filename);
            $achat->imgs=$filename;
        }

        // $achat->prix = $filename;
        $achat->prix = $request->prix;
        $achat->description = $request->description;
 
        $result1 = $achat->save();;

        if($result1){
            return 'ff';
        }else{
            return redirect()->back();
        }
        $result2 = $request;
        if($result2){
        }else{
            return redirect()->back();
        }

       }
       public function Updates($id){
        $achat = Rein::find($id);
        return view('user.Update', [
            'achat'=>$achat,
        ]);
       }
       
}
