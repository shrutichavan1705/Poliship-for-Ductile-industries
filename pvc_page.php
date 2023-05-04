<?php

require_once('db_con.php');

$pvc_query="SELECT `district`, `location`, `name`, `contact` FROM `location_data` WHERE `pvc`=1;
";
$pvc_result=mysqli_query($con,$pvc_query);
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

    <title>Polyvinyl Chloride</title>
  </head>
  <body>

  <?php include 'navbar.php';?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<div id="info_section">

&emsp;When the world chases highly durable, sturdy and yet economically affordable materials here is one of the strong synthetic plastics polymers known as Polyvinyl Chloride abbreviated as (PVC). PVC is the third most commonly used material in the world. It is extensively used in the construction field for its wide range of applications.

Resin is the main component in the production of PVC. It is white, brittle solid material available in powder form or granules. PVC is now replacing traditional constructional materials like ceramics, metal, concrete, wood, rubber and many more. PVC is produced by the process of polymerization of the vinyl chloride monomer.
</br></br><b>
  Properties :-
</b>
<ol>
  <li>By nature, PVC is a lightweight, sturdy and abrasion-resistant material.
  </li><li>Since the durability is more, long-life is assured.
  </li><li>PVC products are self-extinguishing due to high chlorine content.
  </li><li>It is economical and is an affordable solution.
  </li><li>It demands less maintenance and offers resistance to grease and oil.</li>
</ol>

<b>Applications :-</b>
<ul>
  <li>Used in construction fields for insulation on electrical wires or in flooring for hospitals, schools, homes, and other areas where a sterile environment is a priority.
  </li><li>It is used in making sewage pipes and other pipe applications where cost or vulnerability to corrosion limit the use of metal.
  </li>
</ul>
</div>
       
<center>

<img  id="symbol" src="images/pvc_sym.png" alt="" height="250px" width="250px">

<div id="table_pvc">
<h3 style="font-weight:bold;font-style:italic;">Polyvinyl Chloride</h3>

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
        while($row=mysqli_fetch_assoc($pvc_result)){
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