<?php
include "../../config.php";
include (style."/nav.php");
include (style."/header.php");
$search =  $_SESSION['username'] ;
$sql = "SELECT * FROM `users` WHERE username = '$search'";
$resolt = mysqli_query($conn,$sql);
if ($resolt) {
    $row = $resolt->fetch_assoc();
}else{
     echo 'bnbn';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo bota; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo assets; ?>/css/style.css">
    <title>Document</title>
</head>
<body >

<div class="row "> 
<div id="form-container" style=" width: 90% !important;">
<form action="" class="form-group p-2 mt-2 w-100">

<div class="form-group float-left d-flex">
<h1 class=""><?php echo $_SESSION['username'];?></h1>
<p><?= $row['work'] ?></p>
</div>

<div class="form-group p-2 mt-2 ">
                <input name="username" type="text" class="form-control" placeholder="Enter username">
            </div>
            <div class="form-group p-2 mt-2">
                 <input type="text" class="form-control" placeholder="text">
            </div>
            <div class="form-group p-2 mt-2">
                 <label>midi</label>
                <input type="checkbox" name="" id="">
            </div>
            <div class="form-group p-2 mt-2">
                 <label>midi</label>
                <input type="checkbox" name="" id="">
            </div>
            <div class="form-group p-2 mt-2">
                 <label>midi</label>
                 <input type="checkbox" name="" id="">
            </div>
            <div class="form-group p-2 mt-2">
            <button type="submit" name="submit" class="btn btn-primary" onclick="window.print()">create pdf</button>
            </div>
            </form>
            </div>
            </div>
</body>
</html>