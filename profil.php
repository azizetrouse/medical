<?php  

session_start();

include 'init.php';

$sql = 'SELECT * FROM patients ';  
$result = $conn->query($sql);
 ?>
 <div class="row">

    <div id="form-container" class="form-container" style=" width: 92% !important;">
       <form id="serch" action="" method="POST">
       <h1>recherche sur le patient</h1>
      <input class="search" name="search" type="search" placeholder="Search" require ></input>
      <button type="submit" id="search" name="submit" id="btn"> </button>
    </form> 

    <div class="boox">
       <?php while($row = $result->fetch_assoc()) { ?>
      <div class="box">
     <h6>  patient </h6> 
     <p>patient </p>
        <a href="">profil</a>
         
       </div>
        <?php }?>
         </div>
</div>
<?php
include "footer.php";
?>