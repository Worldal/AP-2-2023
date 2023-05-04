<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;

class HistoriqueController extends Controller
{
    public function index()
    {
        $currentDate = date('Y-m-d');
        // Récupère l'ID de l'utilisateur actuellement authentifié...
        $user = Auth ::id();
        $historique= Place::where('DATE_COMMANDE' < $currentDate);
        return redirect()->route('dashboard' , compact('historique'));
    }
}
