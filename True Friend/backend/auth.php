<?php
session_start();
include("./conn.php");

if(isset($_POST['login'])){
  extract($_POST);
  
  $query = "SELECT * FROM `recievers` WHERE `email`='$email' and `password`='$password'";
  $reciever_query_fire = mysqli_query($conn,$query);

  if(mysqli_num_rows($reciever_query_fire)==0){
    $query2 = "SELECT * FROM `hospitals` WHERE `email`='$email' and `password`='$password'";
    $hospital_query_fire = mysqli_query($conn,$query2);

    if(mysqli_num_rows($hospital_query_fire)==0){
      echo "<script>window.location='../index.php'</script>";
    }
    else{
        $row = mysqli_fetch_assoc($hospital_query_fire);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['hospitalName'] = $row['hospitalName'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['email'] = $row['email'];
        echo "<script>window.location='../index.php'</script>";
    }
  }
  else{
     $row = mysqli_fetch_assoc($reciever_query_fire);
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_name'] = $row['name'];
      $_SESSION['dob'] = $row['dob'];
      $_SESSION['bloodGroup'] = $row['bloodGroup'];
      $_SESSION['email'] = $row['email'];
    
      echo "<script>window.location='../index.php'</script>";
  }

}

if(isset($_POST['register_reciever'])){
  extract($_POST);

  $query = "INSERT INTO `recievers`(`name`, `dob`, `bloodGroup`, `email`, `password`,`phoneNumber`,`aadhar`,`aadharPic`) VALUES ('$name','$dob','$bloodGroup','$email','$password','$phoneNumber','$aadhar','Aadhar')";
  $query_fire = mysqli_query($conn,$query);
  echo $query;
  if(!$query_fire){
    echo "Some Error Occured";
    echo "<script>window.location='../index.php'</script>";
  }

  else{
    $_SESSION['user_id'] = mysqli_insert_id($conn);
    $_SESSION['user_name'] = $name;
    $_SESSION['dob'] = $dob;
    $_SESSION['bloodGroup'] = $bloodGroup;
    $_SESSION['email'] = $email;
    echo "<script>window.location='../index.php'</script>";
  }
}

if(isset($_POST['register_hospital'])){
  extract($_POST);
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["displayImage"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } 
  else {
    if (move_uploaded_file($_FILES["displayImage"]["tmp_name"], $target_file)) {
      echo "The file has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  $nameoffile = $_FILES["displayImage"]["name"];

  $query = "INSERT INTO `hospitals`(`hospitalName`, `address`, `email`, `password`, `displayImage`, `city`, `state`, `zipCode`) VALUES ('$hospitalName','$address','$email','$password','$nameoffile','$city','$state','$zipCode')";
  $query_fire = mysqli_query($conn,$query);

  if(!$query_fire){
    echo "Some Error Occured";
    echo "<script>window.location='../index.php'</script>";
  }

  else{
    session_start();
    $_SESSION['user_id'] = mysqli_insert_id($conn);
    $_SESSION['hospitalName'] = $hospitalName;
    $_SESSION['address'] = $address;
    $_SESSION['email'] = $email;
    echo "<script>window.location='../index.php'</script>";
  }
}

  if(isset($_POST['logout'])){
    session_destroy();
    echo "<script>window.location='../index.php'</script>";
  }
?>