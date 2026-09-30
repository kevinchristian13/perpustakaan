<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Buku - Perpustakaan</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f4f6f9;
            color: #333;
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            width: 100%;
            max-width: 900px;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }
        .header {
            text-align: center;
            margin-bottom: 25px;
        }
        .header h2 {
            color: #2c3e50;
            font-size: 26px;
            margin-bottom: 8px;
        }
        .header p {
            color: #7f8c8d;
            font-size: 14px;
        }
        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
        }
        .search-box input[type="text"] {
            flex: 1;
            padding: 12px 16px;
            font-size: 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s;
        }
        .search-box input[type="text"]:focus {
            border-color: #3498db;
        }
        .search-box button {
            padding: 12px 24px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .search-box button:hover {
            background-color: #2980b9;
        }
        .table-responsive {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 15px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #edf2f7;
        }
        th {
            background-color: #f8fafc;
            color: #475569;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }
        tr:hover {
            background-color: #f1f5f9;
        }
        .badge {
            background-color: #e0f2fe;
            color: #0369a1;
            padding: 4px 8px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
        }
        .empty-state {
            text-align: center;
            padding: 30px;
            color: #94a3b8;
        }
        .footer-nav {
            margin-top: 25px;
            padding-top: 15px;
            border-top: 1px solid #edf2f7;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-nav a {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        .footer-nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Katalog Perpustakaan</h2>
        <p>Cari judul buku yang tersedia dalam koleksi pustaka</p>
    </div>

    <form method="GET" action="" class="search-box">
        <input type="text" name="keyword" placeholder="Ketik judul buku (misal: Pemrograman)..." value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>" required>
        <button type="submit">Cari Buku</button>
    </form>

    <?php
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];

        // RENTAN: String concatenation tanpa sanitasi/prepared statement (untuk kebutuhan tugas)
        $query = "SELECT id, judul, pengarang, penerbit FROM buku WHERE judul LIKE '%$keyword%'";
        $result = mysqli_query($conn, $query);

        echo "<h3>Hasil Pencarian:</h3>";

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<div class='table-responsive'>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td><span class='badge'>#" . $row['id'] . "</span></td>
                        <td><b>" . $row['judul'] . "</b></td>
                        <td>" . $row['pengarang'] . "</td>
                        <td>" . $row['penerbit'] . "</td>
                      </tr>";
            }
            echo "    </tbody>
                    </table>
                  </div>";
        } else {
            echo "<div class='empty-state'>Buku dengan kata kunci tersebut tidak ditemukan.</div>";
        }
    }
    ?>

    <div class="footer-nav">
        <a href="login.php">&larr; Kembali ke Login</a>
    </div>
</div>

</body>
</html>