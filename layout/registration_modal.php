<!-- Registration Modal -->
<div class="modal fade animate__animated animate__fadeInDown" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg">
            <!-- Header -->
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="registrationModalLabel">
                    <i class="bi bi-person-plus-fill"></i> Daftar Sekarang
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Body -->
            <div class="modal-body">
                <p class="text-muted text-center mb-4">Buat akun Anda sekarang untuk menikmati semua fitur kami.</p>
                <form action="../user/submit_registration.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">
                            <i class="bi bi-person-fill"></i> Username
                        </label>
                        <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <i class="bi bi-envelope-fill"></i> Email
                        </label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">
                            <i class="bi bi-lock-fill"></i> Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">
                            <i class="bi bi-lock-fill"></i> Konfirmasi Password
                        </label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Masukkan ulang password">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Daftar</button>
                </form>
                <hr class="my-4">
                <p class="text-center text-muted">Atau daftar menggunakan:</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="API/google_register.php" class="btn btn-outline-danger w-100">
                        <i class="bi bi-google"></i> Google
                    </a>
                    <a href="API/facebook_register.php" class="btn btn-outline-primary w-100">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>