<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query SQL untuk mengecek data pengguna di database
$sql = "SELECT id, username, password FROM Users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $_POST['username'], $_POST['password']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Jika pengguna valid, buat sesi dan alihkan ke menu utama
    session_start();
    $_SESSION['login'] = TRUE;
    header("Location: website_toko_baju/index.html");
} else {
    // Jika pengguna tidak valid, alihkan kembali ke halaman login
    header("Location: website_toko_baju/index.html");
}

$stmt->close();
$conn->close();
?>
