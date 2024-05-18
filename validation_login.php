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
    $role = $_POST['role'];

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
            // Periksa role
            if ($row['role'] === $role) {
                // Login berhasil dengan role yang sesuai
                if ($role === 'admin') {
                    // Redirect ke halaman admin
                    echo "<script>alert('Admin berhasil login'); window.location.href = 'admin_home.php';</script>";
                    exit();
                } elseif ($role === 'user') {
                    // Redirect ke halaman user
                    echo "<script>alert('User berhasil login'); window.location.href = 'landingpage.php';</script>";
                    exit();
                }
            } else {
                echo "<script>alert('Peran yang Anda pilih tidak sesuai dengan peran yang terdaftar'); window.location.href = 'login.php';</script>";
            }
        } else {
            echo "Password salah!";
        }
    } else {
        // Jika email tidak ditemukan di database
        echo "Email tidak terdaftar.";
    }

    $stmt->close();
}

$conn->close();
?>