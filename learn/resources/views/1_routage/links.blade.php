<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Links</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 0;
            background: linear-gradient(to right, #f9f9f9, #e3f2fd);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            color: #d32f2f;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 30px;
            animation: fadeIn 3s ease-in-out;
        }
        ul {
            list-style-type: none;
            padding: 0;
            max-width: 400px;
            margin: 0 auto;
        }
        li {
            margin: 20px 0;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        li:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        a {
            display: block;
            text-decoration: none;
            color: #000;
            font-size: 1.2rem;
            text-align: center;
            padding: 15px;
            background: linear-gradient(to right, #fff, #f5f5f5);
            transition: all 0.3s ease-in-out;
        }
        a:hover {
            color: #ffffff;
            background: linear-gradient(to right, #2196f3, #1e88e5);
        }
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        } 
    </style>

</head>
<body>
    <h1>Links to Employee Pages</h1>
   <ul>
      <li><a href="{{route('employee')}}">employee</a></li>
      <li><a href="{{route('subordinates',['id'=>1])}}">subordinates</a></li>
      <li><a href="{{route('subordinateDetails',['id'=>1 , 'subordinateId' => 1])}}">subordinateDetails</a></li>
   </ul>
</body>
</html>
l