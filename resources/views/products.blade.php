<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Laravel - first steps</title>
</head>
<body>
    <header class="bg-primary py-4 px-2">
        <div class="container">
            <ul class="list-unstyled d-flex">
                <li class="px-2"><a href="{{ route('homepage') }}" class="text-white fs-5 text-decoration-none fw-bold">Home</a></li>
                <li class="px-2"><a href="{{ route('products') }}" class="text-white fs-5 text-decoration-none fw-bold">Prodotti</a></li>
                <li class="px-2"><a href="{{ route('about-us') }}" class="text-white fs-5 text-decoration-none fw-bold">Chi siamo</a></li>
                <li class="px-2"><a href="{{ route('contact-us') }}" class="text-white fs-5 text-decoration-none fw-bold">Contattaci</a></li>
            </ul>
        </div>
    </header>

    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">
                        {{ $title }}
                    </h1>
                </div>
                @foreach ($items as $item)
                <div class="col-4">
                    <div class="card my-3">
                        <img src="https://placehold.co/400x400?text=Prodotto" class="card-img-top" alt="Item">
                        <div class="card-body">
                          <h5 class="card-title">{{$item}}</h5>
                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae ad illum totam alias ipsum aliquam exercitationem officiis quis placeat omnis! Soluta eligendi eos eveniet qui adipisci tenetur sapiente veritatis ipsam!</p>
                        </div>
                      </div>          
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>