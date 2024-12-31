<style>
    /* General Styling for Trainers */
    #trainers {
        background-color: var(--dark-bg);
        display: grid;
        place-items: center;
        padding: 2rem;
        min-height: 100vh;
    }

    /* Card Styling */
    .card-custom {
        background-color: var(--light-bg);
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        max-width: 350px;
        width: 100%;
        margin: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-custom:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    /* Trainer Image */
    .trainer-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 5px solid var(--primary-color);
        margin-bottom: 1rem;
    }

    /* Text Styling */
    .trainer-name {
        font-size: 1.3rem;
        font-weight: bold;
        color: var(--primary-color);
        text-align: center;
    }

    .trainer-title {
        font-size: 1rem;
        color: var(--primary-color);
        text-align: center;
    }

    .trainer-bio {
        font-size: 0.9rem;
        color: #aaa;
        line-height: 1.5;
        margin: 1rem 0;
        text-align: center;
    }

    /* Social Icons */
    .social-icons {
        display: flex;
        justify-content: center;
        margin-top: 1rem;
    }

    .social-icons a {
        color: #fff;
        font-size: 1.2rem;
        margin: 0 0.5rem;
        transition: color 0.3s ease;
    }

    .social-icons a:hover {
        color: var(--primary-color);
    }
</style>
<!-- Trainers Section -->
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