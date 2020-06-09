<?php
ob_start();
session_start();
if (!isset($_SESSION['name'])){

  header('location:http://localhost/pr/login.php');
  
}
 include 'init.php'; 

$sql = 'SELECT * FROM patients';

$result = $conn->query($sql);

 $num = mysqli_num_rows($result);?>

<div class="row">
  <div id="form-container" style="background-color: #bbbbb;  width: 92% !important;">
    <div class="boox">
    <div class="box">
     <p></p>
     <img src="images/1.png" alt="">
      <h2><?php echo $num; ?></h2> 
     </div>
     <div class="box">
     <p></p>
     <img src="images/2.png" alt="">
      <h2><?php echo $num; ?></h2> 
     </div>
     <div class="box">
     <p></p>
     <img src="images/2.png" alt="">
      <h2><?php echo $num; ?></h2> 
     </div>
     
    
     
    </div>
<?php
include "footer.php";
?>