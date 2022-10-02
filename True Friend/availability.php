<?php
session_start();
include("./backend/conn.php");
 
 $city_name = '';
 if(isset($_GET['city'])){
     $city_name = $_GET['city'];
     $_SESSION['city_name'] = $city_name; 
     $show_search=false;    
 }
 else{
    $show_search=true;
 }
   
$query = "SELECT city FROM `hospitals` WHERE `city`='$city_name'";
$query_fire = mysqli_query($conn,$query);
if(mysqli_num_rows($query_fire)==0){
    $show_search = true;
}



$noRequest = false;

if(isset($_SESSION['user_id'])){
  $user_id = $_SESSION['user_id'];
}
else
$noRequest = true;


if(isset($_SESSION['bloodGroup'])){
  $currentUserBloodGroup = $_SESSION['bloodGroup'];
}

if(isset($_SESSION['hospitalName']))
$noRequest = true;

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Availability &starf;</title>
  <link rel="stylesheet" href="css/Common.css">
  <style>
    .layer{
        background-color: rgb(224, 224, 235,0.9);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100vh;
    }
    .search_container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
  </style>
</head>

<body>
  <?php include('./components/Navbar.php') ?>
  

  <div class="container my-5 py-3">
     <h5>Check Out The Availabilities In <?=$city_name ?></h5> 
    <div class="row">
      <?php
      $cnt=1;
      $query = "SELECT * FROM `hospitals` where city='$city_name'";
      $query_fire = mysqli_query($conn, $query);
      
    // Loops through the hospitals, if blood availability found it gets displayed.

      if(mysqli_num_rows($query_fire)>0){
      while($hos = mysqli_fetch_assoc($query_fire)){
        $hos_id = $hos['id'];  
        if(mysqli_num_rows(mysqli_query($conn,"SELECT `id` FROM `bloodinfo` where `hospital_id`='$hos_id'"))>0){        
      ?>

       <div class="col-md-4 my-2">
        <div class="card">
          <img src="./uploads/<?php if($hos['displayImage']){echo($hos['displayImage']);}else{echo('notFound.png');}?>" class="card-img-top" style="height: 200px;" alt="<?=$hos['hospitalName']?>">
          <div class="card-body">
            <p class="card-text"><b><?=$hos['hospitalName']?>, <?=$hos['address']?></b></p>
            <div>
              <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?=$cnt?>" aria-expanded="false" aria-controls="collapseExample">
                Check Availability
              </button>
            </div>
            <div class="collapse mt-2" id="collapseExample<?=$cnt++?>">
              <div class="card card-body">
                <table class="table table-striped text-center table-hover">
                  <thead>
                    <tr>
                      <th colspan="2">Blood Group</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                    $infoQuery = "SELECT `id`,`bloodGroup` from `bloodinfo` where `hospital_id`='$hos_id'";
                    $infoQueryFire = mysqli_query($conn, $infoQuery);

                    while($data = mysqli_fetch_array($infoQueryFire)){ ?>

                    <form method="POST" action="./backend/handleRequests.php">
                    <input type="hidden" name="infoId" value="<?=$data['id']?>"/> <input type="hidden" name="hospitalId" value="<?=$hos_id?>"/> <input type="hidden" name="bloodGroup" value="<?=$data['bloodGroup']?>"/>
                    <tr>
                      <td width="50%"><b><?=$data['bloodGroup']?></b></td>
                      <td width="50%">
                      <?php if(!isset($user_id)){ ?>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#login-modal" class="btn btn-sm btn-danger">Request</a> 
                      <?php }
                       else{ ?>
                        <button name="requestBtn" <?php if($noRequest || $currentUserBloodGroup!=$data['bloodGroup']){?>disabled type="button" <?php }else{ ?> type="submit" <?php }?> class="btn btn-sm btn-danger">Request</button> 
                      <?php 
                      }
                      ?>  
                      
                      </td>
                    </tr>
                    </form>


                    <?php }  
                  }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
      <?php } 
      } 
      else
        echo"No Hospitals Found!";
      ?>
    </div>

  </div>

  
  <?php
     if($show_search){
   ?>
   <div class="layer">
    <div class="search_container">
        <div class="row">
            <div class="col-12 text-center my-4">
                <img src="img/location.png" style="width: 60px;" alt="">
            </div>
            <div class="col-12">
            <div class="input-group rounded">
                <input type="search" id="searched_city" class="form-control rounded" placeholder="Please select your city" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text btn border-0" onclick="searchCity()" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            </div>
        </div>
    </div>
     
   </div> 
  <?php
      }
  ?>

 <?php
        include "components/Signup_modal.php";
        include "components/Login_modal.php"; 
    ?>

 <script>
    function searchCity(){
        window.location = 'availability.php?city='+document.getElementById('searched_city').value;
    }
 </script>
</body>

</html>