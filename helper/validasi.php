<?php
// Mulai sesi jika belum dimulai
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Sertakan file koneksi database
require_once './koneksi.php';

// Cek apakah form login dikirim
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form dan sanitasi
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validasi input
    if (empty($username) || empty($password)) {
        $_SESSION['error_message'] = "Harap isi semua kolom.";
        header('Location: ../admin/login.php');
        exit();
    }

    try {
        // Ambil data pengguna berdasarkan username
        $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? LIMIT 1");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Simpan data ke sesi
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['nama_pengguna'] = $user['nama_pengguna'];

                // Redirect berdasarkan peran pengguna
                if ($username === 'admin') {
                    header('Location: ../admin/index.php');
                } else {
                    header('Location: ../admin/login.php');
                }
                exit();
            } else {
                $_SESSION['error_message'] = "Password salah.";
                header('Location: ../admin/login.php');
                exit();
            }
        } else {
            $_SESSION['error_message'] = "Username tidak ditemukan.";
            header('Location: ../admin/login.php');
            exit();
        }
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
        $_SESSION['error_message'] = "Terjadi kesalahan pada sistem. Silakan coba lagi.";
        header('Location: ../admin/login.php');
        exit();
    }
}
