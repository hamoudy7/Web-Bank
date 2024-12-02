<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Money Transfer Service</title>
    <link rel="stylesheet" href="Transfer.css" />
  </head>
  <body>
    <main>
      <div class="left-column">
        <h1>The <span> fast and trusted way</span> to send money online</h1>
        <h2>Welcome to Our Money Transfer Service</h2>
        <p>
          Experience the fastest and most reliable way to send money online.
          Whether you need to make a bank deposit, arrange a cash pickup, or
          transfer to mobile money, we’ve got you covered. Our secure and
          user-friendly platform ensures your funds reach their destination
          quickly and safely. Start your transfer today and enjoy peace of mind
          with every transaction.
        </p>
      </div>
      <div class="right-column">
        <h2>Send money online</h2>
        <form>
          <label for="from-country">From:</label>
          <select id="from-country" name="from-country">
            <option value="us">United States</option>
            <option value="uk">United Kingdom</option>
            <option value="F">French</option>
            <option value="Sp">Spain</option>
            <option value="Mo">Morocco</option>
            <option value="KSA">Saudi Arabia</option>
            <option value="UAE">United Arab Emirate</option>
            <option value="LB">Lebanon</option>
            <option value="CA">Canada</option>
            <option value="NO">Norway</option>
            <!-- Add more options as needed -->
          </select>
          <label for="to-country">To:</label>
          <select id="to-country" name="to-country">
            <option value="in">India</option>
            <option value="Al">Algeria</option>
            <option value="EG">Egypt</option>
            <option value="RU">Russia</option>
            <option value="UKR">Ukraine</option>
            <option value="Q">Qatar</option>
            <option value="JOR">Jordan</option>
            <option value="CHI">China</option>
            <!-- Add more options as needed -->
          </select>
          <label for="amount">Amount:</label>
          <input type="text" id="amount" name="amount" />
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" />
          <label for="payment-method">Payment Method:</label>
          <select id="payment-method" name="payment-method">
            <option value="credit-card">Credit Card</option>
            <option value="paypal">PayPal</option>
            <!-- Add more options as needed -->
          </select>
          <button id="submit" type="submit">Confirm</button>
        </form>
      </div>
    </main>
  </body>
</html>
