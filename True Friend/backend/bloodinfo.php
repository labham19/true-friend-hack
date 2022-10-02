<?php
session_start();
include("./conn.php");

$hospital_id = $_SESSION['user_id'];
extract($_POST);

if(isset($_POST['saveBtn'])){
  $check = "SELECT id from `bloodinfo` where `bloodGroup`='$bloodGroup' and `hospital_id`='$hospital_id'";
  $checkFire =  mysqli_query($conn,$check);
  if(mysqli_num_rows($checkFire)>0){
    echo "<script>alert('Blood Group Already Exists')</script>";
    echo "<script>window.location='../addbloodinfo.php'</script>";
    die();
  }

  $query = "INSERT INTO `bloodinfo`(`bloodGroup`, `qty`, `hospital_id`) VALUES ('$bloodGroup','$qty','$hospital_id')";
  $query_fire = mysqli_query($conn,$query);

  if(!$query_fire){
    echo "Some Error Occured";
  }
  
  echo "<script>window.location='../addbloodinfo.php'</script>";
}

if(isset($_POST['editBtn'])){
    $query = "UPDATE `bloodinfo` SET `qty`='$qty' where id='$editId'";
    $query_fire = mysqli_query($conn,$query);
  
    if(!$query_fire){
      echo "Some Error Occured";
    }
    
    echo "<script>window.location='../addbloodinfo.php'</script>";
}

if(isset($_POST['deleteFinalBtn'])){
    $query = "DELETE from `bloodinfo` where id='$deleteItem'";
    $query_fire = mysqli_query($conn,$query);
  
    if(!$query_fire){
      echo "Some Error Occured";
    }
    
    echo "<script>window.location='../addbloodinfo.php'</script>";
}

?>