<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning+ Membership Card</title>
    <link rel="stylesheet" href="css/profil.css" />
    <style>
        /* Styling untuk container hasil registrasi */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            display: flex;
            /* Tambahkan properti ini */
            justify-content: center;
            /* Ratakan secara horizontal */
            align-items: center;
            /* Ratakan secara vertikal */
            height: 100vh;
            /* Atur tinggi body 100% dari viewport */
        }

        .membership-card {
            /* max-width: 600px; /* Hapus baris ini */
            width: 30%;
            /* Menyesuaikan dengan lebar maksimum */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: #f9f9f9;
            display: flex;
            align-items: center;
            flex-direction: column;
            /* Mengatur agar konten menjadi satu kolom */
            margin: 0 auto;
            /* Tambahkan baris ini */
        }

        .header {
            width: 110%;
            /* Menyesuaikan dengan lebar kartu */
            padding: 10px 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            color: #fff;
        }

        .header h2 {
            margin: 0;
        }

        .header p {
            margin: 5px 0;
        }

        .blue-bg {
            background-color: #3498db;
        }

        .red-bg {
            background-color: #e74c3c;
        }

        .container-pengguna {
            /* Tambahkan properti display flex untuk mengatur foto dan data pengguna dalam satu baris */
            display: flex;
        }

        .image-container {
            /* Atur lebar foto */
            flex: 1;
            text-align: center;
        }

        .image-container img {
            /* Sesuaikan ukuran foto */
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .details {
            /* Atur lebar data pengguna */
            flex: 2;
            text-align: left;
            padding-left: 20px;
            color: black;
        }

        .details p {
            margin-bottom: 10px;
            font-size: 14px;
            line-height: 1.5;
        }

        .details strong {
            font-weight: bold;
        }

        /* Hover effect */
        .membership-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="hero">
        <nav>
            <img src="img/logo+.png" alt="Logo Learning+" class="logo" />
            <h1><a href="home.php" style="color: white">Learning+</a></h1>
            <ul>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#program">Program</a></li>
                <li><a href="#beritartikel">Berita & artikel</a></li>
                <li><a href="#galeri">Galeri</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
            <img src="img/userIcon.png" alt="icon-user" class="user-pic" onclick="toggleMenu()" />
        </nav>

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="img/windahmaldini.jpg" alt="icon-user" />
                    <h2 style="color: black; font-size: 20px; padding-top: 10px">
                        Hilmy Febrian
                    </h2>
                </div>
                <hr />

                <a href="#" class="sub-menu-link">
                    <img src="img/userIcon.png" alt="" />
                    <p>Edit Profile</p>
                    <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                    <img src="img/settings.png" alt="" />
                    <p>Settings & Private</p>
                    <span>></span>
                </a>
                <a href="register.html" class="sub-menu-link">
                    <img src="img/register.png" alt="" />
                    <p>Register</p>
                    <span>></span>
                </a>
                <a href="login.html" class="sub-menu-link">
                    <img src="img/login.png" alt="" />
                    <p>Login</p>
                    <span>></span>
                </a>
            </div>
        </div>
        <?php
        // Ambil data dari formulir input jika disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $jenis_kelamin = $_POST["jenis_kelamin"];
            $tgl_lahir = $_POST["tgl_lahir"];
            $alamat = $_POST["alamat"];
            $email = $_POST["email"];
            $no_hp = $_POST["no_hp"];
            $hobi = $_POST["hobi"];
            $foto = $_FILES["foto"]["name"];
            $header_bg_class = ($jenis_kelamin == "Laki-laki") ? "blue-bg" : "red-bg";

            // Simpan file foto di server
            move_uploaded_file($_FILES["foto"]["tmp_name"], "uploads/" . $foto);
            ?>
            <!-- Tampilkan hasil registrasi dalam kartu -->
            <div class="membership-card" style="margin-top:150px">
                <div class="details-container">
                    <div class="header <?php echo $header_bg_class; ?>">
                        <h2>Learning+ Membership Card</h2>
                        <p class="membership-card-label">Kartu ini tanda sebagai anggota member</p>
                    </div>
                    <h3>Data Pengguna</h3>
                    <div class="container-pengguna">
                        <div class="image-container" style="padding-top:35px">
                            <img src="uploads/<?php echo $foto; ?>" alt="Foto">
                        </div>
                        <div class="details">
                            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                            <p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></p>
                            <p><strong>Tanggal Lahir:</strong> <?php echo $tgl_lahir; ?></p>
                            <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
                            <p><strong>Email:</strong> <?php echo $email; ?></p>
                            <p><strong>No HP:</strong> <?php echo $no_hp; ?></p>
                            <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let subMenu = document.getElementById("subMenu");

                function toggleMenu() {
                    subMenu.classList.toggle("open-menu");
                }
            </script>
            <?php
        }
        ?>
</body>

</html>