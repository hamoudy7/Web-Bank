<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deposit Funds</title>
    <link rel="stylesheet" href="Deposit.css" />
  </head>
  <body>
    <main>
      <div class="left-column">
        <h1>Deposit Funds</h1>
        <h2>Welcome to our <span>Deposit Services</span></h2>
        <p>
          Easily deposit funds into your account. Choose the account where you
          want to make the deposit, enter the amount, and provide any additional
          information if required. Ensure that you have sufficient funds and
          correct details to complete the transaction smoothly.
        </p>
      </div>

      <div class="right-column">
        <h2>Deposit Form</h2>
        <form id="deposit-form">
          <label for="account">Select Account</label>
          <select id="account" name="account" required>
            <option value="" disabled selected>Select your account</option>
            <option value="checking">Checking Account</option>
            <option value="savings">Savings Account</option>
            <option value="credit-card">Credit Card</option>
          </select>
          <label for="amount">Amount</label>
          <input
            id="amount"
            type="number"
            name="amount"
            required
            step="0.01"
            min="0"
          />
          <label for="deposit-date">Deposit Date</label>
          <input type="date" id="deposit-date" name="deposit-date" required />
          <label for="notes">Additional Notes (Optional)</label>
          <textarea
            id="notes"
            name="notes"
            rows="4"
            placeholder="Add any notes here"
          ></textarea>
          <button type="submit">Submit Deposit</button>
        </form>
      </div>
    </main>
    <script src="scripts.js"></script>
  </body>
</html>
