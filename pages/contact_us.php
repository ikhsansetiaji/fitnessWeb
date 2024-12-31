<!-- <?php
        include "layout/toast_notify.php";
        ?> -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-4">Contact Us</h2>
        <div class="row justify-content-center">
            <!-- Formulir Kontak -->
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-4 p-4">
                    <form action="user/contact/process_contact.php" method="POST" class="contact-form">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control rounded-pill" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-pill" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control rounded-3" id="message" name="message" rows="5" placeholder="Write your message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
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