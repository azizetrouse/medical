<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style1.css">
</head>
<body>
<?php   

          session_start();
    include ('function/db.php'); 
     include ('function/validate.php');
if (isset($_POST['submit'])) {
      
       $user = sanitizeString($_POST['username']);
       $password = $_POST['password'];
 if (chekEmpty($user) &&  chekEmpty($password)){
           
          $chek = getRow('username',$user,'users'); 
        $chek_password = password_verify($password, $chek['password']);
      if ($chek) {
        
      if ($chek_password) {  
          header ("Location: http://localhost/medical/index.php");
          $_SESSION['password'] = $password;
           $_SESSION['username'] = $user;
      } 
      else 
          {
      
           $errormsg = "Incorrect Information";
             }
     }
     else{
      $errormsg = "Incorrect user";
     }
        
   }
   else 
   {
    $errormsg = "Please Fill All Fields";
   }
}
 ?>
    <div class="container">

    <div class="login-form-container">
     <h1 class="text-center p-1">Login to your space</h1>
       
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <?php include ('function/message.php'); ?>  
          <div class="form-group p-2 mt-2">
                <input name="username" type="text" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group p-2 mt-2">
                 <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group p-2 mt-2">
            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
            </div>
            <a href="sign-in.php">sign</a>
        </form>
    
    </div>
</div>

</body>
</html>