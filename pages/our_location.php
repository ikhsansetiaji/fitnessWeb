<style>
    /* General Styling for Our Location */
    #our-location {
        background-color: var(--light-bg);
        color: var(--text-color);
        display: grid;
        place-items: center;
        padding: 2rem;
        /* Menambahkan padding untuk ruang tambahan */
        height: auto;
        min-height: 100vh;
        /* Pastikan area mencakup layar penuh */
        box-sizing: border-box;
        /* Hindari overflow akibat padding */
    }

    /* Section Title Styling */
    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 2rem;
        text-align: center;
        /* Pastikan judul rata tengah */
        line-height: 1.3;
    }

    /* Custom Card Styling */
    .card-custom {
        background-color: var(--secondary-bg);
        /* Tambahkan warna latar */
        border: 1px solid #ddd;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        padding: 1.5rem;
        /* Tambahkan padding internal */
        width: 100%;
        /* Pastikan kartu memenuhi area */
        max-width: 900px;
        /* Batasi ukuran maksimal kartu */
        text-align: center;
        /* Sentralisasi isi kartu */
        margin-bottom: 2rem;
        /* Tambahkan spasi antar elemen */
    }

    .card-custom:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Map Container Styling */
    .map-container {
        width: 100%;
        max-width: 900px;
        /* Sesuaikan lebar maksimal peta */
        height: 400px;
        /* Tetapkan tinggi peta */
        border-radius: 10px;
        overflow: hidden;
        /* Hindari elemen keluar */
        margin: 0 auto;
        /* Pusatkan peta */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border-radius: 10px;
        border: none;
        /* Hapus border bawaan iframe */
    }
</style>
