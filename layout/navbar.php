<header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Lembah Fitness</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#bmi-calculator">BMI Calculator</a></li>
                        <li class="nav-item"><a class="nav-link" href="#programs">Programs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#trainers">Trainers</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#our-location">Our Location</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                        <?php
                        // session_start();
                        if (isset($_SESSION['username'])) { // Jika user sudah login
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Hi, <?= htmlspecialchars($_SESSION['username']); ?>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="userMenu">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#purchasePackageModal">Beli Paket</a></li>
                                    <li><a class="dropdown-item" href="print_registration.php">Cetak Bukti Pendaftaran</a></li>
                                    <li><a class="dropdown-item" href="print_payment.php">Cetak Bukti Pembayaran</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="./user/logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php
                        } else { // Jika user belum login
                        ?>
                            <li class="nav-item"><button class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button></li>
                            <li class="nav-item"><a class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#registrationModal">Daftar</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
        </nav>
        <!-- Tampilkan pesan -->
        <div class="container mt-3">
        <?php
            if (isset($_GET['alert_message']) && isset($_GET['alert_type'])) {
                $alertMessage = htmlspecialchars($_GET['alert_message']);
                $alertType = htmlspecialchars($_GET['alert_type']);
                echo "
                <script>
                    Swal.fire({
                        icon: '$alertType', // success, error, warning, info, question
                        title: '".($alertType === 'success' ? 'Berhasil!' : 'Gagal!')."',
                        text: '$alertMessage',
                        showConfirmButton: true, // Tampilkan tombol OK
                        confirmButtonText: 'OK',
                        timer: 5000, // Alert otomatis tertutup setelah 5 detik
                        timerProgressBar: true,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown' // Animasi muncul
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp' // Animasi menghilang
                        }
                    }).then(() => {
                        // Redirect setelah alert ditutup
                        window.location.href = 'index.php';
                    });
                </script>
                </script>";
            }
        ?>
    </div>
</header>