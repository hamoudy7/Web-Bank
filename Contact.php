<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="Contact.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
  </head>
  <body>
    <header class="header">
      <nav class="navbar">
        <a href="#" class="logo">Union Bank of Switzerland</a>
      </nav>
    </header>
    <section class="contact-section">
      <div class="container">
        <h1>Contact Us</h1>
        <p>
          If you have any questions or need further information, please feel
          free to contact us using the form below.
        </p>
        <div class="contact-form">
          <form action="#" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
              <label for="subject">Subject:</label>
              <input type="text" id="subject" name="subject" required />
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea
                id="message"
                name="message"
                rows="5"
                required
              ></textarea>
            </div>
            <button type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <p>&copy; 2024 <span>UBS</span>. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
