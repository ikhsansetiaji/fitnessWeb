<style>
    /* General Styling for Gallery */
    #gallery {
        background-color: var(--secondary-bg);
        display: grid;
        place-items: center;
        /* Align elements both vertically and horizontally */
        height: auto;
        min-height: 100vh;
        /* Ensure it covers the full viewport height */
        padding: 2rem;
        /* Add padding to prevent content from touching edges */
        box-sizing: border-box;
        /* Ensure padding does not overflow */
    }

    /* Gallery Grid Styling */
    .gallery-container {
        display: grid;
        grid-template-columns: repeat(auto-fit,
                minmax(200px, 1fr));
        /* Responsive grid layout */
        gap: 1.5rem;
        /* Space between images */
        width: 100%;
        max-width: 1200px;
        /* Limit the maximum width */
        padding: 1rem;
        box-sizing: border-box;
    }

    /* Gallery Image Styling */
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        /* Add rounded corners for modern look */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Subtle shadow effect */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensure the image fits its container */
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
        /* Zoom effect on hover */
    }

    .gallery-item:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        /* Elevate shadow on hover */
        transform: translateY(-5px);
    }

    /* Optional Caption Styling */
    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.6);
        /* Semi-transparent background */
        color: #fff;
        padding: 0.5rem;
        text-align: center;
        font-size: 0.9rem;
        transition: opacity 0.3s ease;
        opacity: 0;
        /* Initially hidden */
    }

    .gallery-item:hover .gallery-caption {
        opacity: 1;
        /* Show caption on hover */
    }
</style>
<!-- Gallery Section -->
