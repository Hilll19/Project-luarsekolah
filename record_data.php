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
    // Ambil nilai dari form registrasi
    $fullname = $_POST['fullname'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $hobi = $_POST['hobi'];
    $role = $_POST['role'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Buat kueri SQL untuk menyimpan data registrasi ke dalam tabel pengguna (users)
    $sql = "INSERT INTO users (fullname, tgl_lahir, alamat, jenis_kelamin, email, no_hp, hobi, role, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $fullname, $tgl_lahir, $alamat, $jenis_kelamin, $email, $no_hp, $hobi, $role, $password);

    // Eksekusi kueri dan periksa apakah data berhasil disimpan
    if ($stmt->execute()) {
        echo "<script>alert('Registrasi berhasil!'); window.location.href = 'login.php';</script>";
        exit();
        // Redirect ke halaman login atau halaman lainnya
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>