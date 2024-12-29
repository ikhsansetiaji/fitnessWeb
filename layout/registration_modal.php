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
                <form action="fitnessWeb/helper/submit_registration.php" method="POST">
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
                        <label for="password1" class="form-label">
                            <i class="bi bi-lock-fill"></i> Password 1
                        </label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password1" name="password1" required placeholder="Masukkan password">
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword1">
                                <i class="bi bi-eye-slash"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password2" class="form-label">
                            <i class="bi bi-lock-fill"></i> Password 2
                        </label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password2" name="password2" required placeholder="Masukkan password">
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword2">
                                <i class="bi bi-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Daftar</button>
                </form>
                <hr class="my-4">
                <p class="text-center text-muted">Atau daftar menggunakan:</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="../API/google_register.php" class="btn btn-outline-danger w-100">
                        <i class="bi bi-google"></i> Google
                    </a>
                    <a href="../API/facebook_register.php" class="btn btn-outline-primary w-100">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>