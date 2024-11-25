<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details du Subordonne</title>
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
    <h1>Details du Subordonne</h1>
    <p><strong>Nom :</strong> {{ $subordinate['prenom'] }} {{ $subordinate['nom'] }}</p>
    <p><strong>Poste :</strong> {{ $subordinate['poste'] }}</p>

    <br>
</body>
</html>
