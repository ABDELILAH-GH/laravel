<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subordonnes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
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
    <h1>Subordonnes de {{ $employee['prenom'] }} {{ $employee['nom'] }}</h1>

    @if (count($employee['subordonnees']) > 0)
        <ul>
            @foreach ($employee['subordonnees'] as $subordinate)
                <li>
                    <strong>{{ $subordinate['prenom'] }} {{ $subordinate['nom'] }}</strong>, {{ $subordinate['poste'] }}
                    <br>
                    <a href="{{ route('subordinateDetails', ['id' => $employee['id'], 'subordinateId' => $subordinate['id']]) }}">
                        Voir les details
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun subordonne trouve  pour cet employee.</p>
    @endif

    <br>
</body>
</html>
