<?php
  include ('../../config.php'); 
  include (style."/nav.php");
  include (style."/header.php");
  ?>
    <?php
       require admi.'function/validate.php'; 
if (isset ($_POST['submit'])) {
   

 $name = $_POST['name'];
$description = $_POST['description'];

if (chekEmpty($name) && chekEmpty($description)) {

  if (sanitizeString($name) && sanitizeString($description)) {
  
$sql = "INSERT INTO medicaments (name, description) VALUES ('$name', '$description')";
$message  = db_insert($sql);
}
else{
  $errormsg = "Incorrect Information";
}
}
else{
  $errormsg = "Please Fill All Fields";
}

}
?>
<div class="row">
        <div id="form-container" class="form-container mx-10px" style=" width: 92% !important;">
            <div class="login-form col-6 m-auto">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
  
             <?php require admi.'function/message.php'; ?>
          
            
           
            <div class="form-group mt-5">
            <input name="name" type="text" class="form-control" placeholder="Enter Name of medicament">
            </div>
            <div class="form-group">
                <input name="description" type="text" class="form-control" placeholder="Enter Description">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
  </div>
</div>
 