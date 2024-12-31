<?php
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"> -->
    <link rel="stylesheet" href="assets/css/user.css">
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


        $(document).ready(function() {
            // Handle form submit dengan AJAX
            $('#registrationForm').on('submit', function(e) {
                e.preventDefault(); // Cegah form reload

                // Validasi input
                const username = $('#username').val().trim();
                const email = $('#email').val().trim();
                const password1 = $('#password1').val().trim();
                const password2 = $('#password2').val().trim();

                if (!username || !email || !password1 || !password2) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Semua field harus diisi!',
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                    return;
                }

                if (password1 !== password2) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Password tidak cocok!',
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                    return;
                }

                // Jika validasi lolos, kirim data dengan AJAX
                const formData = $(this).serialize();

                $.ajax({
                    url: `../../helper/submit_registration.php`,
                    type: 'POST', // Pastikan ini menggunakan 'POST'
                    data: formData,
                    success: function(response) {
                        if (response.status === 'success') {
                            window.location.href = `${BASE_URL}user/payment.php?member_id=${response.member_id}&package_id=${response.package_id}`;
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK',
                            });
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Terjadi kesalahan. Mohon coba lagi nanti.',
                            icon: 'error',
                            confirmButtonText: 'OK',
                        });
                    },
                });
            });

            // Navbar scroll effect
            document.addEventListener('scroll', () => {
                document
                    .querySelector('.navbar')
                    .classList.toggle('scrolled', window.scrollY > 50);
            });

            // Inisialisasi carousel untuk testimonial
            const carousel = document.querySelector('#testimonial-carousel');
            if (carousel) {
                new bootstrap.Carousel(carousel, {
                    interval: 5000, // Waktu antar slide (ms)
                    wrap: true, // Loop kembali ke awal setelah slide terakhir
                });
            }

            // BMI Calculator
            function calculateBMI() {
                const weight = parseFloat(document.getElementById('weight').value);
                const height = parseFloat(document.getElementById('height').value) / 100; // Convert cm to meters

                if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
                    document.getElementById('bmi-value').textContent =
                        'Please enter valid weight and height!';
                    document.getElementById('bmi-classification').textContent = '';
                    return;
                }

                const bmi = (weight / (height * height)).toFixed(1);
                document.getElementById('bmi-value').textContent = bmi;

                let classification = '';
                if (bmi < 18.5) {
                    classification = 'Underweight';
                } else if (bmi >= 18.5 && bmi < 24.9) {
                    classification = 'Normal weight';
                } else if (bmi >= 25 && bmi < 29.9) {
                    classification = 'Overweight';
                } else {
                    classification = 'Obesity';
                }

                document.getElementById(
                    'bmi-classification'
                ).textContent = `Classification: ${classification}`;
            }

            // Inisialisasi carousel untuk trainers
            const trainersCarousel = document.querySelector('#trainers-carousel');
            if (trainersCarousel) {
                new bootstrap.Carousel(trainersCarousel, {
                    interval: 3000, // Waktu rotasi (ms)
                    pause: 'hover', // Carousel berhenti saat di-hover
                });
            }

            // Fitur buka Google Maps
            function openMaps() {
                window.open('https://goo.gl/maps/examplelink', '_blank');
            }

            // Toggle password visibility
            document
                .querySelectorAll('[id^="togglePassword"]')
                .forEach(function(button) {
                    button.addEventListener('click', function() {
                        const passwordInput = document.querySelector(
                            `#${button.id.replace('toggle', '')}`
                        );
                        const passwordIcon = button.querySelector('i');

                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';
                            passwordIcon.classList.remove('bi-eye-slash');
                            passwordIcon.classList.add('bi-eye');
                        } else {
                            passwordInput.type = 'password';
                            passwordIcon.classList.remove('bi-eye');
                            passwordIcon.classList.add('bi-eye-slash');
                        }
                    });
                });
        });
    </script>

</body>

</html>