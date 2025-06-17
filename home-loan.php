<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Loan Assistance - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f5f5f5; margin: 0; padding: 0; }
    .container { max-width: 1100px; margin: auto; padding: 20px; background: #fff; }
    h1, h2 { color: #2c3e50; text-align: center; }
    .banks { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 20px; }
    .bank-logo { background: #fff; padding: 15px; border: 1px solid #ddd; border-radius: 6px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); text-align: center; width: 180px; }
    .bank-logo img { max-width: 100%; height: 60px; object-fit: contain; }
    .bank-logo a { display: block; margin-top: 10px; text-decoration: none; background: #2980b9; color: white; padding: 8px; border-radius: 4px; }
    .form-section, .emi-section { margin-top: 40px; padding: 20px; border: 1px solid #ccc; border-radius: 6px; background: #fafafa; }
    form { display: flex; flex-direction: column; gap: 10px; }
    input, select { padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; }
    button { background: #27ae60; color: white; padding: 10px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; }
    .emi-output { font-size: 18px; font-weight: bold; margin-top: 10px; color: #e67e22; }
  </style>
</head>
<body>
  <div class="container">
    <h1>Home Loan Assistance</h1>

    <h2>Our Bank Partners</h2>
    <div class="banks">
      <div class="bank-logo">
        <img src="./assets/images/sbi-logo.png" alt="SBI">
        <a href="sbi-loan.php">Apply Now</a>
      </div>
      <div class="bank-logo">
        <img src="./assets/images/hdfc-logo.png" alt="HDFC">
        <a href="hdfc-loan.php">Apply Now</a>
      </div>
      <div class="bank-logo">
        <img src="./assets/images/axis-logo.png" alt="Axis">
        <a href="axis-loan.php">Apply Now</a>
      </div>
      <div class="bank-logo">
        <img src="./assets/images/icici-logo.png" alt="ICICI">
        <a href="icici-loan.php">Apply Now</a>
      </div>
    </div>

    <div class="form-section">
      <h2>Loan Application Form</h2>
      <form action="loan-save.php" method="POST">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="property_id" placeholder="Property ID / Name">
        <input type="number" name="amount" placeholder="Loan Amount (in INR)" id="loanAmount" required>
        <input type="number" name="tenure" placeholder="Tenure (in months)" id="loanTenure" required>
        <input type="number" name="rate" placeholder="Interest Rate (Annual %, e.g., 8.5)" id="interestRate" required>
        <button type="submit">Submit Application</button>
      </form>
    </div>

    <div class="emi-section">
      <h2>EMI Calculator</h2>
      <p>Enter loan amount, tenure, and interest rate above to calculate EMI:</p>
      <div class="emi-output" id="emiResult">EMI: ₹0</div>
    </div>
  </div>

  <script>
    const amountInput = document.getElementById('loanAmount');
    const tenureInput = document.getElementById('loanTenure');
    const rateInput = document.getElementById('interestRate');
    const emiResult = document.getElementById('emiResult');

    function calculateEMI() {
      const P = parseFloat(amountInput.value);
      const N = parseInt(tenureInput.value);
      const R = parseFloat(rateInput.value) / 12 / 100;

      if (!P || !N || !R) {
        emiResult.textContent = 'EMI: ₹0';
        return;
      }

      const EMI = (P * R * Math.pow(1 + R, N)) / (Math.pow(1 + R, N) - 1);
      emiResult.textContent = `EMI: ₹${EMI.toFixed(2)}`;
    }

    amountInput.addEventListener('input', calculateEMI);
    tenureInput.addEventListener('input', calculateEMI);
    rateInput.addEventListener('input', calculateEMI);
  </script>
</body>
</html>
