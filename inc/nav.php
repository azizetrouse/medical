<?php 
  // ob_start();

include ('./database/connection.php');
$sql = 'SELECT * FROM patients';
$result = $conn->query($sql);?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./assets/css/style.css"> 
</head>
<body>  <div class="nav-bar">
<div class="doctor">
    <h4><img src="./images/hospital.png" alt=""></h4>
     </div>

     <div class="boxx">
    <img src="images/docteur.jpg" alt="">
   
    <a href=""><h4><?php echo $_SESSION['name'];?></h4></a>
     </div>


    <li><a href="index.php">Home</a></li>
    <li><a href="page-patient.php">patient</a></li>
    <li><a href="medicaments.php">medicaments</a></li>
    <li><a href="profil.php">prfile</a></li>
     <li><a href= "./../database/destorey.php">exit</a></li>
    <b><a href="" id="time">  </a>
    <a href="" id="date">  </a>
  </b>
    <script>
     function hour() {
    var date = new Date();
    var time = document.getElementById("time");
    var month = document.getElementById("date");
    month.innerHTML = date.getDate()+ "/" + parseInt(date.getMonth()+1)+"/"+ date.getFullYear();
    time.innerHTML = date.getHours()+ ":" + date.getMinutes()+":"+ date.getSeconds();
     }
    setInterval(hour,100);
   onload = hour();
    </script>
  
    <li>
    <form method="POST" >
    <button id="color" type="radio" name="color1" value="white" ></button>
    <button id="color2" type="radio" name="color2" value="black" ></button>
    
    </form></li>
</div> 
