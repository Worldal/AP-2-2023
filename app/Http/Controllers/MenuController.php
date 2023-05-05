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

        return view('menu.index', compact('plats'));
    }

    public function store(Request $request)
    {
        // Récupération de l'id du compte connecté
        // La table Compte a une clé primaire ID_COMPTE
        $user = Auth::user()->ID_COMPTE;

        //Penser à remplacer "==" par "!="
        // Pour que cela prend comme condition que c'est connecté
        if ($user != NULL) {
            $platsIdWithQte = $request->input('orderId');

            var_dump($_POST);

            $commande = new Emporter();
            $commande->ID_COMPTE = $user;
            $commande->DATE_COMMANDE = now();

            // Date de retrait dans + 1h
            $commande->DATE_RETRAIT = now()->addHour(1);

            // Le commentaire null n'est pas accepté par la BDD, il faut donc mettre une valeur par défaut
            // ici j'ai mis "Validation de l'AP"
            $commande->COMMENTAIRE = "Validation de l'AP";

            $prixTotal = 0;
            foreach ($platsIdWithQte as $platId => $platQte) {
                $plat = Plat::where('ID_PLAT', $platId)->first();
                $prixTotal += $plat->PRIX_HT;
            }
            $commande->FACTURE = $prixTotal;
            $commande->save();

            foreach ($platsIdWithQte as $platId => $platQte) {
                $plat = Plat::where('ID_PLAT', $platId)->first();

                if (!$plat->STOCK_PLAT = 0 && $platQte > 0) {
                    // On ne peut pas commander plus de plats que ce qu'il y a en stock
                    // On ne peut pas commander 0 plats

                    $quantite = new QuantitePlatEmporter();
                    $quantite->ID_COMMANDE_EMPORTER = $commande->id;
                    $quantite->ID_PLAT = $platId;
                    $quantite->QUANTITE = $platQte;
                    $quantite->save();
                }
            }

            return redirect()->route('menu.validation');
        } else {
            return redirect()->route('login');
        }
    }

    public function validation()
    {
        return view('menu.validation');
    }
}
