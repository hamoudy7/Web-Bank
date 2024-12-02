const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});

/**
 * function SignUp() {
  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let text = document.getElementById("text");

  if (name === "" || email === "" || password === "") {
    text.innerHTML = "Please make sure to fill all the elements";
    text.style.color = "red";
  } else {
    text.innerHTML = "Thank you for your registration";
    text.style.color = "green";

    // Redirect to Dashboard.html after a short delay
    setTimeout(function () {
      window.location.href = "HOMEE2.html";
    }, 2000); // Redirects after 2 seconds
  }
}
 * 
 */

s; /**
 * function SignIn() {
  let email = document.getElementById("email2").value;
  let password = document.getElementById("password2").value;
  let text = document.getElementById("text2");

  if (email === "" || password === "") {
    text.innerHTML = "Please fill all the inputs";
    text.style.color = "red";
  } else {
    text.innerHTML = "Welcome Back!";
    text.style.color = "green";

    // Redirect to Dashboard.html after a short delay
    setTimeout(function () {
      window.location.href = "Dashboard.html";
    }, 2000); // Redirects after 2 seconds
  }
}

 */
