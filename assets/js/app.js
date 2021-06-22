window.addEventListener("DOMContentLoaded", function () {
  validarFormulario();
});

$("#send").click(function (e) {
  e.preventDefault();
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;
  const send = document.getElementById("send").value;
  const error = document.getElementById("error");
  const success = document.getElementById("success");
  const txtError = document.getElementById("txtError");

  let expresionEmail;
  expresionEmail = /\w+@\w+\.+[a-z]/;

  if (name === "" || email === "" || message === "") {
    error.style.opacity = "1";
    txtError.innerHTML = "All fields are required";
    setTimeout(function () {
      error.style.opacity = "0";
    }, 5000);
    return false;
  } else if (name.length > 20) {
    error.style.opacity = "1";
    txtError.innerHTML = 'Name too long';
    setTimeout(function () {
      error.style.opacity = "0"
    }, 3000);
    return false;
  } else if (!expresionEmail.test(email)) {
    error.style.opacity = "1";
    txtError.innerHTML = "Invalid email format";
    setTimeout(function () {
      error.style.opacity = "0";
    }, 3000);
    return false;
  } else if (message.length > 60) {
    error.style.opacity = "1";
    txtError.innerHTML = 'Message too long';
    setTimeout(function () {
      error.style.opacity = "0";
    }, 3000);
    return false;
  } else {
    alert('Todo correcto');
  }
});