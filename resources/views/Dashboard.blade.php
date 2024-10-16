<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BNKaryawan</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f7f7f7;
            /* Krem Putih yang Lembut */
            color: #333333;
        }

        .sidebar {
            width: 250px;
            background-color: #004d7a;
            /* Biru Laut Lebih Terang */
            color: #ffffff;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-size: 40px;
            text-align: center;
            margin-bottom: 30px;
            color: #ffffff;
        }

        .sidebar img {
            display: block;
            margin: 0 auto 35px auto;
            height: 60px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 12px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #3874b3;
            /* Biru yang Lebih Terang */
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            background-color: #ffffff;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #3874b3;
            /* Biru Lebih Terang */
            color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .header img {
            height: 100px;
        }

        .btn {
            background-color: #5cb85c;
            /* Hijau Cerah */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px;
        }

        .btn:hover {
            background-color: #449d44;
            /* Hijau Lebih Gelap */
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card h3 {
            margin-top: 0;
            font-size: 18px;
            color: #004d7a;
            /* Warna Biru Tua */
        }

        .chart-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .chart-container h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #004d7a;
            /* Warna Biru */
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <img src="{{ asset('images/bn.png') }}" alt="Logo">
        <h2>BNKaryawan</h2>
        <ul>
            @can('isManager')
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/employee_records') }}">Catatan Pelanggaran</a></li>
            @endcan
            @can('isAdmin')
                <li><a href="{{ url('/employee') }}">Karyawan</a></li>
            @endcan
            <li><a href="{{ url('/settings') }}">Settings</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="header">
            <div>
                <button class="btn">Profile</button>
                <button class="btn">Settings</button>
                <button class="btn">Logout</button>
            </div>
        </div>

        @yield('content')

        <div class="card">
            <h3>Aktivitas Terkini</h3>
            <p>Di sini Anda dapat melihat aktivitas terkini terkait karyawan dan pembaruan penting lainnya.</p>
        </div>

        <div class="chart-container">
            <h3>Ikhtisar Kinerja</h3>
            <canvas id="performanceChart"></canvas>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('performanceChart').getContext('2d');
            var performanceChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                    datasets: [{
                        label: 'Performance Karyawan',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: 'rgba(92, 184, 92, 0.2)',
                        /* Hijau Muda */
                        borderColor: 'rgba(92, 184, 92, 1)',
                        /* Hijau */
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>
