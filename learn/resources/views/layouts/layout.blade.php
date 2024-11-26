<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Application Laravel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f9f9f9, #e3f2fd);
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .h1 {
            background: linear-gradient(90deg, #00ffff, #ff00c3);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 1.2rem;
            margin: 0;
            display: flex;
            align-items: center;
        }

        .logo {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            background: linear-gradient(90deg, #00ffff, #ff00c3);
            border-radius: 50%;
        }

        .link {
            all: unset;
            font-size: 1.2rem;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            position: relative;
            padding: 5px 10px;
        }

        .link:hover {
            background: none;
        }

        .link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background-color: #ff00c3;
            transition: width 0.3s ease;
        }

        .link:hover::after {
            width: 100%;
        }

        footer {
            background-color: #212529;
            height: 50px;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }
                /* ---------------------------------------------------------------------- */
        .employee-container {
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .employee-title {
            color: #d32f2f;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 3s ease-in-out;
        }
        
        .employee-list {
            list-style-type: none;
            padding: 0;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .employee-item {
            margin: 20px 0;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .employee-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
                
        .employee-link {
            display: block;
            text-decoration: none;
            color: #000;
            font-size: 1.2rem;
            text-align: center;
            padding: 15px;
            background: linear-gradient(to right, #fff, #f5f5f5);
            transition: all 0.3s ease-in-out;
        }
        
        .employee-link:hover {
            color: #fff;
            background: linear-gradient(to right, #2196f3, #1e88e5);
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <div class="logo"></div>
         <h1 class="h1">Gestion des Employés</h1>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li ><a class="link"  href="{{ route('employee') }}">Accueil</a></li>
            </ul>
          </div>
         </div>
        </nav>
    </header>

    <!-- Contenu principal -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Pied de page -->
    <footer>
        <p>&copy; 2024 Mon Application Laravel</p>
    </footer>

</body>
</html>
