<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ICICI Home Loan - Rentify</title>
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
    button { background: #d63031; color: white; padding: 10px; font-size: 16px; border: none; border-radius: 4px; cursor: pointer; }
    ul { list-style: disc; padding-left: 40px; }
  </style>
</head>
<body>
  <div class="container">
    <div class="banner">
      <img src="./assets/images/icici-logo.png" alt="ICICI Home Loan">
    </div>

    <h1>ICICI Home Loan Assistance</h1>

    <div class="section">
      <h2>Features of ICICI Home Loan</h2>
      <ul>
        <li>Loan up to ₹75 Lakhs</li>
        <li>Interest rates starting at 8.35% p.a.</li>
        <li>Top-up loan facility available</li>
        <li>Quick digital approval</li>
        <li>Balance transfer facility from other banks</li>
      </ul>
    </div>

    <div class="section">
      <h2>Eligibility Criteria</h2>
      <ul>
        <li>Minimum age: 21 years</li>
        <li>Maximum age: 65 years at loan maturity</li>
        <li>Minimum monthly income ₹25,000</li>
      </ul>
    </div>

    <div class="section">
      <h2>Documents Required</h2>
      <ul>
        <li>Photo ID and Address Proof</li>
        <li>Last 3 months salary slips or ITR</li>
        <li>6 months bank statement</li>
        <li>Property documents</li>
      </ul>
    </div>

    <div class="section">
      <h2>Contact ICICI Loan Helpdesk</h2>
      <p>Email: <a href="mailto:icici-loan@bank.com">icici-loan@bank.com</a></p>
      <p>Phone: 1800-345-6789</p>
      <p>Branch Address: ICICI Tower, Alambagh, Lucknow</p>
    </div>

    <div class="section">
      <h2>Apply for ICICI Home Loan</h2>
      <form action="loan-save.php" method="POST">
        <input type="hidden" name="bank" value="ICICI">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="property_id" placeholder="Property ID / Name">
        <input type="number" name="amount" placeholder="Loan Amount (in INR)" id="loanAmount" required>
        <input type="number" name="tenure" placeholder="Tenure (in months)" id="loanTenure" required>
        <input type="number" name="rate" placeholder="Interest Rate (e.g., 8.5)" id="interestRate" required>
        <button type="submit">Submit ICICI Loan Application</button>
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
