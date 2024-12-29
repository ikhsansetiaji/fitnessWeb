<?php if (isset($toast_message) && !empty($toast_message)): ?>
    <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1055;">
        <div class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" id="dynamicToast">
            <div class="d-flex">
                <div class="toast-body">
                    <?= htmlspecialchars($toast_message, ENT_QUOTES, 'UTF-8'); ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var toastEl = document.getElementById('dynamicToast');
            if (toastEl) {
                var toast = new bootstrap.Toast(toastEl, {
                    delay: 3000
                }); // Set delay sesuai kebutuhan
                toast.show();
            }
        });
    </script>
<?php endif; ?>