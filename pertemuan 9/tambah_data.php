<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "tambahfaris"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat_siswa = $_POST['alamat_siswa'];
    $jk_siswa = $_POST['jk_siswa'];
    $agama_siswa = $_POST['agama_siswa'];
    $asal_sekolah = $_POST['asal_sekolah'];

}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            background-color: #f4f4f9;
        }
        h2 {
            text-align: center;
        }
        form {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Form Tambah Data Siswa</h2>

<form method="POST" action="tambah_data.php">
    <label for="id_siswa">ID Siswa</label>
    <input type="number" id="id_siswa" name="id_siswa" required>

    <label for="nama_siswa">Nama Siswa</label>
    <input type="text" id="nama_siswa" name="nama_siswa" required>

    <label for="alamat_siswa">Alamat Siswa</label>
    <input type="text" id="alamat_siswa" name="alamat_siswa" required>

    <label for="jk_siswa">Jenis Kelamin</label>
    <input type="text" id="jk_siswa" name="jk_siswa" required>

    <label for="agama_siswa">Agama Siswa</label>
    <input type="text" id="agama_siswa" name="agama_siswa" required>

    <label for="asal_sekolah">Asal Sekolah</label>
    <input type="text" id="asal_sekolah" name="asal_sekolah" required>

    <input type="submit" value="Tambah Data">
</form>

</body>
</html>
