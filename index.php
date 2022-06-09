<?php include 'navbar.php'?>    <!-- includes the dynamic Navbar -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>GymFreaks</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container-fluid px-0">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"> <!-- Carousel with automatic panning with fade effect -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1600x600/?Fitness" class="d-block w-100" alt="..."> <!-- Using Unplash api for getting images -->
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1600x600/?Fitness,health" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1600x600/?Fitness,atheletics" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="container my-4">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">                                             <!-- Displaying cards for gym information -->
          <div class="card shadow-sm">        
          <img src="old.JPG" class="d-block w-100" alt="img1">  

            <div class="card-body">
              <p class="card-text">Our GYM is in business for the last 2 decades.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="equipment.jpg" class="d-block w-100" alt="img1">
            <div class="card-body">
              <p class="card-text">Providing the best equipment for your optimum performance.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="train.JFIF" class="d-block w-100" alt="img1">

            <div class="card-body">
              <p class="card-text">Certified trainers to assist you for your workout.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img src="safety.JFIF" class="d-block w-100" alt="img1">            <div class="card-body">
              <p class="card-text">Member safety and health is our top priority.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="best.JPG" class="d-block w-100" alt="img1">

            <div class="card-body">
              <p class="card-text">Best awarded GYM in 2017.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>
               
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="amen.JPG" class="d-block w-100" alt="img1">

            <div class="card-body">
              <p class="card-text">Additional amenities provided on site.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                </div>
               
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<div class="container">

<p class="display-7">   <!-- Some information-->
    Our Gym is suitable for most type of people. Be it a casual or a hardcore trainee. Join our gym today to learn a new lifestyle of health.
    The gym is eqipped with state of the art equipment accompined with certified trained professional for those who seek help during workout.
    Our gym takes pride in the safety we provide as out standard to prevent any unintentional injury to both members our our trainers. Contact us
    to find out more about the gym and try asking for a free trial to experience the finesh gym experience.
</p>

</div>
<?php include 'footer.php'; ?>  <!-- adding footer to the webpage-->



  </body>
</html>