<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details de l'Employe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        p {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @if (isset($error))
        <h1>{{ $error }}</h1>
        <p>ID fourni : {{ $id }}</p>
    @else
        <h1>Details de d'Employee</h1>
        <p><strong>Nom :</strong> {{ $employee['prenom'] }} {{ $employee['nom'] }}</p>
        <p><strong>Age :</strong> {{ $employee['age'] }}</p>
        <a href="{{ route('subordinates', ['id' => $employee['id']]) }}">Voir les subordonnes</a>
    @endif
</body>
</html>
