<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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
    <link rel="stylesheet" href="assets/css/user.css">
</head>

<body>
    <!-- Navbar -->
    <?php if (file_exists('layout/navbar.php')) include 'layout/navbar.php'; ?>

    <!-- Main Content -->
    <main>
        <section class="hero" id="hero">
            <div class="container">
                <h1>Elevate Your Workout</h1>
                <p>Transform your gym experience with professional trainers and advanced equipment.</p>
                <a href="#programs" class="btn btn-primary">Explore Programs</a>
            </div>
        </section>

        <section id="bmi-calculator" class="py-5 text-center">
            <div class="container">
                <h2 class="section-title mb-4">BMI Calculator</h2>
                <p class="mb-4">Calculate your Body Mass Index (BMI) and find out your health status:</p>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card p-4 shadow-sm">
                            <div class="form-group mb-3">
                                <label for="weight" class="form-label">Weight (kg):</label>
                                <input type="number" id="weight" class="form-control" placeholder="Enter your weight">
                            </div>
                            <div class="form-group mb-3">
                                <label for="height" class="form-label">Height (cm):</label>
                                <input type="number" id="height" class="form-control" placeholder="Enter your height">
                            </div>
                            <button class="btn btn-primary w-100" onclick="calculateBMI()">Calculate BMI</button>
                            <div id="bmi-result" class="mt-4 text-center">
                                <h4>Your BMI:</h4>
                                <p id="bmi-value" class="fs-5 text-muted"></p>
                                <p id="bmi-classification" class="fs-6 text-muted"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="programs" class="py-5">
            <div class="container text-center">
                <h2 class="section-title mb-3">Our Programs</h2>
                <div class="row g-4">
                    <!-- CrossFit -->
                    <div class="col-md-4">
                        <div class="card-custom program-card p-4">
                            <h3>CrossFit</h3>
                            <p>High-intensity workouts to boost strength and endurance.</p>
                            <p class="program-schedule">Schedule: Mon & Wed at 6 PM</p>
                        </div>
                    </div>
                    <!-- Strength Training -->
                    <div class="col-md-4">
                        <div class="card-custom program-card p-4">
                            <h3>Strength Training</h3>
                            <p>Build muscle and power with personalized plans.</p>
                            <p class="program-schedule">Schedule: Daily at 5 PM</p>
                        </div>
                    </div>
                    <!-- Yoga -->
                    <div class="col-md-4">
                        <div class="card-custom program-card p-4">
                            <h3>Yoga</h3>
                            <p>Relax and improve your flexibility and mental clarity.</p>
                            <p class="program-schedule">Schedule: Saturday at 9 AM</p>
                        </div>
                    </div>
                    <!-- Bodybuilding -->
                    <div class="col-md-4">
                        <div class="card-custom program-card p-4">
                            <h3>Bodybuilding</h3>
                            <p>Gain muscle mass and definition with structured bodybuilding programs.</p>
                            <p class="program-schedule">Schedule: Daily at 7 PM</p>
                        </div>
                    </div>
                    <!-- Zumba -->
                    <div class="col-md-4">
                        <div class="card-custom program-card p-4">
                            <h3>Zumba</h3>
                            <p>Enjoy dance-based workouts that combine fun and fitness.</p>
                            <p class="program-schedule">Schedule: Friday at 7 AM</p>
                        </div>
                    </div>
                    <!-- Personal Training -->
                    <div class="col-md-4">
                        <div class="card-custom program-card p-4">
                            <h3>Personal Training</h3>
                            <p>Work one-on-one with professional trainers to achieve your goals.</p>
                            <p class="program-schedule">Schedule: Flexible - By Appointment</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="trainers" class="py-5 text-center">
            <div class="container">
                <h2 class="section-title mb-5">Meet Our Trainers</h2>
                <div id="trainers-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Trainer 1 -->
                        <div class="carousel-item active">
                            <div class="card-custom text-center p-3 mx-auto">
                                <img src="assets\image\trainers\trainer1.jpg" class="trainer-img rounded-circle mb-3" alt="Max Kamil">
                                <h4 class="trainer-name">Max Kamil</h4>
                                <p class="trainer-title">Strength & Conditioning Expert</p>
                                <p class="trainer-bio">
                                    Over 10 years of experience helping clients achieve their strength goals through structured training plans.
                                </p>
                                <div class="social-icons mt-3">
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="https://web.facebook.com/login"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Trainer 2 -->
                        <div class="carousel-item">
                            <div class="card-custom text-center p-3 mx-auto">
                                <img src="assets\image\trainers\trainer2.jpg" class="trainer-img rounded-circle mb-3" alt="Tom Kamil">
                                <h4 class="trainer-name">Tom Karl</h4>
                                <p class="trainer-title">Pilates Instructor</p>
                                <p class="trainer-bio">
                                    A certified pilates instructor with expertise in improving flexibility, balance, and core strength.
                                </p>
                                <div class="social-icons mt-3">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="https://web.facebook.com/login"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Trainer 3 -->
                        <div class="carousel-item">
                            <div class="card-custom text-center p-3 mx-auto">
                                <img src="assets\image\trainers\trainer3.jpg" class="trainer-img rounded-circle mb-3" alt="Robert">
                                <h4 class="trainer-name">Robert</h4>
                                <p class="trainer-title">CrossFit Trainer</p>
                                <p class="trainer-bio">
                                    Specializes in high-intensity CrossFit programs to enhance endurance and physical performance.
                                </p>
                                <div class="social-icons mt-3">
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="https://web.facebook.com/login"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Tambahkan Trainer Lain Jika Diperlukan -->
                    </div>
                    <!-- Navigasi Carousel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#trainers-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#trainers-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-5 text-center">
            <div class="container">
                <h2 class="section-title mb-5">Our Pricing Plans</h2>
                <div class="row g-4">
                    <!-- Basic Plan -->
                    <div class="col-md-4">
                        <div class="card-custom pricing-card p-4">
                            <h4 class="pricing-title">Basic Plan</h4>
                            <p class="pricing-price">$20 / Month</p>
                            <ul class="pricing-features list-unstyled">
                                <li>Access to gym equipment</li>
                                <li>1 personal training session</li>
                                <li>Locker room access</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#loginModal">Choose Plan</a>
                            <div class="pricing-review mt-3">
                                <p><i>"Great plan for beginners!"</i></p>
                                <span>– Poetri Karis</span>
                            </div>
                        </div>
                    </div>
                    <!-- Standard Plan -->
                    <div class="col-md-4">
                        <div class="card-custom pricing-card p-4 featured">
                            <h4 class="pricing-title">Standard Plan</h4>
                            <p class="pricing-price">$40 / Month</p>
                            <ul class="pricing-features list-unstyled">
                                <li>Access to all equipment</li>
                                <li>5 personal training sessions</li>
                                <li>Group classes</li>
                                <li>Sauna access</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#loginModal">Choose Plan</a>
                            <div class="pricing-review mt-3">
                                <p><i>"Best value for the price!"</i></p>
                                <span>– Sarah Smith</span>
                            </div>
                        </div>
                    </div>
                    <!-- Premium Plan -->
                    <div class="col-md-4">
                        <div class="card-custom pricing-card p-4">
                            <h4 class="pricing-title">Premium Plan</h4>
                            <p class="pricing-price">$60 / Month</p>
                            <ul class="pricing-features list-unstyled">
                                <li>Unlimited gym access</li>
                                <li>Unlimited personal training</li>
                                <li>Group classes & yoga</li>
                                <li>Spa & sauna access</li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#loginModal">Choose Plan</a>
                            <div class="pricing-review mt-3">
                                <p><i>"Perfect for serious gym-goers!"</i></p>
                                <span>– Alex Turner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="py-5">
            <div class="container">
                <h2 class="section-title text-center">What Our Clients Say</h2>
                <div id="testimonial-carousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Testimoni 1 -->
                        <div class="carousel-item active text-center">
                            <img src="assets\image\customers\customer1.jpg" alt="Client 1" class="rounded-circle mb-4" width="100">
                            <p class="testimonial-text">
                                "This gym has completely transformed my fitness journey! The trainers are amazing and the facilities are top-notch."
                            </p>
                            <h5 class="testimonial-name">Bilie Kamal</h5>
                            <span class="testimonial-role">Fitness Enthusiast</span>
                        </div>
                        <!-- Testimoni 2 -->
                        <div class="carousel-item text-center">
                            <img src="assets\image\customers\customer2.jpg" alt="Client 2" class="rounded-circle mb-4" width="100">
                            <p class="testimonial-text">
                                "I love the variety of programs and the personalized attention I receive here. Highly recommend!"
                            </p>
                            <h5 class="testimonial-name">Jane Smith</h5>
                            <span class="testimonial-role">Yoga Lover</span>
                        </div>
                        <!-- Testimoni 3 -->
                        <div class="carousel-item text-center">
                            <img src="assets\image\customers\customer3.jpg" alt="Client 3" class="rounded-circle mb-4" width="100">
                            <p class="testimonial-text">
                                "The best decision I made was joining this gym. The staff is supportive, and the atmosphere is fantastic!"
                            </p>
                            <h5 class="testimonial-name">Sarah Alexander</h5>
                            <span class="testimonial-role">Bodybuilder</span>
                        </div>
                    </div>
                    <!-- Kontrol Carousel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section id="gallery" class="py-5">
            <div class="container text-center">
                <h2 class="section-title">Our Gallery</h2>
                <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
                    <div class="carousel-inner">
                        <!-- Rak 1 -->
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/workout.jpg" class="img-fluid rounded" alt="Workout">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/equipment.jpg" class="img-fluid rounded" alt="Equipment">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/gymroom.jpg" class="img-fluid rounded" alt="Gym Room">
                                </div>
                            </div>
                        </div>
                        <!-- Rak 2 -->
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/crossfit.jpg" class="img-fluid rounded" alt="CrossFit">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/pillates.jpg" class="img-fluid rounded" alt="Pilates">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/strength-training.jpg" class="img-fluid rounded" alt="Strength Training">
                                </div>
                            </div>
                        </div>
                        <!-- Rak 3 -->
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/yoga.jpg" class="img-fluid rounded" alt="Yoga">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/hiit.jpg" class="img-fluid rounded" alt="HIIT">
                                </div>
                                <div class="col-md-4">
                                    <img src="assets/image/gallery/zumba.jpg" class="img-fluid rounded" alt="Zumba">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Navigasi -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section id="our-location" class="py-5">
            <div class="container">
                <h2 class="section-title text-center mb-5">Our Location</h2>
                <div class="row">
                    <!-- Cabang 1 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card-custom p-4">
                            <h4 class="text-primary mb-3">Cabang Jakarta Selatan</h4>
                            <p class="mb-2"><i class="fas fa-map-marker-alt text-danger me-2"></i> Jl. Raya Kebayoran No. 123, Jakarta Selatan</p>
                            <p class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +62 812-3456-7890</p>
                            <p class="mb-3"><i class="fas fa-clock text-info me-2"></i> Buka: Senin - Sabtu (08:00 - 21:00)</p>
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126917.63212377874!2d106.7815953132296!3d-6.2117949000000085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1c7f2cbcbdb%3A0x2d503848174ebcbb!2sKebayoran%20Baru%2C%20South%20Jakarta%2C%20Jakarta%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1689343434345!5m2!1sen!2sid"
                                    width="100%"
                                    height="200"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Cabang 2 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card-custom p-4">
                            <h4 class="text-primary mb-3">Cabang Bandung</h4>
                            <p class="mb-2"><i class="fas fa-map-marker-alt text-danger me-2"></i> Jl. Asia Afrika No. 45, Bandung</p>
                            <p class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +62 811-9876-5432</p>
                            <p class="mb-3"><i class="fas fa-clock text-info me-2"></i> Buka: Senin - Minggu (09:00 - 22:00)</p>
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126162.53212377874!2d107.5785953132296!3d-6.9177949000000085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e1c7f2cbcbdb%3A0x3d502848174ebcbb!2sAsia%20Afrika%20Street%2C%20Bandung!5e0!3m2!1sen!2sid!4v1689345434345!5m2!1sen!2sid"
                                    width="100%"
                                    height="200"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <!-- Cabang 3 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card-custom p-4">
                            <h4 class="text-primary mb-3">Cabang Surabaya</h4>
                            <p class="mb-2"><i class="fas fa-map-marker-alt text-danger me-2"></i> Jl. Tunjungan No. 89, Surabaya</p>
                            <p class="mb-2"><i class="fas fa-phone-alt text-success me-2"></i> +62 813-6543-2100</p>
                            <p class="mb-3"><i class="fas fa-clock text-info me-2"></i> Buka: Senin - Jumat (07:00 - 20:00)</p>
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126142.73212377874!2d112.7185953132296!3d-7.2477949000000085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f1c7f2cbcbdb%3A0x4d503848174ebcbb!2sTunjungan%20Street%2C%20Surabaya!5e0!3m2!1sen!2sid!4v1689346434345!5m2!1sen!2sid"
                                    width="100%"
                                    height="200"
                                    style="border:0;"
                                    allowfullscreen=""
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
        <!-- Registration Modal -->
        <!-- Modal Registration -->
        <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="registrationModalLabel">
                            <i class="bi bi-person-plus"></i> Daftar Pengguna
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="registrationForm" action="./helper/submit_registration.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Masukkan password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Modal Login -->
    <div class="modal fade animate__animated animate__fadeInDown" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div></div> class="modal-dialog modal-dialog-centered">
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

    <!-- Modal untuk Beli Paket -->
    <div class="modal fade" id="purchasePackageModal" tabindex="-1" aria-labelledby="purchasePackageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="packageForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="purchasePackageModalLabel">Pilih Paket</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="menu_paket_id">Pilih Paket:</label>
                            <select name="menu_paket_id" id="menu_paket_id" class="form-control" required>
                                <!-- Opsi paket dari database -->
                                <?php
                                session_start();
                                $conn = new mysqli("localhost", "root", "", "fitness_db");
                                if ($conn->connect_error) {
                                    echo '<option disabled>Gagal memuat paket</option>';
                                } else {
                                    $result = $conn->query("SELECT id, nama, harga FROM menu_paket");
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['id'] . '">' . $row['nama'] . ' - Rp' . number_format($row['harga'], 2) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success" onclick="">Bayar dengan Dana</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php if (file_exists('layout/footer.php')) include 'layout/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="assets/js/user.js"></script> -->

</body>
<script>
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

            if (password1.length < 8) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Password harus memiliki minimal 8 karakter!',
                    icon: 'error',
                    confirmButtonText: 'OK',
                });
                return;
            }


            // Validasi email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Format email tidak valid!',
                    icon: 'error',
                    confirmButtonText: 'OK',
                });
                return;
            }

            // Kirim data dengan AJAX
            const formData = $(this).serialize();

            $.ajax({
                url: './helper/submit_registration.php',
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'OK',
                        }).then(() => {
                            window.location.href = `user/payment.php?member_id=${response.member_id}&package_id=${response.package_id}`;
                        });
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
                    console.error('AJAX Error:', textStatus, errorThrown);
                    console.error('Response Text:', jqXHR.responseText);
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan. Mohon coba lagi nanti.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                    });
                },
            });
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
            interval: 5000,
            wrap: true,
        });
    }

    // BMI Calculator
    function calculateBMI() {
        const weight = parseFloat(document.getElementById('weight').value);
        const height = parseFloat(document.getElementById('height').value) / 100;

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
            interval: 3000,
            pause: 'hover',
        });
    }

    // Fitur buka Google Maps
    function openMaps() {
        window.open('https://goo.gl/maps/examplelink', '_blank');
    }
</script>


</html>