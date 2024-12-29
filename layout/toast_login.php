<!-- Toast Login Berhasil -->
<div class="toast-container position-fixed top-0 end-0 p-3">
    <?php if (isset($_SESSION['login_success_message'])): ?>
        <div id="loginToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <?= htmlspecialchars($_SESSION['login_success_message'], ENT_QUOTES, 'UTF-8'); ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <?php unset($_SESSION['login_success_message']); // Hapus pesan setelah ditampilkan 
        ?>
    <?php endif; ?>
</div>