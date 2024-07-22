<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use App\Http\Requests\StoreCocktailRequest;
use App\Http\Requests\UpdateCocktailRequest;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();

        return view('cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cocktails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {

        // Create a new cocktail
        $cocktail = new Cocktail;
        $cocktail->name = $request->input('name');
        $cocktail->description = $request->input('description');
        $cocktail->ingredients = $request->input('ingredients');
        $cocktail->method = $request->input('method');
        $cocktail->glass_type = $request->input('glass_type');
        $cocktail->price = $request->input('price');
        $cocktail->img = $request->input('img');

        $cocktail->save();

        return redirect()->route('cocktails.index')->with('success', 'Cocktail created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, Cocktail $cocktail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
        $cocktail->delete();
        return redirect()->route('cocktails.index')->with('success', 'Cocktail deleted successfully.');
    }
}
