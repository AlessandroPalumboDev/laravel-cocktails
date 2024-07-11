<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
</head>
<body>
    <main>
        <div class="container mt-5">
        <h1>All Cocktails</h1>
        <div class="row">
            @foreach ($cocktails as $cocktail)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cocktail->name }}</h5>
                            <p class="card-text">{{ $cocktail->description }}</p>
                            <p><strong>Ingredients:</strong> {{ $cocktail->ingredients }}</p>
                            <p><strong>Method:</strong> {{ $cocktail->method }}</p>
                            <p><strong>Glass Type:</strong> {{ $cocktail->glass_type }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </main>
</body>
</html>