<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="auth.css">
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form>
            <input type="text" name="nik" placeholder="NIK" required>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
            <div class="button-container">
                <button onclick="redirect('login.php')" type="button">Saya Sudah Memiliki Akun</button>
                <button type="submit">Daftar</button>
            </div>
        </form>
        <p class="footer-text">©2024 PT. Eric Cucu Nenek Indonesia.</p>
    </div>

    <script src="utils.js"></script>
</body>

</html>