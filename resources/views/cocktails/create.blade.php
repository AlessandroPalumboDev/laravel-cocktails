@extends('layouts.app')

@section('main')
  <div class="container mt-5">
    <h1 class="mb-3">Create New Cocktail</h1>
    <form action="{{ route('cocktails.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="ingredients">Ingredients</label>
        <textarea class="form-control" id="ingredients" name="ingredients" rows="3" required></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="method">Method</label>
        <textarea class="form-control" id="method" name="method" rows="3" required></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="glass_type">Glass Type</label>
        <input type="text" class="form-control" id="glass_type" name="glass_type" required>
      </div>
      <div class="form-group mb-3">
        <label for="price">Price ($)</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
      </div>
      <div class="form-group mb-3">
        <label for="img">Image</label>
        <input type="text" class="form-control" id="img" name="img" required>
      </div>
      <button type="submit" class="btn btn-primary mb-5">Create Cocktail</button>
    </form>
  </div>
@endsection
