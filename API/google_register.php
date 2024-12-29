<?php
require __DIR__ . '/../vendor/autoload.php';

use Google\Client as Google_Client;
use Google\Service\Oauth2 as Google_Service_Oauth2;

session_start();

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Inisialisasi Google Client
$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']); // Dapatkan dari file .env
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']); // Dapatkan dari file .env
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']); // URL Redirect dari file .env
$client->addScope("email");
$client->addScope("profile");

try {
    if (isset($_GET['code'])) {
        // Fetch access token
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        if (isset($token['error'])) {
            throw new Exception("Gagal mendapatkan token akses: " . $token['error']);
        }
        $client->setAccessToken($token);

        // Get user info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $email = $google_account_info->email;
        $name = $google_account_info->name;
        $google_id = $google_account_info->id;

        // Connect to database
        $conn = new mysqli("localhost", "root", "", "fitness_db");
        if ($conn->connect_error) {
            throw new Exception("Gagal terhubung ke database: " . $conn->connect_error);
        }

        // Check if email exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            throw new Exception("Email sudah terdaftar. Silakan gunakan akun lain.");
        }
        $stmt->close();

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, email, oauth_provider, oauth_id) VALUES (?, ?, 'google', ?)");
        $stmt->bind_param("sss", $name, $email, $google_id);

        if (!$stmt->execute()) {
            throw new Exception("Gagal mendaftarkan pengguna baru.");
        }

        $stmt->close();
        $conn->close();

        // Set session
        $_SESSION['username'] = $name;

        // Success message
        $_SESSION['message'] = 'Registrasi berhasil! Selamat datang, ' . htmlspecialchars($name) . '.';
        $_SESSION['alert_type'] = 'success';
        header("Location: ../index.php");
        exit();
    } else {
        // Redirect to Google login
        header("Location: " . $client->createAuthUrl());
        exit();
    }
} catch (Exception $e) {
    // Error message
    $_SESSION['message'] = 'Error: ' . htmlspecialchars($e->getMessage());
    $_SESSION['alert_type'] = 'danger';
    header("Location: ../index.php");
    exit();
}
