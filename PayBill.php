<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pay Bills</title>
    <link rel="stylesheet" href="PayBill.css" />
  </head>
  <body>
    <main>
      <div class="left-column">
        <h1>Pay Bill Section $</h1>
        <h2>Welcome to our <span>Pay Bill Services</span></h2>
        <p>
          Manage and pay your bills quickly and securely. Select a payee, enter
          the amount, and choose your payment date. Keep track of your financial
          commitments and ensure timely payments, all from one convenient
          location.
        </p>
      </div>

      <div class="right-column">
        <h2>Pay Bill Form</h2>
        <form id="pay-bill-form">
          <label for="payee">Select Payee</label>
          <select id="payee">
            <option value="" disabled selected>Select a payee</option>
            <option value="credit-card">Credit Card Payment</option>
            <option value="mortgage">Mortgage Payment</option>
            <option value="car-loan">Car Loan Payment</option>
            <option value="utility-bill">Utility Bill</option>
            <option value="insurance">Insurance Payment</option>
            <option value="rent">Rent Payment</option>
          </select>
          <label for="amount">Amount</label>
          <input id="amount" type="number" />
          <label for="account">Select Account</label>
          <select id="account">
            <option value="" disabled selected>Select account</option>
            <option value="Checking-Account">Checking Account</option>
            <option value="Saving-Account">Saving Account</option>
            <option value="Credit-Card">Credit Card</option>
          </select>
          <label for="payment-date">Payment Date</label>
          <input type="date" id="payment-date" />
          <button type="button" onclick="submitPayment()">
            Submit Payment
          </button>
        </form>
      </div>
    </main>
    <script>
      function submitPayment() {
        let payee = document.getElementById("payee").value;
        let amount = document.getElementById("amount").value;
        let account = document.getElementById("account").value;
        let paymentDate = document.getElementById("payment-date").value;

        if (
          payee === "" ||
          amount === "" ||
          account === "" ||
          paymentDate === ""
        ) {
          alert("Please fill all the fields.");
        } else {
          alert(
            `Payee: ${payee}\nAmount: ${amount}\nAccount: ${account}\nPayment Date: ${paymentDate}\nPayment Successfull`
          );
        }
      }
    </script>
  </body>
</html>
