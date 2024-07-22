@extends('layouts.app')

@section('main')

<div class="container py-5">
    
    <div class="cocktail-edit">
        <form  action="{{route('cocktails.update', $cocktail)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="img" class="form-label">Imagine</label>
              <input type="text" class="form-control" id="img" name="img" value="{{ old('img', $cocktail->img)}}">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $cocktail->name)}}">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <input type="text" class="form-control" id="description" name="description" value="{{ old('description', $cocktail->description)}}">
            </div>
            <div class="mb-3">
              <label for="method" class="form-label">Metodo</label>
              <input type="text" class="form-control" id="method" name="method" value="{{ old('method', $cocktail->method)}}">
            </div>
            <div class="mb-3">
              <label for="glass_type" class="form-label">Tipo di bicchiere</label>
              <input type="text" class="form-control" id="glass_type" name="glass_type" value="{{ old('glass_type', $cocktail->glass_type)}}">
            </div>
            <div class="mb-3">
              <label for="ingredients" class="form-label">Ingredienti</label>
              <input type="text" class="form-control" id="ingredients" name="ingredients" value="{{ old('ingredients', $cocktail->ingredients)}}">
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Prezzo</label>
              <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $cocktail->price)}}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    
    </div>

</div>

    
@endsection

{{-- 

            $cocktail->img = 'https://www.cucchiaio.it/content/cucchiaio/it/ricette/2019/06/negroni/_jcr_content/header-par/image-single.img.jpg/1560847989682.jpg';
            $cocktail->name = $faker->firstName();
            $cocktail->description = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et architecto consequatur cum aliquam, ipsam accusantium.';
            $cocktail->method = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et architecto consequatur cum aliquam, ipsam accusantium.';
            $cocktail->glass_type = 'Wine Glass';
            $cocktail->ingredients = 'Campari, Vermouth, Ghiaccio, Gin, Arance';
            $cocktail->price = $faker->randomNumber(2, true);


--}}
