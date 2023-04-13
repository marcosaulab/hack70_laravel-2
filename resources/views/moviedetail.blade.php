<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>{{ $movie['title'] }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
                <div class="col-6">
                    <img src="/img/{{ $movie['img'] }}" class="img-fluid w-50" alt="{{ $movie['title'] }}">
                </div>
                <div class="col-6">
                    <h5>Trama</h5>
                    <p> {{ $movie['description'] }} </p>
                    <h5>Anno</h5>
                    <p> {{ $movie['year'] }} </p>
                    <p class="card-text">Regista: {{ $movie['director'] }}</p>
                    <p class="card-text">Genere: {{ $movie['genre'] }}</p>
                    <p class="card-text">Duration: {{ $movie['duration'] }}</p>
                </div>
        </div>
    </div>

</x-layout>