<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BN</title>
    <title>Karyawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #2c3e50;
            color: white;
            padding: 30px;
            min-height: 100vh;
        }

        .sidebar h2 {
            margin-top: 0;
            font-size: 45px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 30px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 17px;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        .content {
            flex: 1;
            padding: 25px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .header img {
            height: 100px;
        }

        .btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            margin-left: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .card {
            background-color: #ecf0f1;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>BN</h2>
        <h2>Karyawan</h2>
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('header')
        @yield('content')
    </div>
    <script>
        // Your JavaScript here
    </script>
</body>

</html>
