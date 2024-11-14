<!DOCTYPE html>
<html>
<head>
    <title>Program Sederhana dengan Fungsi if</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
        }
        .result {
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cek Nilai Ujian</h2>
        <p>Masukkan nilai ujian Anda (0-100):</p>
        <form method="post">
            <input type="number" name="nilai" required>
            <input type="submit" value="Cek">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST['nilai'];

            if ($nilai >= 90) {
                $hasil = "Selamat! Anda mendapatkan nilai A.";
            } elseif ($nilai >= 80) {
                $hasil = "Nilai Anda B, sangat bagus!";
            } elseif ($nilai >= 70) {
                $hasil = "Nilai Anda C, cukup baik.";
            } elseif ($nilai >= 60) {
                $hasil = "Nilai Anda D, perlu belajar lebih giat.";
            } else {
                $hasil = "Anda harus mengulang ujian.";
            }

            echo "<p class='result'>$hasil</p>";
        }
        ?>
    </div>
</body>
</html>