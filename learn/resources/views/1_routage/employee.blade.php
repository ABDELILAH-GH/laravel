@extends('layouts.layout')

@section('title', 'Détails de l\'Employé')

@section('content')
    <div class="employee-container">
        <!-- Titre avec le style défini -->
        <h1 class="employee-title">Les informations de {{ $employee['prenom'] }} {{ $employee['nom'] }}</h1>

        @if (isset($error))
            <p>{{ $error }}</p>
            <p>ID fourni : {{ $id }}</p>
        @else
            <p><strong>Nom :</strong> {{ $employee['prenom'] }} {{ $employee['nom'] }}</p>
            <p><strong>Âge :</strong> {{ $employee['age'] }}</p>

            <!-- Lien vers les subordonnés avec le style défini -->
            <a href="{{ route('subordinates', ['id' => $employee['id']]) }}" class="employee-link">
                Voir les subordonnés
            </a>
        @endif
    </div>
@endsection
