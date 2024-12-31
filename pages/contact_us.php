<!-- <?php
        include "layout/toast_notify.php";
        ?> -->

<script>
    // Cek apakah ada pesan toast di session PHP
    document.addEventListener("DOMContentLoaded", function() {
        <?php if (isset($_SESSION['toast_message'])) { ?>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: '<?php echo $_SESSION['toast_message']; ?>',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
            <?php unset($_SESSION['toast_message']); // Hapus pesan setelah ditampilkan 
            ?>
        <?php } ?>
    });
</script>