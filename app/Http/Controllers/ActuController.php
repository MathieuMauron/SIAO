<?php

namespace App\Http\Controllers;

use App\Models\Actualites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActuController extends Controller
{

    public function addActualite(Request $request){
        // dd($request);
        if(Auth::user()->email==="admin@gmail.com"){
            $request->validate([
                'titre' => 'required',
                'content' => 'required',
                'accroche' => 'required',
            ]);
            Actualites::create([
                'titre' => $request->titre,
                'content' => $request->content,
                'accroche' => $request->accroche,
                'nom'=> Auth::user()->name,
            ]);        
            return to_route('actualites');
        }
    }


    public function delActu($id) {
        $actu = Actualites::find($id);
        $actu->delete();
        return to_route('actualites');
    }

    public function editActu($id){
        $actualite = Actualites::find($id);
        $actualite->titre = request('titre');
        $actualite->accroche = request('accroche');
        $actualite->content = request('content');
        $actualite->save();
    
        return to_route('actualites'); 
    }
}
