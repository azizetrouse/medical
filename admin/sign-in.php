<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style1.css">
    <title>sign-in</title>
</head>
<body>
<?php 
 include ('function/db.php'); 
     include ('function/validate.php');
    if (isset ($_POST['submit'])) {   
   

 $user = $_POST["username"];
$email = $_POST["email"];
 $number = $_POST["numero"];
 $cin = $_POST["medecin"];
 $work = $_POST["travail"];
 $password = $_POST["password"];
$hashpd = $_POST["hashpassword"];
 

$query = " SELECT * FROM users WHERE email = '$email'";
 $resolt = mysqli_query($conn,$query);
  
 if (sanitizeString(chekEmpty($user)) && sanitizeString(chekEmpty($number)) && sanitizeString(chekEmpty($cin)) && 
 sanitizeString(chekEmpty($work)) && sanitizeString(chekEmpty($password)) && sanitizeString(chekEmpty($hashpd)) )
  {

if(ValidEmail($email)) {
if ($resolt->num_rows===0) {
if ($password===$hashpd) {
   $newpassword = password_hash($password,PASSWORD_DEFAULT);
   echo $newpassword;
    $sql = "INSERT INTO users (username, email, noumber, diplome, work, password)
VALUES ('$user','$email','$number','$cin','$work','$newpassword')";
if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/medical/admin/login.php"); 
 }
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
    $errormsg ="password is not confirm" ;
}
}

 else{
    echo "Error deleting record: " . $conn->error;
 }
}

else
{
$errormsg = "Please Email Fields";
}
 }   
 else{
    $errormsg = "Please Fields";
 } 
}
?>

<div class="container">
<div class="row-form-container">
 <h1 class="text-center -1">sign in</h1>
   
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <?php include ('function/message.php'); ?>  
      <!-- <div class="form-group">
         
        </div> -->
        <!-- p-1 mt-1 -->
        <div class="form-group ">
            <input name="username" type="username" class="form-control" placeholder="Enter voter nom complet">
        </div>
        <div class="form-group p-1 mt-1">
            <input name="email" type="email" class="form-control" placeholder="email">
        </div>
        <div class="form-group p-1 mt-1">
            <input name="numero" type="noumber" class="form-control" placeholder="numero de telephone">
        </div>
        
      
        <select class="form-control" name="medecin">
                        <option value=''>Situation familiale</option>
                        <option>Divorcé</option>
                        <option>Remarié</option>
         </select> 

        <div class="form-group p-1 mt-1">
             <input name="travail" type="lien de travail" class="form-control" placeholder="lien de travail">
        </div>
       
        <div class="form-group p-1 m-1">
             <input name="password" type="password" class="form-control" placeholder="Password">
        </div>
        
        <div class="form-group p-1 mt-1">
             <input name="hashpassword" type="password" class="form-control" placeholder="Password">
        </div>

         
         <div class="form-group p-1 mt-1">
        <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
        <a href="login.php">login</a>
        </div> 
    </form>

</div> 
</div>
</body>
</html>