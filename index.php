<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="index2.css">

    <title>Polyship!</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <?php include 'navbar.php';?>


<center>
  <section id="welcome_sec">
    
    <h2> Wondering where to find recyclable Plastic ?</h2> 
    <h3> You're at the right place!</br>
    Welcome to PolyShip, Let us help you to find your destination.
  </h3>
  <p >Polyship is designed to find your way to get the plastic that you want, and mold it in your own way.</br>
    This website is for all the Ductile Industries so that they could know where to get the type of plastic they want. </br>
    It can help you get the location and contacts of the vendors who sell waste plastic.</br>
    Let's find your way...!
</p>
  </br>
  <a name="scrollbtn" id="scrollbtn" class="btn btn-primary" href="#card" role="button">Get Started</a>

</section>
</center>


<!--Card-->
<center>
      <div  id="card" style="">
        <div class="row">
        <div class="card col-xl-2 col-half-offset col-sm-4 " style="width: 18rem;">
            <img src="images/pet1.jpg" class="card-img-top" alt="Polythelene Terephthalate">
            <div class="card-body">
              <h5 class="card-title">PET</h5>
              <p class="card-text">Polythelene Terephthalate(PET): Water bottles and plastic trays.</p>
              <a href="pet_page.php" class="btn btn-primary">View Locations</a>
            </div>
          </div>
          <div class="card col-xl-2 col-half-offset  col-sm-4" style="width: 18rem;">
            <img src="images/hdep.jpeg" class="card-img-top" alt="High Density Polythelene">
            <div class="card-body">
              <h5 class="card-title">HDEP</h5>
              <p class="card-text"> High Density Polythelene(HDEP): Milk cartoons and shampoo bottles.</p>
              <a href="hdep_page.php" class="btn btn-primary">View Locations</a>
            </div>
          </div>
          <div class="card col-xl-2 col-half-offset  col-sm-4" style="width: 18rem;">
            <img src="images/pvc.jpeg" class="card-img-top" alt="Polyvinyl Chloride">
            <div class="card-body">
              <h5 class="card-title">PVC</h5>
              <p class="card-text">Polyvinyl Chloride(PVC): Pipes.</p></br>
              <a href="pvc_page.php"  class="btn btn-primary">View Locations</a>
            </div>
          </div>
          <div class="card col-xl-2 col-half-offset   col-sm-4" style="width: 18rem;">
            <img src="images/ldep.jpeg" class="card-img-top" style="padding-top: 10px;" alt="Low Density Polythelene">
            <div class="card-body">
              <h5 class="card-title" >LDEP</h5>
              <p class="card-text">Low Density Polythelene(LDEP): Food Bags.</p></br>
              <a href="ldep_page.php"  class="btn btn-primary">View Locations</a>
            </div>
          </div>
          <div class="card col-xl-2 col-half-offset  col-sm-4" style="width: 18rem;">
            <img src="images/pp.jpeg" class="card-img-top" alt="Polypropylene">
            <div class="card-body">
              <h5 class="card-title">PP</h5>
              <p class="card-text">Polypropylene(PP): Margarine tubs and ready-meal trays.</p></br>
              <a href="pp_page.php"  class="btn btn-primary">View Locations</a>
            </div>
          </div>
</div>
    </div>
</center>

  </body>
</html>