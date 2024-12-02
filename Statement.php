<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Download Statements</title>
    <link rel="stylesheet" href="Statement.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Download Your Account Statements</h1>
      </header>
      <main>
        <form id="statement-form">
          <div class="form-group">
            <label for="account">Select Account:</label>
            <select id="account" name="account" required>
              <option value="" disabled selected>Select your account</option>
              <option value="checking">Checking Account</option>
              <option value="savings">Savings Account</option>
              <option value="loans">Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <label for="from-date">From Date:</label>
            <input type="date" id="from-date" name="from-date" required />
          </div>
          <div class="form-group">
            <label for="to-date">To Date:</label>
            <input type="date" id="to-date" name="to-date" required />
          </div>
          <button type="submit">Download Statement</button>
        </form>
      </main>
    </div>
    <script>
      document
        .getElementById("statement-form")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          const account = document.getElementById("account").value;
          const fromDate = document.getElementById("from-date").value;
          const toDate = document.getElementById("to-date").value;

          if (account && fromDate && toDate) {
            alert(
              `Downloading statement for ${account} from ${fromDate} to ${toDate}`
            );
            // In a real application, you would make a request to the server here to download the statement
          } else {
            alert("Please fill in all fields.");
          }
        });
    </script>
  </body>
</html>
