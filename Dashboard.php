<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banking Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css" />
  </head>
  <body>
    <header>
      <img src="./img/Header Logo.jpg" alt="bank logo" />
      <nav>
        <ul>
          <li><a href="HOMEE2.php">Home</a></li>
          <li><a href="Setting.php">Settings</a></li>
          <li><a href="Contact.php">Contact US</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </nav>
      <div class="profile">
        <img src="./img/Ali.jpg" alt="Profile Picture" />
        <span>AliShoker.17</span>
      </div>
    </header>

    <main>
      <section class="account-overview">
        <!--Account Types: List of accounts such as Checking, Savings, Credit Card-->
        <h2>Account Overview</h2>
        <div class="account-cards">
          <div class="account-card">
            <h3>Checking Account</h3>
            <p>****1234</p>
            <p>Balance: $10,000.00</p>
          </div>
          <div class="account-card">
            <h3>Savings Account</h3>
            <p>****5678</p>
            <p>Balance: $5,000.00</p>
          </div>
          <div class="account-card">
            <h3>Credit Card</h3>
            <p>****9012</p>
            <p>Balance: $2,000.00</p>
          </div>
        </div>
      </section>

      <section class="recent-transactions">
        <h2>Recent Transactions</h2>
        <input type="text" id="search" placeholder="Search Transactions" />
        <table>
          <thead>
            <tr>
              <th>Date</th>
              <th>Description</th>
              <th>Amount</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2024-08-25</td>
              <td>Grocery Store</td>
              <td>-$150.00</td>
              <td>$9,850.00</td>
            </tr>
            <tr>
              <td>2024-08-25</td>
              <td>Grocery Store</td>
              <td>-$150.00</td>
              <td>$9,850.00</td>
            </tr>
            <tr>
              <td>2024-08-25</td>
              <td>Grocery Store</td>
              <td>-$150.00</td>
              <td>$9,850.00</td>
            </tr>
            <tr>
              <td>2024-08-24</td>
              <td>Salary Deposit</td>
              <td>+$2,000.00</td>
              <td>$10,000.00</td>
            </tr>
            <tr>
              <td>2024-08-22</td>
              <td>Utility Bill</td>
              <td>-$200.00</td>
              <td>$8,000.00</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section class="quick-actions">
        <h2>Quick Actions</h2>
        <div class="actions">
          <button><a href="Transfer.php">Transfer Funds</a></button>
          <button><a href="PayBill.php">Pay Bills</a></button>
          <button><a href="Statement.php">View Statement</a></button>
          <button><a href="Deposit.php">Deposit</a></button>
          <button><a href="Withdraw.php">Withdraw</a></button>
          <img src="./img/Header Logo.jpg" alt="logo" />
        </div>
      </section>

      <section class="notifications">
        <h2>Notifications</h2>
        <div class="alert">
          <p>You have a low balance warning on your savings account.</p>
        </div>
        <div class="alert">
          <p>New credit card statement available.</p>
        </div>
      </section>
    </main>

    <footer>
      <p>
        &copy; 2024 UBS INTERNATIONAL. All rights reserved.
        <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
      </p>
      <p>
        Contact us: 1-800-123-4567 |
        <a href="mailto:support@yourbank.com">UBSinterbational@gmail.com</a>
      </p>
    </footer>
  </body>
</html>
