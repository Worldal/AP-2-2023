<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Models\Compte;
use App\Models\Emporter;
use Illuminate\Http\Request;
use Illuminate\Console\Command;
use App\Http\Controllers\Controller;
use App\Models\QuantitePlatEmporter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

        return redirect()->route('menu' , compact('plats'));
    }

    public function store(Request $request)
    {

        $user = Auth::id();
        if($user !=0 )
        {
            $platsIdWithQte = $request->input('orderId');

            $commande = new Emporter();
            $commande->ID_CLIENT = $user;
            $commande->DATE_COMMANDE = now();

            $prixTotal = 0;
            foreach($platsIdWithQte as $platId => $platQte)
            {
                $plat = Plat::where('ID_PLAT', $platId)->first();
                $prixTotal += $plat->PRIX_HT;
            }
            $commande->FACTURE = $prixTotal;
            $commande->save();


                foreach($platsIdWithQte as $platId => $platQte)
                {
                    $plat = Plat::where('ID_PLAT', $platId)->first();

                    if(!$plat->STOCK_PLAT = 0 && $platQte > 0)
                    {
                        $quantite = new QuantitePlatEmporter();
                        $quantite->ID_COMMANDE_EMPORTER = $commande->id;
                        $quantite->ID_PLAT = $platId;
                        $quantite->QUANTITE = $platQte;
                        $quantite->save();
                    }
                    else
                    {
                        return redirect()->route('menu');
                    }
                }
                return redirect()->route('menu');
            }
        else
        {
            return redirect()->route('login');
        }
    }

    public function validation()
    {
        return redirect()->route('validation');
    }
}

