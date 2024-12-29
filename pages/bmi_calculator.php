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