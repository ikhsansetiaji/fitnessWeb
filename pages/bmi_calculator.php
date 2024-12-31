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
<section id="bmi-calculator" class="py-5 text-center">
    <div class="container">
        <h2 class="section-title mb-4">BMI Calculator</h2>
        <p class="mb-4">Calculate your Body Mass Index (BMI) and find out your health status:</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-sm">
                    <div class="form-group mb-3">
                        <label for="weight" class="form-label">Weight (kg):</label>
                        <input type="number" id="weight" class="form-control" placeholder="Enter your weight">
                    </div>
                    <div class="form-group mb-3">
                        <label for="height" class="form-label">Height (cm):</label>
                        <input type="number" id="height" class="form-control" placeholder="Enter your height">
                    </div>
                    <button class="btn btn-primary w-100" onclick="calculateBMI()">Calculate BMI</button>
                    <div id="bmi-result" class="mt-4 text-center">
                        <h4>Your BMI:</h4>
                        <p id="bmi-value" class="fs-5 text-muted"></p>
                        <p id="bmi-classification" class="fs-6 text-muted"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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