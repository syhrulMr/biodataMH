<?php
include 'koneksi.php';

// Ambil data dari formulir
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Masukkan data ke database
$sql = "INSERT INTO siswa (nama, umur, jenis_kelamin, alamat) VALUES ('$nama', '$umur', '$jenis_kelamin', '$alamat')";

if ($conn->query($sql) === TRUE) {
    // Data siswa berhasil disimpan
    echo "Data siswa berhasil disimpan. <a href ='index.html'>Tambahkan lagi data siswa</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
