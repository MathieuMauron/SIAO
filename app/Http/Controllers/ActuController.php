<?php

namespace App\Http\Controllers;

use App\Models\Actualites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActuController extends Controller
{
    public function addActualite(Request $request) {
        Actualites::create([
            "titre" => $request->titre,
            "content" => $request->content,
            "accroche" => $request->accroche,
            "nom" => Auth::user()->name,
        ]);  
        return to_route('actualites');  
    }
}
