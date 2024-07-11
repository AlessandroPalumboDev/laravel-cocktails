<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function cocktail() {

        $cocktails = Cocktail::all();

        return view('cocktail', compact('cocktails'));
    }

}
