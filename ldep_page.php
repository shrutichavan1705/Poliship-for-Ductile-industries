<?php

require_once('db_con.php');


$ldep_query="SELECT `district`, `location`, `name`, `contact` FROM `location_data` WHERE `ldep`=1;
";
$ldep_result=mysqli_query($con,$ldep_query);

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

    <title>Low density Polythelene</title>
  </head>
  <body>

  <?php include 'navbar.php';?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<div id="info_section">
  &emsp;Low Density Polyethylene (LDPE)
</br>
At general living temperatures LDPE is a highly non-reactive material, which explains why it has become one of the most common plastics in use at the moment. 
It can withstand temperatures approaching 100°C, and though it is not as strong as HDPE (its high density counterpart), it is certainly more resilient.
</br></br>
<b>Properties:-</b>
<ol>
  <li>It is a homopolymer; made of a single monomer, ethylene.
  The polymer density is controlled by the kind of branching it has.
  </li><li>LDPE contains a mix of long branched chains and short branched chains.
  It is produced by undergoing a high-pressure process.
  </li><li>It is not very easy to bond.It has a sufficient moisture barrier.
  </li><li>Its oxygen barrier is low.
  </li><li>It has significant chemical resistance.</li>
</ol>

<b>Applications :-</b> 
<ul>
  <li>Trays, containers, work surfaces, machine parts, lids, '6-ring' drink holders, drink cartons, protective shells, computer hardware casings, playground fixtures (slides and the like), bin-bags, laundry bags.
</li>
</ul> 
</div>
    
<center>

<img  id="symbol" src="images/ldep_sym.png" alt="" height="250px" width="250px">


<div id="table_ldep">
<h3 style="font-weight:bold;font-style:italic;">Low Density Polythelene</h3>

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
        while($row=mysqli_fetch_assoc($ldep_result)){
    ?>
        <th scope="row"><?php echo"$var";?></th>
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