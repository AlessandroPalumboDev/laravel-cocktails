<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//todo va aggiunto: use App\odels\Cocktail;

class CocktailController extends Controller
{
    public function trains() {

        $cocktails = Cocktail::all();

        return view('cocktail', compact('cocktails'));
    }

}
