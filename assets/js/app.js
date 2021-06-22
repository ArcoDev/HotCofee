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
    txtError.innerHTML = "Todos los campos son obligatorios";
    setTimeout(function () {
      error.style.opacity = "0";
    }, 5000);
    return false;
  } else {
    alert("Se ha enviado correctamente");
  }
});
