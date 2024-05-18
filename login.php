<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Learning+</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .container {
            max-width: 380px;
            /* Sedikit mengurangi lebar kontainer untuk tampilan yang lebih rapi */
            padding: 30px;
            /* Mengurangi padding agar konten lebih terpusat */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Pusatkan kontainer horizontal */
        }

        .form-container {
            text-align: center;
            width: 100%;
            /* Pastikan form container mengisi kontainer utama */
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
            text-align: left;
        }

        .input-container {
            margin-bottom: 20px;
            text-align: left;
            /* Pusatkan teks input ke kiri */
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .extra-links {
            margin-top: 20px;
            text-align: center;
            /* Pusatkan teks tautan ekstra */
        }

        .extra-links a {
            text-decoration: none;
            color: #666;
            margin-right: 10px;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <section id="login">
        <div class="container">
            <div class="logo-container">
                <img src="img/logo+.png" alt="Learning+ Logo" class="logo" height="50" width="70">
                <span class="logo-text">Learning+</span>
            </div>
            <div class="form-container">
                <h2>Login</h2>
                <form action="validation_login.php" method="POST">
                    <div class="input-container">
                        <label for="email"><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-container">
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <input type="submit" value="Login">
                </form>
                <div class="extra-links">
                    <a href="#">Lupa kata sandi?</a>
                    <span>Belum punya akun? <a href="register.php">Daftar</a></span>
                </div>
            </div>
        </div>
    </section>
    <script src="login.js"></script>
</body>

</html>