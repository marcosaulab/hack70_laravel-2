<x-layout>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Film Genere: {{ $genre }}</h1>
            </div>
        </div>
    </div>

        <div class="container">
        <div class="row my-5">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-4 my-2">
                        <x-moviecard 
                            movieId="{{ $movie['id'] }}"
                            movieTitle="{{ $movie['title'] }}"
                            movieImg="{{ $movie['img'] }}"
                            movieDirector="{{ $movie['director'] }}"
                            movieYear="{{ $movie['year'] }}"
                            movieGenre="{{ $movie['genre'] }}"
                            movieDuration="{{ $movie['duration'] }}"
                            pageIs="gnere"
                        />
                    </div>
                @endforeach
        </div>
    </div>
</x-layout>