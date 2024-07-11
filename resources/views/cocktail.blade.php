@extends('layouts.app')
@section('main')
  <div class="container mt-5">
    <h1 class="mb-3">All Cocktails</h1>
    <div class="row">
      @foreach ($cocktails as $cocktail)
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="card-body">
              <img class="w-100 mb-3" src="{{ $cocktail->img }}" alt="{{ $cocktail->img }}">
              <h5 class="card-title">{{ $cocktail->name }}</h5>
              <p class="card-text">{{ $cocktail->description }}</p>
              <p><strong>Ingredients:</strong> {{ $cocktail->ingredients }}</p>
              <p><strong>Method:</strong> {{ $cocktail->method }}</p>
              <p><strong>Glass Type:</strong> {{ $cocktail->glass_type }}</p>
              <p><strong>Price:</strong> {{ $cocktail->price }}$</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
