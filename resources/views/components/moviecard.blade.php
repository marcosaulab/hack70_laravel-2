<div class="card {{ $pageIs == 'homepage' ? 'text-center' : '' }} bg-dark text-light" style="width: 18rem;">
    <img src="/img/{{ $movieImg }}" class="card-img-top" alt="{{ $movieTitle }}">
    <div class="card-body">
        <h5 class="card-title">{{ $movieTitle }}</h5>
        <p class="card-text cardText">Regista: {{ $movieDirector }}</p>
        <p class="card-text cardText">Year: {{ $movieYear }}</p>
        <p class="card-text">
            <a href="{{ route('movie.genre', ['genre' => $movieGenre ]) }}">
                Genere: {{ $movieGenre }}
            </a>
        </p>
        <p class="card-text">Duration: {{ $movieDuration }}</p>
        <a href="{{ route('movie.show', ['id' => $movieId ]) }}" class="btn btn-primary">Scopri di più</a>
    </div>
</div>