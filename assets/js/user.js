$(document).ready(function () {
  // Handle form submit dengan AJAX
  $('#registrationForm').on('submit', function (e) {
      e.preventDefault(); // Cegah reload halaman

      // Ambil nilai input
      const username = $('#username').val().trim();
      const email = $('#email').val().trim();
      const password1 = $('#password1').val().trim();
      const password2 = $('#password2').val().trim();

      // Validasi input
      if (!username || !email || !password1 || !password2) {
          Swal.fire({
              title: 'Error!',
              text: 'Semua field harus diisi!',
              icon: 'error',
              confirmButtonText: 'OK',
          });
          return;
      }

      // Validasi format email
      const emailRegex = /^[^\\s@]+@[^\s@]+\\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
          Swal.fire({
              title: 'Error!',
              text: 'Format email tidak valid!',
              icon: 'error',
              confirmButtonText: 'OK',
          });
          return;
      }

      // Validasi password
      if (password1 !== password2) {
          Swal.fire({
              title: 'Error!',
              text: 'Password dan konfirmasi password tidak cocok!',
              icon: 'error',
              confirmButtonText: 'OK',
          });
          return;
      }

      if (password1.length < 8) {
          Swal.fire({
              title: 'Error!',
              text: 'Password harus memiliki minimal 8 karakter.',
              icon: 'error',
              confirmButtonText: 'OK',
          });
          return;
      }

      // Kirim data ke server menggunakan AJAX
      const formData = $(this).serialize();
      $.ajax({
          url: './helper/submit_registration.php', // URL ke backend
          type: 'POST',
          data: formData,
          dataType: 'json',
          success: function (response) {
              if (response.status === 'success') {
                  Swal.fire({
                      title: 'Berhasil!',
                      text: response.message,
                      icon: 'success',
                      confirmButtonText: 'OK',
                  }).then(() => {
                      window.location.href = './user/login.php'; // Redirect ke halaman login
                  });
              } else {
                  Swal.fire({
                      title: 'Error!',
                      text: response.message,
                      icon: 'error',
                      confirmButtonText: 'OK',
                  });
              }
          },
          error: function (jqXHR, textStatus, errorThrown) {
              console.error('AJAX Error:', textStatus, errorThrown);
              Swal.fire({
                  title: 'Error!',
                  text: 'Terjadi kesalahan pada server. Silakan coba lagi nanti.',
                  icon: 'error',
                  confirmButtonText: 'OK',
              });
          },
      });



  // Navbar scroll effect
  document.addEventListener('scroll', () => {
    document
      .querySelector('.navbar')
      .classList.toggle('scrolled', window.scrollY > 50);
  });

  // Inisialisasi carousel untuk testimonial
  const carousel = document.querySelector('#testimonial-carousel');
  if (carousel) {
    new bootstrap.Carousel(carousel, {
      interval: 5000,
      wrap: true,
    });
  }

  // BMI Calculator
  function calculateBMI() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value) / 100;

    if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
      document.getElementById('bmi-value').textContent =
        'Please enter valid weight and height!';
      document.getElementById('bmi-classification').textContent = '';
      return;
    }

    const bmi = (weight / (height * height)).toFixed(1);
    document.getElementById('bmi-value').textContent = bmi;

    let classification = '';
    if (bmi < 18.5) {
      classification = 'Underweight';
    } else if (bmi >= 18.5 && bmi < 24.9) {
      classification = 'Normal weight';
    } else if (bmi >= 25 && bmi < 29.9) {
      classification = 'Overweight';
    } else {
      classification = 'Obesity';
    }

    document.getElementById(
      'bmi-classification'
    ).textContent = `Classification: ${classification}`;
  }

  // Inisialisasi carousel untuk trainers
  const trainersCarousel = document.querySelector('#trainers-carousel');
  if (trainersCarousel) {
    new bootstrap.Carousel(trainersCarousel, {
      interval: 3000,
      pause: 'hover',
    });
  }

  // Fitur buka Google Maps
  function openMaps() {
    window.open('https://goo.gl/maps/examplelink', '_blank');
  }
});
});
});