<section id="contact" class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Contact us</h2>
        <div class="row">
            <!-- Formulir Kontak -->
            <div class="col-lg-8 mx-auto">
                <form action="./user/contact/process_contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Message</button>
                </form>
            </div>
        </div>
    </div>
</section>