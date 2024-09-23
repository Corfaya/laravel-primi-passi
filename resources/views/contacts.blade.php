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
                    <h1> {{ $title }} </h1>
                </div>
                <div class="col-12">
                    <h3> {{ $paragraph }} </h3>
                </div>
                <div class="col-12">
                    <form action="">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome o nickname</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Il tuo nome">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Scrivici qualcosa:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Invia</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>