<?php
   include('../../config.php'); 
   include (style."/nav.php");
   include (style."/header.php");
   if(!isset($_POST['submit'])){
$mId = $_GET['id']; 

$sql = "SELECT * FROM medicaments WHERE id=$mId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
}
   }
if(isset($_POST['submit'])){
    
$id = $_POST['id'];
$name =  $_POST['name'];
$description = $_POST['description'];

$sql = "UPDATE medicaments SET name = '$name', description = '$description' WHERE id=$id";
$message  = db_update($sql);
header("location:index.php");
}

?>
        <div id="form-container">
            <h1>Edit medicament</h1>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input name="id" type="hidden" class="form-control" value="<?= $row['id'] ?>">
            <div class="form-group">
                <input name="name" type="text" class="form-control" value="<?=$row['name'] ?>">
            </div>
            <div class="form-group">
                <input name="description" type="text" class="form-control" value="<?= $row['description'] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
      
