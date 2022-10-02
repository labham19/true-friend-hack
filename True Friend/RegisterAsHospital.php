<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
</head>
<style>
    body {
      background-image: url("img/image-4.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
    }
    .mydiv {
      margin: auto;
      padding-bottom: 10px;
    }

    .mydiv2 {
      border-radius: 5px;
      backdrop-filter: blur(10px);
      background-color: rgb(230, 230, 230, 0.2);
      width: 40%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .mydiv3 {
      padding-top: 10px;
    }

    .mydiv3 h2 {
      font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
        sans-serif;
    }
  </style>
  <body>
  <?php include('./includes/utils.html')?>
    <div class="container mydiv2">
      <div class="container mydiv3"><h2>Hospital Registration portal</h2></div>
      <form class="row g-3 needs-validation col-12 mydiv" method="POST" enctype="multipart/form-data" action="./backend/auth.php" novalidate>
        <div>
          <div class="input-group has-validation">
            <i
              class="bi bi-person-fill input-group-text"
              id="inputGroupPrepend"
            ></i>
            <input
              placeholder="Hospital name"
              name="hospitalName"
              type="text"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div>
          <div class="input-group has-validation">
            <i
              class="bi bi-envelope-fill input-group-text"
              id="inputGroupPrepend"
            ></i>
            <input
              placeholder="E-mail"
              name="email"
              type="email"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div>
          <div class="input-group has-validation">
            <i class="bi bi-pass input-group-text" id="inputGroupPrepend"></i>
            <input
              placeholder="Password"
              name="password"
              type="password"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div>
          <div class="input-group has-validation">
            <i
              class="bi bi-pass-fill input-group-text"
              id="inputGroupPrepend"
            ></i>
            <input
              placeholder="Confirm password"
              name="confirmPassword"
              type="password"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div>
          <div class="input-group has-validation">
          <i
              class="bi bi-building input-group-text"
              id="inputGroupPrepend"
            ></i>
            <input
              placeholder="Address"
              name="address"
              type="text"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation col-lg-4">
            <i
              class="bi bi-building input-group-text"
              id="inputGroupPrepend"
            ></i>
            <input
              placeholder="City"
              name="city"
              type="text"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation col-lg-4">
            <i
              class="bi bi-building input-group-text"
              id="inputGroupPrepend"
            ></i>
            <input
              placeholder="State"
              name="state"
              type="text"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group has-validation col-lg-4">
            <i
              class="bi bi-geo-alt-fill input-group-text"
              id="inputGroupPrepend"
            ></i>
            <input
              placeholder="Zip Code"
              name="zipCode"
              type="text"
              class="form-control"
              id="validationCustomUsername"
              aria-describedby="inputGroupPrepend"
              required
            />
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="file" name="displayImage" class="form-control" id="displayImage" />
          <label
            class="input-group-text"
            for="inputGroupFile02"
            placeholder="upload your display image"
            >Upload</label
          >
        </div>
        <div>
          <div class="form-check">
            <input
              class="form-check-input"
              name="check"
              type="checkbox"
              value=""
              id="invalidCheck"
              required
            />
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div>
          <input name="register_hospital" class="btn btn-primary" type="submit" value="Submit"></input>
        </div>
      </form>
    </div>


    <script>
      ;(function () {
        "use strict"

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation")

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add("was-validated")
            },
            false
          )
        })
      })()
    </script>

    
</body>
</html>