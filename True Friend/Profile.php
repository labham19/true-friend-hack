<?php

  include("./backend/conn.php");
  session_start();
  if(!isset($_SESSION['user_id'])){
    echo '<script>window.location="./index.php"</script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Profile</title>

<style>
    .mydiv{
        width: 70%;
        border: 1px solid;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        box-shadow: 5px 10px 30px;
    }
</style>
</head>

<body>
   <?php include('./components/Navbar.php') ?>
    <div class="mydiv mx-auto bg-light py-3 ">
        <h1 class="mt-1 mx-3">My Profile</h1>
        <hr>
        <div class="row px-3">
            <div class="mb-3 col-md-12 px-4 col-lg-6">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                <input class="form-control" type="text" placeholder="Full Name" value="<?=$_SESSION['user_name']?>" aria-label="Disabled input example" disabled>
              </div>
              <div class="mb-3 col-md-12 px-4 col-lg-6">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input class="form-control" type="text" placeholder="Email" value="<?=$_SESSION['email']?>" aria-label="Disabled input example" disabled>
              </div>
              <div class="mb-3 col-md-12 px-4 col-lg-6">
                <label for="exampleFormControlInput1" class="form-label">Dob</label>
                <input class="form-control" type="text" placeholder="Email" value="<?=$_SESSION['dob']?>" aria-label="Disabled input example" disabled>
              </div>
        </div>
        <h3 class="mt-1 mx-3">Change Password</h3>
        <hr>
        <div class="row px-3">
              <div class="mb-1 col-md-12 px-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Old Password</label>
                <input class="form-control" id="oldPass" type="password" placeholder="Old Password">
              </div>
              <div class="mb-1 col-md-12 px-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">New Password</label>
                <input class="form-control" id="newPass" type="password" placeholder="New Password">
              </div>
              <div class="mb-1 col-md-12 px-4 col-lg-4">
                <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                <input class="form-control" id="confirmPass" type="password" placeholder="Confirm Password" >
              </div>
        </div>
        <button type="button" onclick="ChangePassword()" class="btn btn-outline-primary mt-3" style="margin-left:27px"> Change Password</button>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function ChangePassword(){
        const newPassword = document.getElementById('newPass');
        const confirmPassword = document.getElementById("confirmPass");
        const oldPassword = document.getElementById("oldPass"); 
        if(oldPassword.value===''||newPassword.value===''||confirmPassword.value===''){
            alert("All Passwords are required")
            return
        }
        if(newPassword.value!==confirmPassword.value ){
            alert("Passwords need to be same")
            return;
        }

        alert("password saved")
    }
</script>
</html>