<?php
   if(!isset($_SESSION['username']))
    {
      header("Location: http://127.0.0.1/medical/admin/login.php");
    }
 ?>
<body>  <div class="nav-bar">
<div class="doctor">
    <h4><img src="<?php echo images; ?>hospital.png" class="img-fluid img-responsive " alt=""></h4>
     </div>

     <div class="boxx">
    <img src="<?php echo images; ?>/docteur.jpg" alt="">
   
    <a href=""><h4><?php echo $_SESSION['username'];?></h4></a>
     </div>
    <li><a href="<?= admin; ?>patient">patient</a></li>
    <li><a href= "<?= admin; ?>/med">medicaments</a></li>
    <li><a  href= "<?= admin; ?>/medical">create medical</a></li>
    <li><a href="<?= admin;?>/profile ?>">prfile</a></li>
     <li><a href= "<?= admin; ?>function/destorey.php">exit</a></li>


    <b><a href="" id="time">  </a>
    <a href="" id="date"></a></b>

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
