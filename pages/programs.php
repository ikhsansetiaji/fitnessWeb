<style>
    /* General Styling for Programs */
    #programs {
        background-color: var(--secondary-bg);
        color: var(--text-color);
        display: grid;
        place-items: center;
        /* Center content both vertically and horizontally */
        height: auto;
        min-height: 100vh;
        /* Cover the full viewport height */
        padding: 2rem;
        /* Add spacing to prevent content from touching edges */
    }

    .program {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        width: 100%;
        max-width: 1200px;
        padding: 2rem;
        background-color: var(--light-bg);
        transition: background-color 0.3s ease;
    }

    /* Program Card Styling */
    .program-card {
        background-color: var(--text-color);
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 1.5rem;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease,
            background-color 0.3s ease;
    }

    .program-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.3);
        background-color: #ffd700;
        /* Change background on hover */
    }

    /* Program Card Title Styling */
    .program-card h3 {
        color: var(--primary-color);
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        transition: color 0.3s ease;
    }

    /* Program Description Styling */
    .program-card p {
        font-size: 1rem;
        color: var(--text-color);
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    /* Program Schedule Styling */
    .program-schedule {
        margin-top: 1rem;
        font-size: 1rem;
        font-weight: 600;
        color: var(--text-color);
        background-color: var(--primary-color);
        padding: 0.6rem 1.2rem;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .program-schedule:hover {
        background-color: var(--secondary-color);
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    /* Call-to-Action Button Styling */
    .program-card .cta-button {
        display: inline-block;
        margin-top: 1.5rem;
        padding: 0.75rem 1.5rem;
        background-color: var(--primary-color);
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 30px;
        text-transform: uppercase;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
</style>
<!-- Programs Section -->
