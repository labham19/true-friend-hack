<?php
session_start();
include("./conn.php");

$user_id = $_SESSION['user_id'];

extract($_POST);

if(isset($_POST['requestBtn'])){
  $check = "SELECT id from `requests` where `info_id`='$infoId' and `hospital_id`='$hospitalId' and `reciever_id`='$user_id'";
  $checkFire =  mysqli_query($conn,$check);
  if(mysqli_num_rows($checkFire)>0){
    echo "<script>alert('Request Already Exists')</script>";
    echo "<script>window.location='../availability.php'</script>";
    die();
  }
   
  $qty = 0;
  $query = "INSERT INTO `requests`(`bloodGroup`, `qty`, `info_id`, `reciever_id`,`hospital_id`) VALUES ('$bloodGroup','$qty','$infoId','$user_id','$hospitalId')";
  $query_fire = mysqli_query($conn,$query);

  if(!$query_fire){
    echo "Some Error Occured";
  }
  
  echo "<script>window.location='../availability.php'</script>";
}

if(isset($_POST['denyRequest'])){
    $query = "DELETE from `requests` where id='$deleteItem'";
    $query_fire = mysqli_query($conn,$query);
  
    if(!$query_fire){
      echo "Some Error Occured";
    }
    echo "<script>window.location='../viewrequests.php'</script>";
}

?>