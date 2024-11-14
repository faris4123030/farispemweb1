<!DOCTYPE html>
<html>
<head>
    <title>Program Sederhana dengan Fungsi else</title>
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
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cek Bilangan Genap atau Ganjil</h2>
        <p>Masukkan sebuah bilangan:</p>
        <form method="post">
            <input type="number" name="bilangan" required>
            <input type="submit" value="Cek">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $bilangan = $_POST['bilangan'];

            if ($bilangan % 2 == 0) {
                $hasil = "Bilangan $bilangan adalah bilangan genap.";
            } else {
                $hasil = "Bilangan $bilangan adalah bilangan ganjil.";
            }

            echo "<p class='result'>$hasil</p>";
        }
        ?>
    </div>
</body>
</html>