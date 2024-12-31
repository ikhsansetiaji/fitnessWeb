<style>
    /* Pricing Section Styling */
    #pricing {
        background-color: var(--secondary-bg);
        display: grid;
        place-items: center;
        /* Menyelaraskan elemen di tengah secara vertikal dan horizontal */
        padding: 2rem;
        /* Tambahkan padding untuk ruang tambahan */
        min-height: 100vh;
        /* Sesuaikan untuk fleksibilitas di perangkat kecil */
    }

    /* Pricing Card Styling */
    .pricing-card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 2rem;
        text-align: center;
        max-width: 350px;
        /* Batas lebar maksimal untuk menjaga konsistensi */
        width: 100%;
        /* Lebar penuh untuk responsivitas */
        margin: 1rem auto;
        /* Tambahkan margin untuk pemisahan antar kartu */
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
    }

    /* Title and Price */
    .pricing-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 1rem;
    }

    .pricing-price {
        font-size: 2rem;
        /* Lebih besar untuk menonjolkan harga */
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
    }

    /* Features List */
    .pricing-features {
        list-style: none;
        padding: 0;
        margin: 1rem 0;
    }

    .pricing-features li {
        margin: 0.5rem 0;
        font-size: 1rem;
        color: #666;
    }

    /* Review Section */
    .pricing-review {
        font-size: 0.9rem;
        color: #555;
        font-style: italic;
        margin-top: 1rem;
    }

    .pricing-review span {
        display: block;
        margin-top: 0.5rem;
        font-weight: 600;
        color: var(--primary-color);
    }

    /* Button */
    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        border-radius: 50px;
        padding: 0.75rem 2rem;
        font-size: 1rem;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn-primary:hover {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
        transform: translateY(-3px);
        /* Efek hover */
    }

    /* Featured Plan Highlight */
    .featured {
        border: 3px solid var(--primary-color);
        position: relative;
    }

    .featured::before {
        content: 'Most Popular';
        position: absolute;
        top: -12px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--primary-color);
        color: #fff;
        padding: 0.3rem 1rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
</style>
