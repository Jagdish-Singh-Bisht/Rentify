<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SBI Home Loan - Rentify</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: 'Segoe UI', sans-serif; background: #f9f9f9; margin: 0; padding: 0; }
    .container { max-width: 1100px; margin: auto; padding: 20px; background: #fff; }
    h1, h2, h3 { color: #2c3e50; text-align: center; }
    .banner img { width: 100%; max-height: 250px; object-fit: cover; border-radius: 6px; }
    .section { margin-top: 30px; padding: 20px; background: #f0f0f0; border-radius: 6px; }
    .emi-output { font-size: 18px; font-weight: bold; margin-top: 10px; color: #e67e22; }
    form { display: flex; flex-direction: column; gap: 10px; margin-top: 20px; }
    input, select, textarea { padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 4px; }
    button { background: #2e86de; color: white; padding: 10px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; }
    ul { list-style: disc; padding-left: 40px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="banner">
      <img src="./assets/images/sbi-banner.jpg" alt="SBI Home Loan">
    </div>

    <h1>SBI Home Loan Assistance</h1>

    <div class="section">
      <h2>Features of SBI Home Loan</h2>
      <ul>
        <li>Loan amount up to ₹50 Lakhs</li>
        <li>Low interest rates starting at 8.40% p.a.</li>
        <li>Flexible tenure up to 30 years</li>
        <li>No hidden charges</li>
        <li>Special rates for women and salaried individuals</li>
      </ul>
    </div>

    <div class="section">
      <h2>Eligibility Criteria</h2>
      <ul>
        <li>Minimum age: 21 years</li>
        <li>Salaried or self-employed with regular income</li>
        <li>Good credit history</li>
      </ul>
    </div>

    <div class="section">
      <h2>Documents Required</h2>
      <ul>
        <li>Identity Proof (Aadhar, PAN, Passport)</li>
        <li>Address Proof</li>
        <li>Income Proof (Salary slips/ITR)</li>
        <li>Bank Statements (last 6 months)</li>
        <li>Property Papers</li>
      </ul>
    </div>

    <div class="section">
      <h2>Contact SBI Loan Desk</h2>
      <p>Email: <a href="mailto:sbi-loan@bank.com">sbi-loan@bank.com</a></p>
      <p>Phone: 1800-123-4567</p>
      <p>Branch Address: SBI Main Branch, Hazratganj, Lucknow</p>
    </div>

    <div class="section">
      <h2>Apply for SBI Home Loan</h2>
      <form action="loan-save.php" method="POST">
        <input type="hidden" name="bank" value="SBI">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="property_id" placeholder="Property ID / Name">
        <input type="number" name="amount" placeholder="Loan Amount (in INR)" id="loanAmount" required>
        <input type="number" name="tenure" placeholder="Tenure (in months)" id="loanTenure" required>
        <input type="number" name="rate" placeholder="Interest Rate (e.g., 8.5)" id="interestRate" required>
        <button type="submit">Submit SBI Loan Application</button>
      </form>
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
