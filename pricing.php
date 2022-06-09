<?php include 'navbar.php'?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pricing</title>
  </head>
  <body>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <div class="container my-4">
 <h1 class="display-4 fw-normal">Pricing</h1>
      <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        </div>
    </div>
    <div class="container">

     <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Monthly</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$100<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li> 
            <li>$100 billed Monthly</li>  
              <li>&nbsp;</li>
            </ul>
            <form action="userMem.php" method="post">
            <input type="submit" name="submit" value="Get Started" class="w-100 btn btn-lg btn-outline-primary">
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">6 Months</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$540<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li> 
            <li>$90 billed Monthly</li>  
              <li>&nbsp;</li>
            </ul>
            <form action="userMem.php" method="post">
            <input type="submit" name="submit" value="Get Started" class="w-100 btn btn-lg btn-outline-primary">
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">12 Months</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$900<small class="text-muted fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>&nbsp;</li> 
            <li>$75 billed Monthly</li>  
              <li>Most effective and popular</li>
            </ul>
            <form action="userMem.php" method="post">
            <input type="submit" name="submit" value="Get Started" class="w-100 btn btn-lg btn-outline-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="container" align-items: center>
<p class="display-7">
    Please select a plan to continue...
</p>
</div>
</form>
<?php include 'footer.php'?>
  </body>
</html>