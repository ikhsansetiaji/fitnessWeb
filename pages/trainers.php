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
