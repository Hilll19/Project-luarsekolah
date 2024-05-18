<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Learning+</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="logo-container">
            <img src="img/logo+.png" alt="Learning+ Logo" class="logo" height="50" width="70">
            <span class="logo-text">Learning+</span>
        </div>
        <h2>Formulir Registrasi</h2>
        <form id="registerForm" action="record_data.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-column">
                    <label for="fullname"><i class="fas fa-user"></i> Nama Lengkap:</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Masukkan nama lengkap Anda" required>
                </div>
                <div class="form-column">
                    <label for="tgl_lahir"><i class="fas fa-calendar-alt"></i> Tanggal Lahir:</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Pilih tanggal lahir Anda" required>
                </div>
                <div class="form-column">
                    <label for="alamat"><i class="fas fa-map-marker-alt"></i> Alamat:</label>
                    <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap Anda" required></textarea>
                </div>
                <div class="form-column">
                    <div class="gender-container">
                        <label><i class="fas fa-venus-mars"></i> Jenis Kelamin:</label>
                        <div class="radio-buttons">
                            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
                            <label for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="radio-buttons">
                            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-column">
                    <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
                </div>
                <div class="form-column">
                    <label for="no_hp"><i class="fas fa-phone"></i> No HP:</label>
                    <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP Anda" required>
                </div>
                <div class="form-column">
                    <label for="hobi"><i class="fas fa-heart"></i> Hobi:</label>
                    <input type="text" id="hobi" name="hobi" placeholder="Masukkan hobi Anda" required>
                </div>
                <div class="form-column upload-icon">
                    <label for="foto"><i class="fas fa-upload"></i> Upload Foto Diri:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required>
                    <i class="fas fa-info-circle" title="File harus berupa gambar"></i>
                </div>
                <div class="form-column">
                    <label for="role"><i class="fas fa-user-shield"></i> Role:</label>
                    <select id="role" name="role" required>
                        <option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="form-column">
                    <label for="password"><i class="fas fa-lock"></i> Password:</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                </div>
            </div>
            <input type="submit" value="Simpan">
        </form>
        <div class="extra-links">
            <span>Sudah punya akun? <a href="login.php">Login</a></span>
        </div>
    </div>
    <script>
        document.querySelector('form').addEventListener('submit', function (event) {
            const inputs = document.querySelectorAll('input, textarea');
            let isValid = true;
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '#ddd';
                }
            });
            if (!isValid) {
                event.preventDefault();
                alert('Semua field harus diisi!');
            }
        });
    </script>
</body>

</html>