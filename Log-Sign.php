<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Log-Sign.css" />
    <title>Log in/Sign up</title>
    <!--Font Awesome import library from google -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <input type="hidden" name="form_type" value="signup"> <!--Add a hidden input to separate the sign in part from the login part-->
          <h1>Create Account</h1>
          <div class="social-icons">
            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <input id="name" type="text" name="name" placeholder="Name" />
          <input id="email" type="email" name="email" placeholder="Email" />
          <input id="number" type="text" name="number" placeholder="Phone number" />
          <input id="BirthDate" type="date" name="Birthdate" placeholder="Birth date" />
          <input id="password" type="password" name="password" placeholder="Password" />
          <button type="submit">Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <input type="hidden" name="form_type" value="signin"><!--Add a hidden input to separate the sign in part from the login part-->
          <h1>Sign In With</h1>
          <div class="social-icons">
            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <span>or use your email password</span>
          <input id="email2" type="email" name="email2" placeholder="Email" />
          <input id="password2" type="password" name="password2" placeholder="Password" />
          <a href="#">Forget Your Password?</a>
          <button type="submit">Sign In</button>
          <p id="text2"></p>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello, Friend!</h1>
            <p>Register with your personal details to use all of site features</p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <script src="Log-Sign.js"></script>
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
    $form_type = $_POST['form_type'];//$POST retreive the value under the key form_type
    if ($form_type == 'signup') {//sign up part
        if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["number"]) 
        || empty($_POST["Birthdate"]) || empty($_POST["password"])) {
            echo'<script type="text/javascript">
            alert("Please fill all the fields");
            </script>';
        } else {
            $name = checkData($_POST['name']);
            $email = checkData($_POST['email']);
            $phone_number = checkData($_POST['number']);
            $Birthdate = checkData($_POST['Birthdate']);
            $password = checkData($_POST['password']);
            
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            
            // Check if the email already exists in the users table
            $checkEmailQuery1 = "SELECT * FROM users WHERE email='$email'";
            $result1 = mysqli_query($con, $checkEmailQuery1);

            // Counting Rows , mysqli_num_rows($result) returns the number of rows in the result set.
            // If the number of rows is greater than 0, it means that there is at least one record in the database with the same email address.
            if (mysqli_num_rows($result1) > 0) {
                // Email already exists
                echo '<script type="text/javascript">
                        alert("Email already exists. Please use a different email.");
                        window.location.href="Log-Sign.php";
                      </script>';
            } else {
                // Insert data into the users table
                $sql1 = "INSERT INTO users (name, email, phone_number, date_of_birth, hashed_password) 
                         VALUES ('$name', '$email', '$phone_number', '$Birthdate', '$hashed_password')";

                if (mysqli_query($con, $sql1)) {
                    // Redirect to accounts.php on successful insertion
                    echo '<script type="text/javascript">
                            alert("Sign-up successful!");
                            window.location.href="accounts.php";
                          </script>';
                } else {
                    // Handle errors during query execution
                    echo "Error: " . mysqli_error($con);
                }
            }
        }
    } 
    elseif ($form_type == 'signin') {//log in part 
        if (empty($_POST["email2"]) || empty($_POST["password2"])) {
            echo '<script type="text/javascript">
            alert ("Please fill all the fields");
            </script>';
        } else {
            $email2 = checkData($_POST['email2']);
            $password2 = checkData($_POST['password2']);

            // Check if the email exists in the database
            $checkEmailQuery2 = "SELECT * FROM users where email = '$email2'";
            $result2 = mysqli_query($con, $checkEmailQuery2);

            if (mysqli_num_rows($result2) > 0) {
                // Email exists in the database
                // Fetch the user data
                $user = mysqli_fetch_assoc($result2);

                // Verify the password
                if (password_verify($password2, $user['hashed_password'])) {
                    // Password is correct
                    echo '<script type="text/javascript">
                    alert("Login successful");
                    window.location.href = "HOMEE2.php";
                    </script>';
                } else {
                    // Password is incorrect
                    echo '<script type="text/javascript">
                    alert("Email or password is incorrect");
                    </script>';
                }
            } else {
                echo '<script type="text/javascript">
                alert ("Sorry, Email not found in the database !");
                window.location.href="Log-Sign.php";
                </script>';
            }
        }
    }
}
?>
