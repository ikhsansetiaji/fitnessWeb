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
