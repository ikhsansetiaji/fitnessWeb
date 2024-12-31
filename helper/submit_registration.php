<?php
session_start();

function redirectWithAlert($message, $alertType)
{
    header("Location: ../index.php?alert_message=" . urlencode($message) . "&alert_type=$alertType");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password1 = trim($_POST['password1']);
    $password2 = trim($_POST['password2']);

    // Validasi input
    if (empty($username) || empty($email) || empty($password1) || empty($password2)) {
        redirectWithAlert('Semua field harus diisi!', 'error');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirectWithAlert('Format email tidak valid!', 'error');
    }

    if ($password1 !== $password2) {
        redirectWithAlert('Password dan konfirmasi password tidak cocok!', 'error');
    }

    if (strlen($password1) < 8) {
        redirectWithAlert('Password harus memiliki minimal 8 karakter.', 'error');
    }

    // Hash password
    $hashed_password = password_hash($password1, PASSWORD_BCRYPT);

    // Koneksi ke database
    $conn = new mysqli("localhost", "root", "", "fitness_db");

    if ($conn->connect_error) {
        redirectWithAlert('Gagal terhubung ke database: ' . $conn->connect_error, 'error');
    }

    // Cek apakah email sudah terdaftar
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        $conn->close();
        redirectWithAlert('Email sudah terdaftar. Gunakan email lain.', 'error');
    }

    $stmt->close();

    // Insert data pengguna baru
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        redirectWithAlert('Pendaftaran berhasil! Silakan login.', 'success');
    } else {
        $stmt->close();
        $conn->close();
        redirectWithAlert('Gagal menyimpan data pengguna. Silakan coba lagi.', 'error');
    }
} else {
    redirectWithAlert('Metode request tidak valid.', 'error');
}
