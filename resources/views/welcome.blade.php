<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body class="bg-dark">

        <main>
            <div class="container">
                <div class="row">   
                    <h1 class="text-center my-4 text-white">Classici in uscita oggi al cinema</h1>
                    @foreach ($movies as $movie)
                        <div class="col-6">
                            
                            <div class="card d-flex rounded-0">
                                <div class="card-body">
                                    <h4 class="d-inline">{{ $movie->id }} - </h4>
                                    <h4 class="card-title d-inline">{{ $movie->title }}</h4>
                                    <h5 class="card-title d-inline">({{ $movie->original_title }})</h5>
                                    <h6 class="card-title text-secondary mt-1">Valutazione media: {{ $movie->vote }}</h6>
                                    <h6 class="card-title">Data di uscita: {{ $movie->date }}</h6>
                                </div>
                            </div>
                            
                        </div>

                    @endforeach
                </div>
            </div>
        </main>

    </body>
</html>
