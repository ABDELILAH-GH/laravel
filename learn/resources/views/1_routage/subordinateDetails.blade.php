
@extends('layouts.layout')

@section('title', 'Liste des Employés')

@section('content')
@section('content')
    <ul>
        
    <p><strong>Nom :</strong> {{ $subordinate['prenom'] }} {{ $subordinate['nom'] }}</p>
    <p><strong>Poste :</strong> {{ $subordinate['poste'] }}</p>

    <br>
      
    </ul>
@endsection
