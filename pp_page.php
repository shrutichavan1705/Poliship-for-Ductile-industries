<?php

require_once('db_con.php');


$pp_query="SELECT `district`, `location`, `name`, `contact` FROM `location_data` WHERE `pp`=1;
";
$pp_result=mysqli_query($con,$pp_query);

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

    <title>Polypropylene</title>
  </head>
  <body>

  <?php include 'navbar.php';?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<div id="info_section">
&emsp;Polypropylene is a polymer whose monomer is propylene (an organic hydrocarbon with the chemical formula C3H6). The chemical formula of polypropylene is (C3H6)n. This polymer is also known as polypropene and is often denoted by the abbreviation 'PP'. 
  Generally, polypropylene is produced via a chain-growth polymerization reaction involving propylene. 
  This polymer is known to be a thermoplastic polymer, i.e. it softens upon heating and can, therefore, be remoulded. It can also be noted that polypropylene is non-polar and has a partially crystalline structure.
</br></br>
<b>Properties :-</b>
<ol>
  <li>Toughness and flexibility (exhibited to a large extent especially when the polymerization process involves copolymerization with ethylene).
</li><li>Large thermal expansion.
</li><li>Resistant to organic solvents.
</li><li>Resistant to weak oxidizing agents.
</li><li>.Soluble in some organic nonpolar solvents like xylene.</li>

</ol>

<b>Applications :-</b>
<ul>
  <li>Polypropylene is also used in the manufacture of mats, rugs, and carpets for home use.</li>
  <li>Fibres made up of polypropylene can be used to reinforce drywall joints.</li>
  <li>This polymer is also used in the production of plastic piping systems.</li>

</ul>
</div>
    
<center>

<img  id="symbol" src="images/pp_sym.png" alt="" height="250px" width="250px">


<div id="table_pp">
<h3 style="font-weight:bold;font-style:italic;">Polypropylene</h3>

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
        while($row=mysqli_fetch_assoc($pp_result)){
    ?>
        <th scope="row"><?php echo "$var";?></th>
        <td><?php echo "$row[district]"; ?></td>
        <td><?php echo "$row[location]"; ?></td>
        <td><?php echo "$row[name]"; ?></td>
        <td><?php echo "$row[contact]"; ?></td>
    </tr>
    
    <?php
        $var++;}
    ?>
        
    
    </tbody>
</table>
</div>
</center>

<a id="topbtn" href="index.php #card">Back</a>

    
  </body>
</html>