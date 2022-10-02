<?php
  $uri = $_SERVER['REQUEST_URI'];
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
</head>
<body>

<!-- includes the cdns -->
<?php include('./includes/utils.html')?>

<nav class="navbar fixed-top navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php"> <img src="https://www.seekpng.com/png/detail/26-264202_clipart-blood-drop-blood-drop-clipart-transparent.png" width="20px"/> True Friend</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">      <!-- changes the active status -->
            <li class="nav-item">
               <a class="nav-link <?php if($uri=='/Hackathon/True%20Friend/index.php') echo 'active text-danger'; ?>" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?php if($uri=='/Hackathon/True%20Friend/availability.php')echo 'active text-danger'; ?>" href="./availability.php">Availability</a>
            </li>
            <?php if(isset($_SESSION['hospitalName'])){?>
            <li class="nav-item">
               <a class="nav-link <?php if($uri=='/Hackathon/True%20Friend/addbloodinfo.php')echo 'active text-danger'; ?>" href="./addbloodinfo.php">Add Blood Info</a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?php if($uri=='/Hackathon/True%20Friend/viewrequests.php')echo 'active text-danger'; ?>" href="./viewrequests.php">View Requests</a>
            </li>
            <?php }
            else{ ?>
            <li class="nav-item">
               <a class="nav-link <?php if($uri=='/Hackathon/True%20Friend/donate.php')echo 'active text-danger'; ?>" href="./donate.php">Donate</a>
            </li>
            <?php }?>
        </ul>

        <div>
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['user_id'])){?>          <!-- Displays logout btn if logged in -->
                    <li class="nav-item">
                       <a class="nav-link" href="Profile.php">
                            <i class="fas fa-user mx-1"></i>
                        </a>
                    </li>
                  <form method="POST" action="./backend/auth.php">
                    <li class="nav-item">
                    <button type="submit" name="logout" class="btn" value="true" class="nav-link" aria-current="page">Logout</button>
                    </li>
                  </form>  

                <?php }else{?> 

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">
                            <i class="fas fa-user mx-1"></i>Signup
                        </a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-modal">
                            <i class="fas fa-sign-in-alt mx-1"></i>Login
                        </a>
                    </li>

                <?php }?>  
            </ul>
        </div>

        </div>
    </div>
</nav>

 
</body>
</html>


<style>
    .nav-link:hover{
        color: red;
    }
    i{
        cursor: pointer;
    }
</style>
        

