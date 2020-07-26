<?php  
$i = $_GET['id'];

include ('../../config.php'); 
include (style."nav.php");
include (style."header.php");

$sql = "SELECT * FROM patients WHERE nom = '$i'";  
$result = $conn->query($sql);

   ?>
   <div class="row">

    <div id="form-container" class="form-container" style=" width: 92% !important;"> 
    <h1>profile patents</h1>
   <?php
   if ($result) {
 
    ?>
 <table class="table mt-5">
 <thead class="thead">
 <tr>
                <th>Nom</th>  
                <th>Reference</th>
                <th>Prenom</th>
                <th>CIN</th>
                <th>Mutuelle</th>
                <th>Tel</th>
            </tr>
 </thead>
 <?php while($row = $result->fetch_assoc()){ ?>
 <tbody class="tbody">

 <tr>
   <th><?= $row['nom'] ?></th>
   <th><?= $row["reference"] ?></th>
   <th><?= $row['prenom'] ?></th>
   <th><?= $row["cin"];?></th>
   <th><?= $row["mutuelle"];?></th>
   <th><?= $row["tel"];?></th>
   </tr>
   </tbody>
 <?php } } ?>
   <?php
   $sql = "SELECT * FROM medicaments WHERE name = '$i'";  
$result = $conn->query($sql);
if ($result) {
?>
  <table class="table mt-5 "id="table">
                <thead class="thead">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="tbody ">
                <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>

                        <td scope="row"><?= $row['name'] ?? '' ?></td>
                        <td><?= $row['description'] ?? '' ?></td>
                        <td>
                        </tr>
                <?php }
}
                ?>
</div>
</div>