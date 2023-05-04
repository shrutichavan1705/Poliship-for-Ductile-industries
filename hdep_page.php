<?php

require_once('db_con.php');


$hdep_query="SELECT `district`, `location`, `name`, `contact` FROM `location_data` WHERE `hdep`=1;
";
$hdep_result=mysqli_query($con,$hdep_query);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="index2.css"/>

    <title>Polythelene Terephthalate</title>
  </head>
  <body>

  <?php include 'navbar.php';?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<div id="info_section">
  &emsp;High density polyethylene, often abbreviated to HDPE, is a polymer whose monomer is ethylene. 
  It is a thermoplastic with a very high strength to density ratio. HDPE is a very versatile plastic that has a wide range of applications - from pipes to storage bottles. 
  When compared to other plastics, the melting point of high density polyethylene is relatively high.
  HDPE is a type of polyethylene, the most common plastic which accounts for over 34% of the global plastic market. It is a polymer made up of a huge number of repeating units (known as monomers), and its chemical formula can be generalized as (C2H4)n. 
</br></br>
<b>
  Properties :-
</b>
<ol>
  <li>Moldability :
  HDPE retains its rigid structure until its melting point is reached.
  </li><li>Resistance to Corrosion:
  This polymer is resistant to mould and rotting, making it an ideal choice for making underground water pipes.
  </li><li>Recyclable:
  The resin identification code of HDPE is 2, it can be recycled easily.</li>
</ol>

<b>
  Applications :-
</b>
<ul>
  <li>Bottle caps and bottles are made of this polymer.
  It is also used in 3-D printing filaments
  </li><li>HDPE is used in the fuel tanks of several types of automobiles.
  </li><li>It is used in plastic lumber and wood plastic composites.
  </li><li>Skeletal and facial reconstruction surgeries (part of plastic surgery) involve the use of HDPE
  </li>
</ul>
</div>
    

<center>

<img  id="symbol" src="images/hdep_sym.png" alt="" height="250px" width="250px">


<div id="table_hdep">
<h3 style="font-weight:bold;font-style:italic;">High Density Polythelene</h3>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">District</th>
        <th scope="col">Location</th>
        <th scope="col">Name</th>
        <th scope="col">Contact no.</th>
    </tr>
    </thead>
    <tbody>
    
    <?php
    $var=1;
        while($row=mysqli_fetch_assoc($hdep_result)){
    ?>
        <th scope="row"><?php echo "$var";?></th>
        <td><?php echo "$row[district]"; ?></td>
        <td><?php echo "$row[location]"; ?></td>
        <td><?php echo "$row[name]"; ?></td>
        <td><?php echo "$row[contact]"; ?></td>
    </tr>
    
    <?php
       $var++; }
    ?>
        
    
    </tbody>
</table>
</div>
</center>

<a id="topbtn" href="index.php #card">Back</a>


  </body>
</html>