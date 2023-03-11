<?php

if( isset( $_GET['invalid_login'] ) AND $_GET['invalid_login'] == 'true' ) {
  echo "<script>alert('Invalid login details');</script>";

}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- /bootsratps -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <form
        action="login_pros.php"
        method="post"
        class="needs-validation"
        novalidate
      >
        <div class="form-group">
          <label for="email">Email:</label>
          <input
            type="email"
            class="form-control"
            placeholder="Enter Your Email"
            name="email"
            id="uname"
            required
          />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input
            type="password"
            class="form-control"
            id="pwd"
            placeholder="Enter Your password"
            name="password"
            required
          />
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <br />
      <form action="Register.html">
        <p>Not a Member? Click Register</p>
        <br />
        <button
          type="submit"
          class="btn btn-primary"
          style="background-color: #4caf50"
        >
          Register
        </button>
      </form>
    </div>

    <script>
      (function () {
        "use strict";
        window.addEventListener(
          "load",
          function () {
            var forms = document.getElementsByClassName("needs-validation");

            var validation = Array.prototype.filter.call(
              forms,
              function (form) {
                form.addEventListener(
                  "submit",
                  function (event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                  },
                  false
                );
              }
            );
          },
          false
        );
      })();
    </script>
  </body>
</html>
