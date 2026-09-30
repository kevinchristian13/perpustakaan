<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Perpustakaan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 24px;
        }
        p {
            color: #7f8c8d;
            margin-bottom: 30px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            box-sizing: border-border-box;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        .btn-secondary {
            background-color: #2ecc71;
        }
        .btn-secondary:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>Sistem Perpustakaan</h1>
    <p>Selamat datang di aplikasi simulasi tugas keamanan web.</p>
    <a href="login.php" class="btn">Halaman Login</a>
    <a href="pencarian.php" class="btn btn-secondary">Katalog Pencarian Buku</a>
</div>

</body>
</html>