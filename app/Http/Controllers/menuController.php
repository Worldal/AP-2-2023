<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Plat;

class menuController extends Controller 
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */

    public function index()
    {
        
        $plats = Plat::all();

        return view ('menu.index', compact('plats'));
    }

    /*
    public function create($user) 
    {
        $user = Auth::Compte()->id;
        // A completer
        $commande = new Place();
        $commande->id = $user ;
        $commande -> save() ; 
        return view ('menu.validation', $user);
    }*/
}
