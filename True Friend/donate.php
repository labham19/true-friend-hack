<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Events</title>
    <link rel="stylesheet" href="css/Common.css">
</head>
<body>
    
    <?php include('./components/Navbar.php') ?>
    <div class="container my-5 py-3">
     <h5>Check Out The Blood Donation Camps Near You</h5> 
    <div class="row">
     
       <div class="col-md-6 my-2">
        <div class="card">
          <img src="./uploads/WhatsApp Image 2022-10-01 at 20.34.17(1).jpeg" class="card-img-top" style="height: 400px;" />
          <div class="card-body">
            <p class="card-text"><b>Max Hospital, Pitampura, New Delhi, 129422</b></p>
            <p class="card-text text-danger"><b>4th October 2022, 3 PM Onwards</b></p>
            <div>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?=$cnt?>" aria-expanded="false" aria-controls="collapseExample">
                Register Me Now
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 my-2">
        <div class="card">
          <img src="./uploads/WhatsApp Image 2022-10-01 at 20.34.18.jpeg" class="card-img-top" style="height: 400px;" />
          <div class="card-body">
            <p class="card-text"><b>Apollo Hospital, Shakurpur, New Delhi, 133030</b></p>
            <p class="card-text text-danger"><b>7th October 2022, 5 PM Onwards</b></p>
            <div>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?=$cnt?>" aria-expanded="false" aria-controls="collapseExample">
                Register Me Now
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 my-2">
        <div class="card">
          <img src="./uploads/fortishospitalshah.jpg" class="card-img-top" style="height: 400px;" />
          <div class="card-body">
            <p class="card-text"><b>Fortis Hospital, Chandi Chowk, New Delhi, 129422</b></p>
            <p class="card-text text-danger"><b>11th October 2022, 2 PM Onwards</b></p>
            <div>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?=$cnt?>" aria-expanded="false" aria-controls="collapseExample">
                Register Me Now
              </button>
            </div>
          </div>
        </div>
      </div>
      
    </div>

  </div>
    <?php
        include "components/Signup_modal.php";
        include "components/Login_modal.php"; 
    ?>
</body>
</html>