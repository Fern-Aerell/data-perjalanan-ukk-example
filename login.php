<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="foto_founder.jpg" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="auth.css">
</head>

<body>

    <div class="container">
        <h2>Login</h2>
        <form>
            <?php
                if (isset($_SESSION['success_message'])) {
                    echo '<p class="success_message">' . $_SESSION['success_message'] . '</p>';
                }
            ?>
            <input type="number" name="nik" placeholder="NIK" required>
            <input type="text" name="nama-lengkap" placeholder="Nama Lengkap" required>
            <div class="button-container">
                <button onclick="redirect('register.php')" type="button">Saya Pengguna Baru</button>
                <button onclick="redirect('dashboard.php')" type="submit">Masuk</button>
            </div>
        </form>
        <p class="footer-text">©2024 PT. Eric Cucu Nenek Indonesia.</p>
    </div>

    <script src="utils.js"></script>
</body>

</html>

<?php
session_destroy();
?>