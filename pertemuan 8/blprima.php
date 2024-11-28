<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Prima</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            text-align: center;
            padding: 8px;
            border: 1px solid #ddd;
        }
        .prime {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h1>Bilangan Prima antara 1 sampai 50</h1>
    <p>Bilangan prima adalah bilangan asli yang lebih besar dari 1 dan hanya habis dibagi oleh 1 dan bilangan itu sendiri.</p>
    <table>
        <tr>
            <?php
            $count = 0;
            for ($i = 2; $i <= 50; $i++) {
                $isPrime = true;
                for ($j = 2; $j <= sqrt($i); $j++) {
                    if ($i % $j == 0) {
                        $isPrime = false;
                        break;
                    }
                }
                if ($isPrime) {
                    echo "<td class='prime'>$i</td>";
                    $count++;
                    if ($count % 10 == 0) {
                        echo "</tr><tr>";
                    }
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>