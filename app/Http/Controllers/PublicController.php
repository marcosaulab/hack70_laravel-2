<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public $movies = [
        [
            'id' => 1,
            'title' => 'Avatar 2',
            'director' => 'James Cameron',
            'year' => '2023',
            'genre' => 'azione',
            'duration' => '2.5h',
            'img' => 'avatar2.jpg',
            'description' => "Un giorno, però, gli umani fanno ritorno su Pandora per colonizzarla, distruggendo ettari di terra per costruire una nuova base operativa. Tra i nuovi arrivati c'è anche Quaritch, clonato in un corpo Na'vi e dotato degli stessi ricordi del suo sé originale, che aveva caricato su un hard drive prima di morire. In un videomessaggio lasciato prima dello scontro in cui ha perso la vita Quaritch chiede al suo clone di vendicarlo nel caso dovesse morire, indicando Sully come responsabile della rivolta Navi."
        ],
        [
            'id' => 2,
            'title' => 'Le Pagine della nostra vita',
            'director' => 'Nick Cassavetes',
            'year' => '2004',
            'genre' => 'drammatico',
            'duration' => '2h',
            'img' => 'paginenostravita.jpg',
            'description' => "Allie ha il morbo di Alzheimer e vive in una casa di cura. Ogni giorno, l'anziano Duke le legge lo stesso libro. Si tratta del diario di una storia d'amore ambientata nella Carolina del Sud negli anni 40."
        ],
        [
            'id' => 3,
            'title' => 'Kill Bill',
            'director' => 'Quentin Tarantino',
            'year' => '2003',
            'genre' => 'azione',
            'duration' => '1.5h',
            'img' => 'killbill.jpg',
            'description' => "Risvegliatasi dal coma, una assassina va alla ricerca del suo ex capo e della gang responsabile dell'agguato in cui è caduta quattro anni prima."
        ],
        [
            'id' => 4,
            'title' => 'Benvenuti Al Sud',
            'director' => 'Luca Miniero',
            'year' => '2019',
            'genre' => 'commedia',
            'duration' => '2h',
            'img' => 'benvenutialsud.jpg',
            'description' => "Alberto Colombo, un direttore delle Poste che vive in un paesino della Brianza, viene trasferito a guidare l'ufficio postale del piccolo paese di Castellabate in seguito ad una richiesta andata non propriamente a buon fine. L'uomo, inizialmente perplesso dalla situazione, viene accolto a braccia aperte dal postino Mattia e dai colleghi, iniziando ad apprezzare le bellezze e le abitudini del piccolo centro campano."
        ],
    ];

    public $staff = [ 
        [
            'name' => 'Mario',
            'surname' => 'Rossi',
            'role' => 'Direttore',
        ],
        [
            'name' => 'Anna',
            'surname' => 'Bianchi',
            'role' => 'Attrice',
        ],
        [
            'name' => 'Pinco',
            'surname' => 'Pallino',
            'role' => 'Doppiatore',
        ],
    ];

    public function homepage() {

        // ! come secondo parametro della view passo un array chiave valore:
        // ! il nome della chiave (a sinistra della freccettona) è esattamente il nome della varibile che voglio usare nella vista
        // ! il dato che passo (a destra della freccettona) è il valore del parametro che sto passando

        return view('welcome', ['movies' => $this->movies]);
    }

    public function staff(){

                                // staff a sinistrsa di => è il nome della variabile che voglio usare all'interno della vista
                                // $staff è l'array che abbiamo definito più sopra in questa rotta 
        return view('aboutus', ['staff' => $this->staff]);

    }

    public function movieShow($id){

        foreach($this->movies as $movie){
            if($movie['id'] == $id){
                return view('moviedetail', ['movie' => $movie]);
            }
        }

        abort(404); // funzione che ritorna un 404 se il parametro non esiste, o meglio, se l'uri non esiste

    }

    public function movieByGenre($genre){

        $movieByGenre = [];

        foreach ($this->movies as $movie) {
            if ($movie['genre'] == $genre) {
                $movieByGenre[] = $movie;
            }
        }
        
        return view('movie-genre', ['movies' => $movieByGenre, 'genre' => $genre]);

    }
}
