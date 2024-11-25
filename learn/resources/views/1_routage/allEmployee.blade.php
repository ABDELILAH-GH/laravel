<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employees</title>
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
    <h1>Liste des Employees</h1>
    <ul>
        @foreach ($employees as $employee)
            <li>
                <a href="{{ route('employee', ['id' => $employee['id']]) }}">
                    {{ $employee['prenom'] }} {{ $employee['nom'] }} (ID: {{ $employee['id'] }})
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
