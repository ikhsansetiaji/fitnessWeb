// Base URL untuk mempermudah pengelolaan path
const BASE_URL = 'http://localhost:8000/fitnessWeb/'

$(document).ready(function () {
    // Handle form submit dengan AJAX
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault() // Cegah form reload

        // Validasi input
        const username = $('#username').val().trim()
        const email = $('#email').val().trim()
        const password1 = $('#password1').val().trim()
        const password2 = $('#password2').val().trim()

        if (!username || !email || !password1 || !password2) {
            Swal.fire({
                title: 'Error!',
                text: 'Semua field harus diisi!',
                icon: 'error',
                confirmButtonText: 'OK',
            })
            return
        }

        if (password1 !== password2) {
            Swal.fire({
                title: 'Error!',
                text: 'Password tidak cocok!',
                icon: 'error',
                confirmButtonText: 'OK',
            })
            return
        }

        // Jika validasi lolos, kirim data dengan AJAX
        const formData = $(this).serialize()

        $.ajax({
            url: `${BASE_URL}helper/submit_registration.php`,
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.status === 'success') {
                    // Redirect ke halaman pembayaran dengan parameter
                    window.location.href = `${BASE_URL}user/payment.php?member_id=${response.member_id}&package_id=${response.package_id}`
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: response.message,
                        icon: 'error',
                        confirmButtonText: 'OK',
                    })
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown)
                Swal.fire({
                    title: 'Error!',
                    text: 'Terjadi kesalahan. Mohon coba lagi nanti.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                })
            },
        })
    })

    // Navbar scroll effect
    document.addEventListener('scroll', () => {
        document
            .querySelector('.navbar')
            .classList.toggle('scrolled', window.scrollY > 50)
    })

    // Inisialisasi carousel untuk testimonial
    const carousel = document.querySelector('#testimonial-carousel')
    if (carousel) {
        new bootstrap.Carousel(carousel, {
            interval: 5000, // Waktu antar slide (ms)
            wrap: true, // Loop kembali ke awal setelah slide terakhir
        })
    }

    // BMI Calculator
    function calculateBMI() {
        const weight = parseFloat(document.getElementById('weight').value)
        const height = parseFloat(document.getElementById('height').value) / 100 // Convert cm to meters

        if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
            document.getElementById('bmi-value').textContent =
                'Please enter valid weight and height!'
            document.getElementById('bmi-classification').textContent = ''
            return
        }

        const bmi = (weight / (height * height)).toFixed(1)
        document.getElementById('bmi-value').textContent = bmi

        let classification = ''
        if (bmi < 18.5) {
            classification = 'Underweight'
        } else if (bmi >= 18.5 && bmi < 24.9) {
            classification = 'Normal weight'
        } else if (bmi >= 25 && bmi < 29.9) {
            classification = 'Overweight'
        } else {
            classification = 'Obesity'
        }

        document.getElementById(
            'bmi-classification'
        ).textContent = `Classification: ${classification}`
    }

    // Inisialisasi carousel untuk trainers
    const trainersCarousel = document.querySelector('#trainers-carousel')
    if (trainersCarousel) {
        new bootstrap.Carousel(trainersCarousel, {
            interval: 3000, // Waktu rotasi (ms)
            pause: 'hover', // Carousel berhenti saat di-hover
        })
    }

    // Fitur buka Google Maps
    function openMaps() {
        window.open('https://goo.gl/maps/examplelink', '_blank')
    }

    // Toggle password visibility
    document
        .querySelectorAll('[id^="togglePassword"]')
        .forEach(function (button) {
            button.addEventListener('click', function () {
                const passwordInput = document.querySelector(
                    `#${button.id.replace('toggle', '')}`
                )
                const passwordIcon = button.querySelector('i')

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text'
                    passwordIcon.classList.remove('bi-eye-slash')
                    passwordIcon.classList.add('bi-eye')
                } else {
                    passwordInput.type = 'password'
                    passwordIcon.classList.remove('bi-eye')
                    passwordIcon.classList.add('bi-eye-slash')
                }
            })
        })
})
