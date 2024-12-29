<?php
// require __DIR__ . 'vendor/autoload.php';
session_start();
include "helper/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lembah Fitness</title>
    <!-- CSS Frameworks and Libraries -->
     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"> -->
    <link rel="stylesheet" href="./assets/css/user.css">
</head>

<body>
    <!-- Navbar -->
    <?php include 'layout/navbar.php'; ?>

    <!-- Main Content -->
    <main>
        <?php include 'pages/hero.php'; ?>
        <?php include 'pages/bmi_calculator.php'; ?>
        <?php include 'pages/programs.php'; ?>
        <?php include 'pages/trainers.php'; ?>
        <?php include 'pages/pricing.php'; ?>
        <?php include 'pages/testimonials.php'; ?>
        <?php include 'pages/gallery.php'; ?>
        <?php include 'pages/our_location.php'; ?>
        <?php include 'pages/contact_us.php'; ?>
    </main>

    <!-- Modals and Toasts -->
    <?php include 'layout/login_modal.php'; ?>
    <?php include 'layout/registration_modal.php'; ?>
    <?php include 'layout/toast_login.php'; ?>
    <?php include 'layout/toast_notify.php'; ?>
    <?php include 'user/modal/purchase_package.php'; ?>

    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/user.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (isset($_SESSION['show_modal']) && $_SESSION['show_modal']): ?>
                // Tampilkan Modal Login
                var loginModal = new bootstrap.Modal(document.getElementById('loginModal'), {
                    keyboard: false
                });
                loginModal.show();
                <?php unset($_SESSION['show_modal']); ?>
            <?php endif; ?>

            <?php if (isset($_SESSION['show_login_toast']) && $_SESSION['show_login_toast']): ?>
                // Tampilkan Toast Login Berhasil
                var loginToast = new bootstrap.Toast(document.getElementById('loginToast'), {
                    delay: 3000
                });
                loginToast.show();
                <?php unset($_SESSION['show_login_toast']); ?>
            <?php endif; ?>
        });
    </script>

</body>

</html>