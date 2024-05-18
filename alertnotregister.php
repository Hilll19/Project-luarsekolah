<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: #ff6347;
            margin-bottom: 20px;
        }
        p {
            color: #333333;
            margin-bottom: 30px;
        }
        .back-link {
            text-decoration: none;
            color: #ffffff;
            background-color: #ff6347;
            padding: 12px 30px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }
        .back-link:hover {
            background-color: #ff4500;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h2>Oops!</h2>
        <p>Maaf, email tidak ditemukan. Silakan mendaftar terlebih dahulu.</p>
        <a href="register.php" class="back-link">Mendaftar</a>
    </div>
</body>
</html>
