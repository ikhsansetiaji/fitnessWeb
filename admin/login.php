<?php
// Mulai session jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ambil pesan error dari session (jika ada) dan hapus setelah ditampilkan
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : '';
unset($_SESSION['error_message']); // Hapus pesan error
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <!-- Tampilkan notifikasi error jika ada -->
        <?php if (!empty($error_message)): ?>
            <div class="notifikasi">
                <?= htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <!-- Form Login -->
        <form method="post" action="../helper/validasi.php">
            <div class="input">
                <input
                    type="text"
                    name="username"
                    placeholder="Username"
                    required
                    autocomplete="off"
                    maxlength="50">
            </div>
            <div class="input">
                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    required
                    maxlength="50">
            </div>
            <div class="input">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </div>
</body>

</html>