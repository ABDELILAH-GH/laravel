@extends('layouts.layout')

@section('title', 'Liste des Employés')

@section('content')
    <div class="employee-container">
        <h1 class="employee-title">Subordonnés de {{ $employee['prenom'] }} {{ $employee['nom'] }}</h1>

        @if (!empty($employee['subordonnees']))
            <ul class="employee-list">
                @foreach ($employee['subordonnees'] as $subordinate)
                    <li class="employee-item">
                        <p>{{ $subordinate['prenom'] }} {{ $subordinate['nom'] }} - {{ $subordinate['poste'] }}</p>
                        <a href="{{ route('subordinateDetails', ['id' => $employee['id'], 'subordinateId' => $subordinate['id']]) }}" class="employee-link">
                            Voir les détails
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Aucun subordonné trouvé pour cet employé.</p>
        @endif
    </div>
@endsection
