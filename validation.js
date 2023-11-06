function validateForm() {
  var name = document.form1.name.value;
  var pno = document.form1.pno.value;
  var email = document.form1.email.value;
  var pass = document.form1.pass.value;
  var t1 = document.getElementById("t1");
  var t2 = document.getElementById("t2");

  clearErrorMessages(); // Clear previous error messages

  if (name === "") {
    showError("Name is required.", "name");
  }

  if (pno === "") {
    showError("Phone number is required.", "pno");
  } else if (!/^\d{10}$/.test(pno)) {
    showError("Phone number must be a 10-digit number.", "pno");
  }

  if (email === "") {
    showError("Email is required.", "email");
  } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
    showError("Email is not valid.", "email");
  }

  if (pass === "") {
    showError("Password is required.", "pass");
  }

  if (!t1.checked && !t2.checked) {
    showError("Select at least one business plan.", "plan");
  }

  if (hasErrors()) {
    return false; // Prevent form submission if there are errors
  }

  return true; // Allow form submission if all fields are valid
}

function showError(message, inputName) {
  var error = document.createElement("span");
  error.className = "error-text";
  error.style.color = "#ff4500";
  error.innerHTML = message;

  var inputElement = document.form1[inputName];
  inputElement.insertAdjacentElement("afterend", error);
}

function clearErrorMessages() {
  var errorMessages = document.querySelectorAll(".error-text");
  errorMessages.forEach(function(errorMessage) {
    errorMessage.remove();
  });
}

function hasErrors() {
  return document.querySelectorAll(".error-text").length > 0;
}
