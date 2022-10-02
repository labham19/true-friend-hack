<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>True Friend &starf;</title>
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="./css/Common.css">
  </head>
  <body>
     <?php include('./components/Navbar.php')?>     
   
     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://healthmatters.nyp.org/wp-content/uploads/2021/12/nybc-blood-donation-hero.jpg" class="d-block w-100" style="height: 640px;" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Every 2 seconds someone needs blood</h5>
                    <p>And we are here to help.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="https://s7d2.scene7.com/is/image/TWCNews/0706_blood_bags_pixabayjpg" class="d-block w-100" style="height: 640px;" alt="...">
               <div class="carousel-caption d-none d-md-block">
                    <h5>Check out blood availability</h5>
                    <p>Check out blood availability in the hospitals near you.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="https://www.hopkinsmedicine.org/-/media/images/health/2_-treatment/pathology/blood-banking-hero.ashx?h=500&iar=0&mh=500&mw=1300&w=1297&hash=8FE7D60CC3BFA31566598DAE13D91331" style="height: 640px;" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>We are at your service</h5>
                    <p>You can return the favour by donating blood later. It can save someone's life.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="page-container">
        <h1 class="city-heading mb-5">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="availability.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="availability.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="availability.php?city=Bengaluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="availability.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

      <div class="container my-5">
        <div class="row">
            <div class="col text-center">
              <h5>True Friend </h5>  
              <h4>is your friend in need!</h4>
              <p><a href="./availability.php">Check out the blood availability in the hospitals near you</a></p>
            </div>
        </div>
      </div>

    
      <?php
        include "components/Signup_modal.php";
        include "components/Login_modal.php";
        include('./components/Footer.php')
       ?>  
</body>
</html>
