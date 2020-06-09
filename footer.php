</div>
<?php include "patient.php";?>
<link rel="stylesheet" href="assets/css/style.css">
<footer>
<footer>
</body>
</html>
<?php
    if (isset ($_POST['color1'])) {
        echo "<style> body{background:".$_POST['color1'].";
             transition: 1s; color:white;}</style>";
    }
   
        if (isset ($_POST['color2'])) {
            echo "<style> 
            body{background: black;}
            #form-container{background: #000000;}
           .nav-bar li a{ background: #0a04117a; color: white;}
            #nav-links{background: black;}
           .doctor{ background: black;}
            table{ background: black; }
            table th , td{ color: white;}
            h1{ background: black;}
            form{ background: black;}
            
    
            </style>";
        }
        ?>