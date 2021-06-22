window.addEventListener('DOMContentLoaded', function() {
  animaMenu();
});

function animaMenu() {
  const menu = document.querySelector('.menu-mobile');
  const items = document.querySelector('.items');
  if(menu) {
    menu.addEventListener('click', () => {
      items.classList.toggle('anima-menu');
    });
  }
}

$("#send").click(function (e) {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;
  const error = document.getElementById("error");
  const correct = document.getElementById("correct");
  const txtError = document.getElementById("txtError");

  let expresionEmail;
  expresionEmail = /\w+@\w+\.+[a-z]/;

  if (name === "" || email === "" || message === "") {
    error.style.opacity = "1";
    txtError.innerHTML = "All fields are required";
    setTimeout(function () {
      error.style.opacity = "0";
    }, 3000);
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
    $.ajax({
      url: 'assets/email/email.php',
      type: 'POST',
      dataType: $('#send-email').serialize(),
      success: function () {
        correct.style.opacity = "1";
        setTimeout(function () {
          correct.style.opacity = "0";
        }, 3000);
      }
    });
  }
});