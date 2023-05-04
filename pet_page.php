<?php

require_once('db_con.php');

$pet_query="SELECT `district`, `location`, `name`, `contact` FROM `location_data` WHERE `pet`=1;
";
$pet_result=mysqli_query($con,$pet_query);

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
    &emsp;“Polyethylene terephthalate is a condensation polymer of ethylene glycol and terephthalic acid.”</br>
    &emsp;PET is produced by the polymerization of ethylene glycol and terephthalic acid. Ethylene glycol is a colourless liquid obtained from ethylene, and terephthalic acid is a crystalline solid obtained from xylene. When heated together under the influence of chemical catalysts, ethylene glycol and terephthalic acid produce PET in the form of a molten, viscous mass that can be spun directly to fibres or solidified for later processing as a plastic.
</br></br>
    <b>Properties :-</b>
    <ol>
        <li>Crystal clear polymer - It is a crystal clear polymer with good purity and health. You must have seen the sparkling PET bottles with brilliant glass-clear presentation attract us.
    </li>
        <li>Safe - The objects made from PET like bottles are tough and virtually unbreakable therefore can be easily used for storage and transportation.
    </li>
        <li>Lightweight - The lightweight of PET products reduces the shipping costs compared to glass products.
    </li>
        <li>Recyclable - PET polymer is recyclable and can be reshaped in different shapes.
    </li>
    </ol>

    <b>Applications :-</b>
    <ul>
        <li>For the manufacturing of shopping bags, water bottles, videotapes.</li>
        <li>For manufacturing of, containers and bags.For manufacturing of water bottles.</li>
        <li>For manufacturing of microwaves containers.</li>
        <li>For the manufacturing of carpets.</li>
        <li>For the manufacturing of packaging films.</li>
    </ul>
</div>

<center>

<img  id="symbol" src="images/pet_sym.png" alt="" height="250px" width="250px">


  <div id="table_pet" >
  <h3 style="font-weight:bold;font-style:italic;">Polythelene Terephthalate</h3>
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
        while($row=mysqli_fetch_assoc($pet_result)){
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