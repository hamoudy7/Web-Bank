let from = document.getElementById("from-country");
let to = document.getElementById("to-country");
let amount = document.getElementById("amount");
let email = document.getElementById("email");
let paymentMethode = document.getElementById("payment-method");
let submit = document.getElementById("submit");

//decalare this var to be later the array of the details
let TransferDetails;

//checking if the localStorage has details data
//localStorage.getItem("details") retrieves the value associated with the key "details" from the local storage.
//The if statement checks if this value is truthy, meaning it exists and is not null or undefined.
//This line checks if there is an item in localStorage with the key "details". The localStorage.getItem("details")
//method returns the value associated with the key "details" if it exists, or null if it does not.
if (localStorage.getItem("details")) {
  try {
    TransferDetails = JSON.parse(localStorage.getItem("details"));
  } catch (e) {
    TransferDetails = [];
  }
} else {
  TransferDetails = [];
}

//Save Data in localStorage Function

submit.onclick = () => {
  // Create object to save all the data
  let newDetails = {
    from: from.value,
    to: to.value,
    amount: amount.value,
    email: email.value,
    paymentMethode: paymentMethode.value,
  };
  if (
    from.value != "" &&
    to.value != "" &&
    amount.value != "" &&
    email.value != "" &&
    paymentMethode.value != ""
  ) {
    TransferDetails.push(newDetails);
  }
  localStorage.setItem("detials", JSON.stringify(TransferDetails));
  console.log(TransferDetails);
};
