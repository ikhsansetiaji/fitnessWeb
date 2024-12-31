<style>
    /* Testimonial Section Styling */
    #testimonials {
        /* background-color: var(--dark-bg); */
        color: var(--text-color);
        display: grid;
        place-items: center;
        /* Menyelaraskan elemen di tengah secara vertikal dan horizontal */
        padding: 2rem;
        /* Tambahkan padding untuk kenyamanan */
        min-height: 100vh;
        /* Pastikan tinggi minimum untuk fleksibilitas */
    }

    /* Section Title Styling */
    .section-title {
        color: var(--primary-color);
        font-size: 2.5rem;
        margin-bottom: 2rem;
        font-weight: 700;
        text-align: center;
        /* Pastikan judul berada di tengah */
    }

    /* Testimonial Text Styling */
    .testimonial-text {
        font-size: 1.2rem;
        font-style: italic;
        color: #ddd;
        margin-bottom: 1.5rem;
        line-height: 1.6;
        /* Tambahkan jarak antar baris untuk keterbacaan */
        text-align: center;
        padding: 0 1rem;
        /* Tambahkan padding untuk teks */
    }

    /* Testimonial Name Styling */
    .testimonial-name {
        font-size: 1.3rem;
        font-weight: bold;
        color: var(--biru);
        text-align: center;
        margin-bottom: 0.5rem;
    }

    /* Testimonial Role Styling */
    .testimonial-role {
        font-size: 1rem;
        color: #aaa;
        text-align: center;
    }

    /* Carousel Controls Styling */
    .carousel-control-prev,
    .carousel-control-next {
        background-color: rgba(230, 57, 70, 0.7);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        transition: background-color 0.3s ease;
        /* Tambahkan transisi */
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        background-color: rgba(230, 57, 70, 1);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        filter: invert(1);
    }
</style>
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