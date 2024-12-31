<style>
    /* BMI Section */
    #bmi-calculator {
        background-color: var(--light-bg);
        display: grid;
        place-items: center;
        /* Menyelaraskan elemen di tengah secara vertikal dan horizontal */
        height: 100vh;
    }

    .card {
        border: none;
        border-radius: 10px;
    }

    .card .form-label {
        font-weight: bold;
        color: #555;
    }

    #bmi-result h4 {
        color: #333;
        margin-bottom: 5px;
    }

    #bmi-result p {
        margin: 0;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
<!-- BMI Calculator -->

<script>
    // BMI Calculator
    function calculateBMI() {
        const weight = parseFloat(document.getElementById('weight').value);
        const height = parseFloat(document.getElementById('height').value) / 100; // Convert cm to meters

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
</script>