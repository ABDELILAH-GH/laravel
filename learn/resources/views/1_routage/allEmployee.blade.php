@extends('layouts.layout')

@section('title', 'Liste des Employés')

@section('content')
    <div class="employee-container">
        <h1 class="employee-title">Liste des Employés</h1>
        <ul class="employee-list">
            @foreach ($employees as $employee)
                <li class="employee-item">
                    <a class="employee-link" href="{{ route('employee', ['id' => $employee['id']]) }}">
                        {{ $employee['prenom'] }} {{ $employee['nom'] }} (ID: {{ $employee['id'] }})
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
