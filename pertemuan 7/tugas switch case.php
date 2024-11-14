<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        /* Gaya CSS untuk tampilan yang menarik */
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
        <h2>Kalkulator Sederhana</h2>
        <form method="post">
            <input type="number" name="angka1" placeholder="Masukkan angka pertama">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value=""></option>
                <option value="/">/</option>
            </select>
            <input type="number" name="angka2" placeholder="Masukkan angka kedua">
            <input type="submit" value="Hitung">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    if ($angka2 == 0) {
                        $hasil = "Tidak dapat membagi dengan nol";
                    } else {
                        $hasil = $angka1 / $angka2;
                    }
                    break;
                default:
                    $hasil = "Operator tidak valid";
            }

            echo "<p class='result'>Hasil: $hasil</p>";
        }
        ?>
    </div>
</body>
</html>