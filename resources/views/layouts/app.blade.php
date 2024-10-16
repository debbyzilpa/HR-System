<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BNKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style for the navbar */
        .navbar {
            background-color: #ff0000; /* Green background */
            padding: 1rem;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #000000; /* White text */
        }

        .nav-link {
            color: #000000;
            margin-left: 1rem;
            font-size: 1.1rem;
        }

        .nav-link:hover {
            color: #000000; /* Light green when hovering */
        }

        .navbar-toggler-icon {
            background-color: #000000;
        }

        /* Container styling */
        .container {
            background-color: #FFF6EA; /* Light grey background */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }

        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #2c3e50; /* Light background */
        }

        /* Footer if needed */
        footer {
            background-color: #9df1a0;
            color: #000000;
            text-align: center;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Style for buttons inside the content */
        .btn-custom {
            background-color: #4CAF50;
            color: #000000;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #000000;
        }

    </style>
</head>
<body>
    <div class="container my-5">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
