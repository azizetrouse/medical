<?php  
include ('../../config.php'); 
include (style."nav.php");
include (style."header.php");


 ?>
 <div class="row">

    <div id="form-container" class="form-container" style=" width: 92% !important;"> 
     <h1>recherche sur le patient

       <form id="serch" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form">
      <input class="search" name="search" type="search" placeholder="Search" require ></input>
      <button type="submit" name="submit" class="search" >search</button>
    
      </form> 
      </h1>
         <?php
         // if submit
       if (isset ($_POST ['submit'])) {

        $search = $_POST['search'];
        $php = "SELECT * FROM `patients` WHERE nom = '$search'"; 
        $query = mysqli_query($conn,$php);
        if($query->num_rows>0){   ?>
          <div class="boox">
         <?php
         while($row = $query->fetch_assoc()) {   ?>
            
      <div class="box">
    <img src="<?= images ?>/1.png" alt="">
    <a href="profi.php?id=<?= $row["nom"]; ?>" class="href"> <?= $row ['nom'];?></a>
    </div>

        <?php }
       }
       else{
          echo 'no patient';
       }
      }


           // if not isset submit

      if (!isset($_POST['submit'])) {
         $sql = "SELECT * FROM patients ";
         $resolt = mysqli_query($conn,$sql);

         if($resolt->num_rows>0){
            ?> <div class="boox">
            <?php
            while($row = $resolt->fetch_assoc()) {   ?>
               
               
         <div class="box">
       <img src="<?= images ?>/1.png" alt="">
       <a href="profi.php?id=<?= $row["nom"]; ?>" class="href"> <?= $row ['nom'];?></a>
       </div>
   
           <?php }
          }
      }
?>
  </div>




<?php
include (style."footer.php");
?>