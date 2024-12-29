<!-- Modal Login -->
<div class="modal fade animate__animated animate__fadeInDown" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg">
            <!-- Header -->
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="loginModalLabel"><i class="bi bi-person-circle"></i> Login ke Akun Anda</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Body -->
            <div class="modal-body">
                <!-- Notifikasi Error -->
                <?php if (isset($_SESSION['message']) && isset($_SESSION['alert_type'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['alert_type']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php unset($_SESSION['message'], $_SESSION['alert_type']); ?>
                <?php endif; ?>

                <!-- Form Login -->
                <p class="text-muted text-center mb-4">Silakan login menggunakan email dan password atau pilih opsi lain.</p>
                <form action="./user/process_login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i> Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><i class="bi bi-lock-fill"></i> Password</label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>

                <!-- Opsi Login Lain -->
                <div class="text-center mt-3">
                    <p class="text-muted">Atau login dengan</p>
                    <a href="./helper/login_google.php" class="btn btn-outline-danger w-100 mb-2"><i class="bi bi-google"></i> Login dengan Google</a>
                    <a href="./helper/login_facebook.php" class="btn btn-outline-primary w-100"><i class="bi bi-facebook"></i> Login dengan Facebook</a>
                </div>
            </div>
        </div>
    </div>
</div>