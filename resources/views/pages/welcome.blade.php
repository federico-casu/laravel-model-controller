{{-- 
    
    Oggi facciamo la nostra prima vera interazione con il database utilizzando l’ORM di Laravel.
    1 - Create un nuovo progetto Laravel 10
    2 - tramite phpMyAdmin create un nuovo database laravel_model_controller
    3 - Importate nel vostro database la tabella movies in allegato
    4 - inserite le vostre credenziali per il database nel file .env
    5 - Create un model Movie
    php artisan make:model Movie
    6 - Create un controller che gestirà la rotta /
    php artisan make:controller Guest/PageController
    7 - All’interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
    
--}}

{{-- {{ dd($movies) }} --}}

@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        <div class="row justify-content-between">
            @foreach ($movies as $movie)
                <div class="card">
                    <div class="card-body d-flex flex-column gap-2">
                        <span>Id: {{ $movie['id'] }}</span>
                        <h4 class="card-title">{{ $movie['title'] }}</h4>
                        <h6 class="card-title">{{ $movie['original_title'] }}</h6>
                        <span>Nationality: {{ ucfirst($movie['nationality']) }}</span>
                        <span>Date: {{ $movie['date'] }}</span>
                        <span>Vote: {{ $movie['vote'] }}</span>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
@endsection