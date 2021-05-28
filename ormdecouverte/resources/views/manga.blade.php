@extends('layouts.layout')

@section('titrePage')
    Information sur le Manga
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Titre : {{ $manga->titre }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Dessinateur : {{ $manga->nomDessinateur }}</p>
                <p>Scénariste : {{ $manga->nomScenariste }}</p>
                <p>Genre : {{ $manga->genre }}</p>
                <hr>
                <p>Prix : {{ $manga->prix }}</p>
            </div>
        </div>
    </div>
@endsection