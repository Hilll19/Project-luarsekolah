<?php
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "learning_course";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai email dan password dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Buat kueri SQL untuk mencari email di tabel users
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email ditemukan di database
        $row = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Login berhasil, redirect ke halaman home.php
            header("Location: landingpage.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        header("Location: alertnotregister.php");
         exit();
    }

    $stmt->close();
}

$conn->close();
?>