<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Account</title>
    <link rel="stylesheet" href="accounts.css" />
  </head>
  <body>
    <div class="container">
      <h1>Create Your Account</h1>
      <form id="accountForm" method = "POST"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Account Type -->
        <label for="accountType">Account Type:</label>
        <select id="accountType" name="accountType" require>
          <option value="">Select Account Type</option>
          <option value="savings">Savings</option>
          <option value="checking">Checking</option>
          <option value="business">Business</option>
        </select>

       


        <!-- Initial Deposit -->
        <label for="initialDeposit">Initial Deposit ($):</label>
        <input
          type="number"
          id="initialDeposit"
          name="initialDeposit"
          min="0"
          placeholder="0.00"
          require
        />

        <!--Currency type-->
        <label for="currency">Currency type:</label>
        <input
          type="text"
          id="currency"
          name="currency"
          placeholder="USD"
          require
        />

        <!-- Notifications Preference -->
        <label for="notifications">Notifications:</label>
        <input type="checkbox" id="notifications" name="notifications" />
        <span>Enable notifications for account activity</span>

        <!-- Submit Button -->
        <button type="submit">Create Account</button>
      </form>
    </div>
  </body>
</html>


<?php
include 'Connection.php';

function checkData($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (empty($_POST["accountType"]) || empty($_POST["initialDeposit"]) || empty($_POST["currency"])) {
      echo '<script type="text/javascript">
          alert("Please fill all the fields");
      </script>';
  }
  else{
    $accountType = checkData($_POST['accountType']);
    $initialDeposit = checkData($_POST['initialDeposit']);
    $currency = checkData($_POST['currency']);
  
    echo '<script type="text/javascript">
          window.location.href="Dashboard.php";
      </script>';
    
  }
}


?>

