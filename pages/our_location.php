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